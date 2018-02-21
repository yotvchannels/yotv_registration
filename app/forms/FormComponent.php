<?php

namespace App\Forms;

use App;
use Nette;


class FormComponent extends Nette\Application\UI\Control
{

	/**
	 * @var Nette\Security\User
	 */
	public $user;


	/**
	 * @var App\Forms\FormFactory $formFactory
	 */
	public $formFactory;

	/**
	 * @var App\Lib\LatteMacrosFactory
	 */
	public $latteMacrosFactory;


	/**
	 * @var string
	 */
	protected $systemName;


	public function injectUser(Nette\Security\User $user)
	{
		$this->user = $user;
	}


	public function injectFormFactory(App\Forms\FormFactory $formFactory)
	{
		$this->formFactory = $formFactory;
	}


	public function injectLatteMacrosFactory(App\Lib\LatteMacrosFactory $latteMacrosFactory)
	{
		$this->latteMacrosFactory = $latteMacrosFactory;
	}


	protected function attached($presenter)
	{
		parent::attached($presenter);
		$this->latteMacrosFactory->install($this->getTemplate());
	}


	/**
	 * Checks if component is signal receiver.
	 *
	 * @param  bool $signal name
	 *
	 * @return bool
	 */
	public function isSignalReceiver($signal = TRUE)
	{
		return $this->getPresenter()->isSignalReceiver($this, $signal);
	}

}
