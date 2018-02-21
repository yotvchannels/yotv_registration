<?php

namespace App\Presenters;

use App;
use Nette;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	/**
	 * @var App\Lib\ApiRepository
	 */
	protected $apiRepository;

	/**
	 * @var App\Model\ModernTv
	 */
	protected $modelModernTv;

	/**
	 * @var App\Components\CssJsLoaderFactory
	 */
	private $cssJsLoaderFactory;

	/**
	 * @var App\Lib\LatteMacrosFactory
	 */
	public $latteMacrosFactory;


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


	public function injectModernTv(App\Model\ModernTv $modelModernTv)
	{
		$this->modelModernTv = $modelModernTv;
	}


	public function injectApi(App\Lib\ApiRepository $apiRepository)
	{
		$this->apiRepository = $apiRepository;
	}

	public function injectCssJsLoaderFactory(App\Components\CssJsLoaderFactory $cssJsLoaderFactory)
	{
		$this->cssJsLoaderFactory = $cssJsLoaderFactory;
	}


	public function injectLatteMacrosFactory(App\Lib\LatteMacrosFactory $latteMacrosFactory)
	{
		$this->latteMacrosFactory = $latteMacrosFactory;
	}

	protected function createComponentCssJsLoader()
	{
		$control = $this->cssJsLoaderFactory->create();
		$control->addCss('css/bootstrap.css');
		$control->addCss('css/animate.min.css');
		$control->addCss('css/style.css');

		$control->addMinifiedJs('js/jquery.min.js');
		$control->addJs('js/netteForms.js');
		$control->addJs('js/nette.ajax.js');
		$control->addJs('js/history.ajax.js');
		$control->addMinifiedJs('js/bootstrap.min.js');
		$control->addMinifiedJs('js/bootstrap-notify.min.js');
		$control->addJs('js/main.js');
		return $control;
	}



	public function afterRender()
	{
		if ($this->isAjax() && $this->hasFlashSession()) {
			$this->redrawControl('flash');
		}
	}


	public function startup()
	{
		parent::startup();
		$this->latteMacrosFactory->install($this->getTemplate());
	}

}
