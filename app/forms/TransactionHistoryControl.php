<?php
namespace App\Forms;

use App;


interface TransactionHistoryControlFactory
{
	/** @return TransactionHistoryControl */
	public function create();
}


class TransactionHistoryControl extends FormComponent
{

	/**
	 * @var App\Model\ModernTv
	 */
	private $modernTv;

	private $viewers_id;


	public function __construct(App\Model\ModernTv $modernTv)
	{
		parent::__construct();
		$this->modernTv = $modernTv;
	}


	public function setViewersId($viewers_id)
	{
		$this->viewers_id = $viewers_id;
	}


	public function render()
	{
		$this->getTemplate()->orders = $this->modernTv->getOrders($this->viewers_id);

		$subscriptions = $this->modernTv->getSubscriptions($this->viewers_id);
		$activeSubscriptions = [];
		$pastSubscriptions = [];
		foreach ($subscriptions as $subscription) {
			if ($subscription['viewers_bouquets_cancelled'] === 1 || strtotime($subscription['viewers_bouquets_active_to']) < time()) {
				$pastSubscriptions[] = $subscription;
			} else {
				$activeSubscriptions[] = $subscription;
			}
		}

		$this->getTemplate()->activeSubscriptions = $activeSubscriptions;
		$this->getTemplate()->pastSubscriptions = $pastSubscriptions;
		$this->getTemplate()->render(str_replace('.php', '.latte', __FILE__));
	}

}
