<?php

namespace App\Presenters;

use Nette;
use Tracy\ILogger;


class Error4xxPresenter extends BasePresenter
{


	protected $logger;


	public function __construct(ILogger $logger)
	{
		parent::__construct();
		$this->logger = $logger;
	}


	public function startup()
	{
		parent::startup();
		if (!$this->getRequest()->isMethod(Nette\Application\Request::FORWARD)) {
			$this->error();
		}
	}


	public function renderDefault($exception)
	{
		// load template 403.latte or 404.latte or ... 4xx.latte
		$file = __DIR__ . "/templates/Error/{$exception->getCode()}.latte";
		$this->template->setFile(is_file($file) ? $file : __DIR__ . '/templates/Error/4xx.latte');
	}

}
