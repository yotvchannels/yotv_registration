<?php
namespace App\Forms;

use App;
use Nette;
use Nette\Application\UI\Form;


interface NewPasswordFormControlFactory
{
	/** @return NewPasswordFormControl */
	public function create();
}


class NewPasswordFormControl extends Nette\Application\UI\Control
{

	/**
	 * @var App\Model\ModernTv
	 */
	private $modernTv;

	private $hash;


	public function __construct(App\Model\ModernTv $modernTv)
	{
		parent::__construct();
		$this->modernTv = $modernTv;
	}


	public function setHash($hash)
	{
		$this->hash = $hash;
	}


	public function render()
	{
		$this->getTemplate()->render(str_replace('.php', '.latte', __FILE__));
	}


	protected function createComponentNewPasswordForm()
	{
		$form = new Form;

		$form->addPassword('password', 'Password:')
			->addRule(Form::MIN_LENGTH, 'Minimum length is 5 characters', 5)
			->setRequired();
		$form->addPassword('password2', 'Repeat password:')
			->setRequired()
			->addRule(Form::EQUAL, 'Password are not same', $form['password']);
		$form->addSubmit('submit', 'Change password')->setAttribute('class', 'btn btn-primary');

		$form->onSuccess[] = [$this, 'newPasswordFormSucceeded'];
		return $form;
	}


	public function newPasswordFormSucceeded($form, $values)
	{
		try {
			$this->modernTv->newPassword($this->hash, $values['password']);
		} catch (App\Lib\ApiException $e) {
			if ($e->getMessage() == App\Lib\ApiException::ALBAYAN_HASH_NOT_FOUND) {
				$form->addError('We have not found this change password request');
				return;
			}
			throw $e;
		}
		$this->presenter->redirect(':RecoverPassword:complete');
	}

}
