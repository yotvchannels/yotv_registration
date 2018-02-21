<?php

namespace App\Presenters;

use App;
use Nette;


class RegistrationPresenter extends BasePresenter
{


	/**
	 * @var App\Forms\RegistrationFormControlFactory
	 */
	private $registrationFormControlFactory;


	public function __construct(App\Forms\RegistrationFormControlFactory $registrationFormControlFactory)
	{
		$this->registrationFormControlFactory = $registrationFormControlFactory;
	}


	public function renderComplete($id)
	{
		$this->getTemplate()->error = FALSE;
		try {
			$this->modelModernTv->finishRegistration($id);
		} catch (App\Lib\ApiException $e) {
			if ($e->getMessage() == App\Lib\ApiException::ALBAYAN_HASH_NOT_FOUND) {
				$this->getTemplate()->error = 'Registration link is not valid';
			} elseif ($e->getMessage() == App\Lib\ApiException::ALBAYAN_HASH_PROCESSED_ALREADY) {
				$this->getTemplate()->error = 'We have processed your registration already, please proceed to login into the app';
			} elseif ($e->getMessage() == App\Lib\ApiException::MODERN_TV_ACCOUNT_CREATE_FAILED) {
				$this->getTemplate()->error = 'ModernTV error: ' . $e->getResponse();
			}
		}
	}


	protected function createComponentRegistrationFormControl()
	{
		$control = $this->registrationFormControlFactory->create();
		return $control;
	}

}
