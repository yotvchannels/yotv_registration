<?php

namespace App\Presenters;

use App;


class ProcessPresenter extends BasePresenter
{


	private function redirectToCustomer($order)
	{
		$this->flashMessage('Order ' . $order['yotv_orders_mollie_id'] . ($order['yotv_orders_status'] === 1 ? ' processed successfully!' : (' failed due to: ' . $order['yotv_orders_response'])),
			$order['yotv_orders_status'] === 1 ? 'success' : 'danger');
		$now = time();
		$token = sha1($order['device_modern_tv_account_id'] . $now . $this->apiRepository->getSettings()['secret']);
		$this->redirect(':Homepage:default', ['userId' => $order['device_modern_tv_account_id'], 'time' => $now, 'token' => $token]);
	}


	public function renderOrder($id)
	{
		$order = $this->modelModernTv->getOrder($id);
		$order = $this->modelModernTv->processOrder($order['yotv_orders_mollie_id']);

		$this->redirectToCustomer($order);
	}


	public function renderNotify()
	{
		$order = $this->modelModernTv->processOrder($this->getPresenter()->getHttpRequest()->getPost('id'));
		$this->redirectToCustomer($order);
	}


	public function renderProcessOrder($PayerID, $paymentId)
	{
		$paypalRepository = new App\Lib\PaypalRepository();
		$payment = $paypalRepository->getOrder($paymentId);

		if ($payment->getState() === 'approved') {
			throw new \Exception('Transaction already approved');
		}

		$order = $this->modelModernTv->getPaypalOrder($payment->getId());

		if ($order[0]['yotv_orders_status'] === 2) {
			throw new \Exception('Transcation cancelled');
		}

		if ($order === FALSE) {
			throw new \Exception('Unknown transaction!');
		}

		$this->getTemplate()->order = $order;
		$this->getTemplate()->payerId = $PayerID;
		$this->getTemplate()->paymentId = $paymentId;
	}

	public function renderFinishOrder($PayerID, $paymentId)
	{
		$paypalRepository = new App\Lib\PaypalRepository();
		$payment = $paypalRepository->getOrder($paymentId);

		if ($payment->getState() === 'approved') {
			throw new \Exception('Transaction already approved');
		}

		$order = $this->modelModernTv->getPaypalOrder($payment->getId());

		if ($order === FALSE) {
			throw new \Exception('Unknown transaction!');
		}

		$paypalRepository->proccessOrder($PayerID, $payment);
		$paypalOrder = $paypalRepository->getOrder($paymentId);
		if ($paypalOrder->getState() === 'approved') {
			$order = $this->modelModernTv->proccessPaypalOrder($payment->getId(), $paypalOrder->toArray() + ['yotv_orders_paypal_user_id' => $PayerID, 'yotv_orders_paypal_payment_id' => $paymentId]);
		} else {
			throw new \Exception('Transaction not approved!');
		}

		$this->getPresenter()->flashMessage('Payment ' . $order['yotv_orders_paypal_payment_id'] . ' successfully paid');
		$now = time();
		$token = sha1($order['device_modern_tv_account_id'] . $now . $this->apiRepository->getSettings()['secret']);
		$this->redirect(':Homepage:default', ['userId' => $order['device_modern_tv_account_id'], 'time' => $now, 'token' => $token]);
	}

	public function renderCancelOrder($token)
	{
		$order = $this->modelModernTv->cancelPaypalOrder($token);
		$now = time();
		$token = sha1($order['device_modern_tv_account_id'] . $now . $this->apiRepository->getSettings()['secret']);
		$this->getPresenter()->flashMessage('Payment cancelled');
		$this->redirect(':Homepage:default', ['userId' => $order['device_modern_tv_account_id'], 'time' => $now, 'token' => $token]);
	}
}
