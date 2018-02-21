<?php

namespace App\Presenters;

use App;

class HomepagePresenter extends SecurePresenter
{


	private $orderFormControlFactory;

	private $transactionHistoryControlFactory;


	public function __construct(App\Forms\OrderFormControlFactory $orderFormControlFactory, App\Forms\TransactionHistoryControlFactory $transactionHistoryControlFactory)
	{
		$this->orderFormControlFactory = $orderFormControlFactory;
		$this->transactionHistoryControlFactory = $transactionHistoryControlFactory;
	}


	protected function createComponentOrderFormControl()
	{
		$control = $this->orderFormControlFactory->create();
		$control->setViewersId($this->customer['viewers_id']);
		return $control;
	}


	protected function createComponentTransactionHistoryControl()
	{
		$control = $this->transactionHistoryControlFactory->create();
		$control->setViewersId($this->customer['viewers_id']);
		return $control;
	}

	public function renderDefault()
	{
	}
}