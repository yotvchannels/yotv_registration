<?php

namespace App\Presenters;

use App;


/**
 * Base presenter for all application presenters.
 */
class SecurePresenter extends BasePresenter
{


	protected $customer;

	/**
	 * @persistent
	 */
	public $userId;

	/**
	 * @persistent
	 */
	public $time;

	/**
	 * @persistent
	 */
	public $token;


	protected function validateToken($userId, $time, $token)
	{
		if (abs(time() - $time) > 3600) {
			return 2;
		}
		if ($token === sha1($userId . $time . 'modernitv')) {
			return 0;
		}
		return 1;
	}


	public function startup()
	{
		parent::startup();
		$userId = $this->getParameter('userId');
		$time = $this->getParameter('time');
		$token = $this->getParameter('token');


		/**
		 * Validation of user token. These 3 lines are here only for test purposes! In live app, validation must be enabled!
		 * Validation formula: $token = sha1($userId . $time . 'modernitv');
		 *
		 * $userId - ModernTv acount number
		 * $time - current time
		 * $token - token send from app
		 */
		// $userId = '17481191';
		// $time = 1518982155;
		// $token = sha1($userId . $time . 'modernitv');

		$status = $this->validateToken($userId, $time, $token);

		if ($status === 1) {
			$this->setView('invalid');
			return;
		} elseif ($status === 2) {
			$this->setView('expired');
			return;
		}

		$this->getTemplate()->customerNotFound = FALSE;
		try {
			$this->getTemplate()->customer = $this->customer = $this->modelModernTv->getCustomer($this->getParameter('userId'));
		} catch (App\Lib\ApiException $e) {
			if ($e->getMessage() == App\Lib\ApiException::CUSTOMER_UNKNOWN_CUSTOMER) {
				$this->getTemplate()->customerNotFound = TRUE;
				return;
			}
			throw $e;
		}
	}

}
