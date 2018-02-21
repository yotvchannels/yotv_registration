<?php


namespace App\Lib;

use App\Model\ModernTv;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Exception\PayPalConnectionException;

final class PaypalRepository
{
	private static $CLIENT_ID = "ASUj3hHTiqjfBGYjtLSFMaiQgZ102G4NUQ08mK9ciuvT0CrLa8o1Ry3KDwzFFZA80KGivZ8RpeXvpN9p";

	private static $SECRET = "EESa8h4yJQtU4LrBx2_OaCK_Zajbz2Yje6ypc67hZAhStA4Bbx6_rdjGjA9NzvclvJdjWR4UJGGpe8ad";

	private $apiContext = NULL;

	private $modelModernTv;

	public function __construct()
	{
		$this->apiContext = new \PayPal\Rest\ApiContext(
			new \PayPal\Auth\OAuthTokenCredential(
				self::$CLIENT_ID,     // ClientID
				self::$SECRET      // ClientSecret
			)
		);
	}

	public function prepareOrder($orders_id, $user_id, $products)
	{
		$payer = new Payer();
		$payer->setPaymentMethod("paypal");

		$total = 0;
		$items = [];
		foreach ($products as $product) {
			$item = new Item();
			$item->setName($product['products_name'])
				->setCurrency('USD')
				->setQuantity(1)
				->setSku($product['products_id']) // Similar to `item_number` in Classic API
				->setPrice($product['products_price_retail']);
			$total += $product['products_price_retail'];
			$items[] = $item;
		}

		$itemList = new ItemList();
		$itemList->setItems($items);

		$amount = new Amount();
		$amount->setCurrency("USD")
			->setTotal($total);

		$transaction = new Transaction();
		$transaction->setAmount($amount)
			->setItemList($itemList)
			->setDescription("Payment description")
			->setInvoiceNumber($orders_id);

		$redirectUrls = new RedirectUrls();
		$redirectUrls->setReturnUrl("http://localhost/albayan/www/process/process-order")
			->setCancelUrl("http://localhost/albayan/www/process/cancel-order");

		$payment = new Payment();
		$payment->setIntent("sale")
			->setPayer($payer)
			->setRedirectUrls($redirectUrls)
			->setTransactions(array($transaction));

		$request = clone $payment;

		try {
			$payment->create($this->apiContext);
		} catch (\Exception $ex) {
			throw $ex;
		}

		return $payment;
	}

	public function getOrder($paymentId)
	{
		$payment = Payment::get($paymentId, $this->apiContext);
		return $payment;
	}

	public function proccessOrder($PayerID, $payment)
	{
		// Execute payment with payer id
		$execution = new PaymentExecution();
		$execution->setPayerId($PayerID);

		try {
			// Execute payment
			$result = $payment->execute($execution, $this->apiContext);
		} catch (PayPalConnectionException $ex) {
			throw $ex;
		} catch (\Exception $ex) {
			throw $ex;
		}

		return TRUE;
	}
}
