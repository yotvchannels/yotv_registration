<?php
namespace App\Forms;

use App;
use Nette;
use Nette\Application\UI\Form;


interface RecoverPasswordFormControlFactory
{
	/** @return RecoverPasswordFormControl */
	public function create();
}


class RecoverPasswordFormControl extends Nette\Application\UI\Control
{

	/**
	 * @var App\Model\ModernTv
	 */
	private $modernTv;


	public function __construct(App\Model\ModernTv $modernTv)
	{
		parent::__construct();
		$this->modernTv = $modernTv;
	}


	public function render()
	{
		$this->getTemplate()->render(str_replace('.php', '.latte', __FILE__));
	}


	protected function createComponentRecoverPasswordForm()
	{
		$form = new Form;

		$form->addText('email', 'Enter your email address:')->setRequired(TRUE)->addRule(Form::EMAIL, 'Enter valid email');
		$form->addSubmit('submit', 'Recover')->setAttribute('class', 'btn btn-primary');

		$form->onSuccess[] = [$this, 'recoverPasswordFormSucceeded'];
		return $form;
	}


	public function recoverPasswordFormSucceeded($form, $values)
	{
		try {
			$this->modernTv->recoverPassword($values['email']);
		} catch (App\Lib\ApiException $e) {
			if ($e->getMessage() == App\Lib\ApiException::ALBAYAN_UNKNOWN_EMAIL) {
				$form->addError('We have not found account with this email');
				return;
			}
			throw $e;
		}
		$this->presenter->flashMessage('Please check your email for instructions.');
		$this->presenter->redirect('this');
	}

}
