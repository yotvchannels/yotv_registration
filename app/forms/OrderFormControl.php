<?php

namespace App\Forms;

use App;
use Nette;


interface OrderFormControlFactory
{
	/** @return OrderFormControl */
	public function create();
}

class OrderFormControl extends FormComponent
{

	/**
	 * @var App\Model\ModernTv
	 */
	private $modernTv;

	private $viewers_id;

	private $selectedProducts;

	private $availableProducts;


	public function __construct(App\Model\ModernTv $modernTv)
	{
		parent::__construct();
		$this->modernTv = $modernTv;
	}


	public function setViewersId($viewers_id)
	{
		$this->viewers_id = $viewers_id;
		$this->availableProducts = $this->modernTv->getAllowedProductsForCustomer($this->viewers_id);
	}


	protected function createComponentOrderForm()
	{
		$form = new Nette\Application\UI\Form;
		$products = [];
		foreach ($this->availableProducts as $product) {
			$products[$product['products_id']] = $product['products_name'];
		}

		$form->addRadioList('products', 'Products', $products)->setRequired();
		$form->addSubmit('submit_paypal', 'Paypal')
			//->setAttribute('class', 'ajax')
			->onClick[] = [$this, 'orderFormSucceededPaypal'];
		$form->addSubmit('submit_molie', 'Pay with molie')
			->setAttribute('class', 'ajax')
			->onClick[] = [$this, 'orderFormSucceededMollie'];

		return $form;
	}

	public function orderFormSucceededPaypal($button)
	{
		$values = $button->getForm()->getValues();
		$this->selectedProducts = $values['products'];

		$products = [];
		foreach ((array) $this->selectedProducts as $product) {
			$products[] = $this->availableProducts[$product];
		}

		$orders_id = $this->modernTv->prepareOrder($this->viewers_id, (array)$this->selectedProducts, 'paypal');

		$paypalRepository = new App\Lib\PaypalRepository();
		$payment = $paypalRepository->prepareOrder($orders_id, $this->getPresenter()->getParameter('userId'), $products);

		$this->modernTv->setPaypalId($orders_id, $payment->getId(), $payment->getToken());
		$this->getPresenter()->redirectUrl($payment->getApprovalLink());
	}

	public function orderFormSucceededMollie($button)
	{
		$values = $button->getForm()->getValues();
		$this->selectedProducts = $values['products'];

		$mollie = new \Mollie_API_Client();
		$mollie->setApiKey($this->modernTv->getSettings()['bank_token']);

		$price = 0;
		$description = [];
		foreach ((array) $this->selectedProducts as $product) {
			$price = $price + $this->availableProducts[$product]['products_price_retail'];
			$description[] = $this->availableProducts[$product]['products_name'];
		}
		$description = 'Purchase of: ' . implode(', ', $description);

		$orders_id = $this->modernTv->prepareOrder($this->viewers_id, (array) $this->selectedProducts);

		//$this->getPresenter()->getHttpRequest()->getUrl()->hostUrl
		try {
			$payment = $mollie->payments->create([
				'amount'      => $price,
				'description' => $description,
				'redirectUrl' => 'http://coolhousing.jacon.cz:5050/' . $this->getPresenter()->link(':Process:order', $orders_id),
				'webhookUrl'  => 'http://coolhousing.jacon.cz:5050/' . $this->getPresenter()->link(':Process:notify'),
			]);
		} catch (\Exception $e) {
			$this->selectedProducts = NULL;
			$this->getPresenter()->flashMessage($e->getMessage(), 'danger');
			$this->redrawControl('orderPreview');
			return;
		}

		$order = $this->modernTv->orderAssignMollieId($orders_id, $payment->id);

		$this->getTemplate()->order = $order;
		$this->getTemplate()->paymentUrl = $payment->links->paymentUrl;

		$this->redrawControl('orderPreview');
	}


	public function render()
	{
		$this->getTemplate()->availableProducts = $this->availableProducts;
		$this->getTemplate()->selectedProducts = $this->selectedProducts;
		$this->getTemplate()->setFile(str_replace('.php', '.latte', __FILE__));
		$this->getTemplate()->render();
	}

}