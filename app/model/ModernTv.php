<?php

namespace App\Model;

class ModernTv extends Model
{

	private $settings;


	public function __construct($settings)
	{
		$this->settings = $settings;
	}


	public function getSettings()
	{
		return $this->settings;
	}


	public function getCustomer($account_id)
	{
		$device = $this->apiRepository->call('devices/modernTv', 'getDataByAccountId', ['account_id' => $account_id]);
		return $this->apiRepository->call('customer', 'getData', ['viewers_id' => $device['device_modern_tv_viewers_id']]);
	}


	public function register($data)
	{
		return $this->apiRepository->call('custom/Albayn', 'register', ['data' => $data]);
	}


	public function finishRegistration($hash)
	{
		return $this->apiRepository->call('custom/Albayn', 'finishRegistration', ['hash' => $hash]);
	}


	public function recoverPassword($email)
	{
		return $this->apiRepository->call('custom/Albayn', 'recoverPassword', ['email' => $email]);
	}


	public function newPassword($hash, $password)
	{
		return $this->apiRepository->call('custom/Albayn', 'newPassword', ['hash' => $hash, 'password' => $password]);
	}


	public function getAllowedProductsForCustomer($viewers_id)
	{
		return $this->apiRepository->call('sales', 'getAllowedProductsForCustomer', ['viewers_id' => $viewers_id, 'device_type' => 'modern_tv']);
	}


	public function prepareOrder($viewers_id, $products)
	{
		return $this->apiRepository->call('custom/Albayn', 'prepareOrder', ['viewers_id' => $viewers_id, 'products' => $products]);
	}

	public function setPaypalId($orders_id, $yotv_orders_paypal_id, $yotv_orders_paypal_token)
	{
		return $this->apiRepository->call('custom/Albayn', 'setPaypalId', ['orders_id' => $orders_id, 'paypal_id'  => $yotv_orders_paypal_id, 'paypal_token' => $yotv_orders_paypal_token]);
	}

	public function orderAssignMollieId($orders_id, $mollie_id)
	{
		return $this->apiRepository->call('custom/Albayn', 'orderAssignMollieId', ['orders_id' => $orders_id, 'mollie_id' => $mollie_id]);
	}

	public function getOrder($orders_id, $mollie_id = NULL)
	{
		return $this->apiRepository->call('custom/Albayn', 'getOrder', ['orders_id' => $orders_id, 'mollie_id' => $mollie_id]);
	}

	public function proccessPaypalOrder($yotv_orders_paypal_id, $data)
	{
		return $this->apiRepository->call('custom/Albayn', 'proccessPaypalOrder', ['paypal_id' => $yotv_orders_paypal_id, 'data' => $data]);
	}

	public function cancelPaypalOrder($yotv_orders_paypal_token)
	{
		return $this->apiRepository->call('custom/Albayn', 'cancelPaypalOrder', ['paypal_token' => $yotv_orders_paypal_token]);
	}

	public function processOrder($mollie_id)
	{
		$mollie = new \Mollie_API_Client();
		$mollie->setApiKey($this->getSettings()['bank_token']);
		$payment = $mollie->payments->get($mollie_id);
		return $this->apiRepository->call('custom/Albayn', 'processOrder', ['mollie_id' => $mollie_id, 'data' => $payment]);
	}


	public function getOrders($viewers_id)
	{
		return $this->apiRepository->call('custom/Albayn', 'getOrders', ['viewers_id' => $viewers_id]);
	}


	public function getSubscriptions($viewers_id)
	{
		return $this->apiRepository->call('subscription', 'getCustomerSubscriptionInfo', ['viewers_id' => $viewers_id]);
	}

	public function getPaypalOrder($yotv_orders_paypal_id)
	{
		return $this->apiRepository->call('custom/Albayn', 'getPaypalOrder', ['paypal_id' => $yotv_orders_paypal_id]);
	}


	public function getSmsConfig()
	{
		$config = $this->cache->load('getSmsConfig');
		if ($config !== NULL) {
			return $config;
		}
		$config = $this->apiRepository->call('config', 'getConfig');
		$config['config_billing_template'] = explode(',', $config['config_billing_template']);
		$this->cache->save('getSmsConfig', $config, [\Nette\Caching\Cache::EXPIRE => '20 minutes']);
		return $config;
	}

}