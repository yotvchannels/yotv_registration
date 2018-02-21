<?php
// source: /home/domains/albayan/app/config/config.neon 
// source: /home/domains/albayan/app/config/config.local.neon 

class Container_8e9d4eb926 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Caching\Storages\FileStorage' => [1 => ['cache.storage']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Application\IRouter' => [1 => ['routing.router']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'VojtechDobes\NetteAjax\OnRequestHandler' => [1 => ['ajaxHistory.onRequestHandler']],
			'VojtechDobes\NetteAjax\OnResponseHandler' => [1 => ['ajaxHistory.onResponseHandler']],
			'App\Components\CssJsLoaderFactory' => [1 => ['22_App_Components_CssJsLoaderFactory']],
			'Nette\Object' => [
				1 => [
					'23_App_Forms_FormFactory',
					'29_App_Lib_ApiDebugBar',
					'30_App_Lib_LatteMacrosFactory',
					'32_App_Model_ModernTv',
					'33_App_Lib_ApiRepository',
				],
			],
			'App\Forms\FormFactory' => [1 => ['23_App_Forms_FormFactory']],
			'App\Forms\NewPasswordFormControlFactory' => [1 => ['24_App_Forms_NewPasswordFormControlFactory']],
			'App\Forms\OrderFormControlFactory' => [1 => ['25_App_Forms_OrderFormControlFactory']],
			'App\Forms\RecoverPasswordFormControlFactory' => [1 => ['26_App_Forms_RecoverPasswordFormControlFactory']],
			'App\Forms\RegistrationFormControlFactory' => [1 => ['27_App_Forms_RegistrationFormControlFactory']],
			'App\Forms\TransactionHistoryControlFactory' => [1 => ['28_App_Forms_TransactionHistoryControlFactory']],
			'Tracy\IBarPanel' => [1 => ['29_App_Lib_ApiDebugBar']],
			'App\Lib\ApiDebugBar' => [1 => ['29_App_Lib_ApiDebugBar']],
			'App\Lib\LatteMacrosFactory' => [1 => ['30_App_Lib_LatteMacrosFactory']],
			'Nette\Caching\Cache' => [1 => ['cache']],
			'App\Model\Model' => [1 => ['32_App_Model_ModernTv']],
			'App\Model\ModernTv' => [1 => ['32_App_Model_ModernTv']],
			'App\Lib\ApiRepository' => [1 => ['33_App_Lib_ApiRepository']],
			'App\Presenters\BasePresenter' => [
				1 => [
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\Application\UI\Presenter' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\Application\UI\Control' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\Application\UI\Component' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\ComponentModel\Container' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\ComponentModel\Component' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\Application\UI\IRenderable' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\ComponentModel\IContainer' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\ComponentModel\IComponent' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\Application\UI\ISignalReceiver' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\Application\UI\IStatePersistent' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'ArrayAccess' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'Nette\Application\IPresenter' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
				],
			],
			'App\Presenters\ProcessPresenter' => [1 => ['application.1']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.2']],
			'App\Presenters\RegistrationPresenter' => [1 => ['application.3']],
			'App\Presenters\RecoverPasswordPresenter' => [1 => ['application.4']],
			'App\Presenters\SecurePresenter' => [1 => ['application.5', 'application.6']],
			'App\Presenters\HomepagePresenter' => [1 => ['application.6']],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.7']],
			'NetteModule\ErrorPresenter' => [1 => ['application.8']],
			'NetteModule\MicroPresenter' => [1 => ['application.9']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'22_App_Components_CssJsLoaderFactory' => 'App\Components\CssJsLoaderFactory',
			'23_App_Forms_FormFactory' => 'App\Forms\FormFactory',
			'24_App_Forms_NewPasswordFormControlFactory' => 'App\Forms\NewPasswordFormControl',
			'25_App_Forms_OrderFormControlFactory' => 'App\Forms\OrderFormControl',
			'26_App_Forms_RecoverPasswordFormControlFactory' => 'App\Forms\RecoverPasswordFormControl',
			'27_App_Forms_RegistrationFormControlFactory' => 'App\Forms\RegistrationFormControl',
			'28_App_Forms_TransactionHistoryControlFactory' => 'App\Forms\TransactionHistoryControl',
			'29_App_Lib_ApiDebugBar' => 'App\Lib\ApiDebugBar',
			'30_App_Lib_LatteMacrosFactory' => 'App\Lib\LatteMacrosFactory',
			'32_App_Model_ModernTv' => 'App\Model\ModernTv',
			'33_App_Lib_ApiRepository' => 'App\Lib\ApiRepository',
			'ajaxHistory.onRequestHandler' => 'VojtechDobes\NetteAjax\OnRequestHandler',
			'ajaxHistory.onResponseHandler' => 'VojtechDobes\NetteAjax\OnResponseHandler',
			'application.1' => 'App\Presenters\ProcessPresenter',
			'application.2' => 'App\Presenters\ErrorPresenter',
			'application.3' => 'App\Presenters\RegistrationPresenter',
			'application.4' => 'App\Presenters\RecoverPasswordPresenter',
			'application.5' => 'App\Presenters\SecurePresenter',
			'application.6' => 'App\Presenters\HomepagePresenter',
			'application.7' => 'App\Presenters\Error4xxPresenter',
			'application.8' => 'NetteModule\ErrorPresenter',
			'application.9' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache' => 'Nette\Caching\Cache',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\Storages\FileStorage',
			'container' => 'Nette\DI\Container',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		],
		'tags' => [
			'inject' => [
				'24_App_Forms_NewPasswordFormControlFactory' => true,
				'25_App_Forms_OrderFormControlFactory' => true,
				'26_App_Forms_RecoverPasswordFormControlFactory' => true,
				'27_App_Forms_RegistrationFormControlFactory' => true,
				'28_App_Forms_TransactionHistoryControlFactory' => true,
				'32_App_Model_ModernTv' => true,
				'application.1' => true,
				'application.2' => true,
				'application.3' => true,
				'application.4' => true,
				'application.5' => true,
				'application.6' => true,
				'application.7' => true,
				'application.8' => true,
				'application.9' => true,
			],
			'nette.presenter' => [
				'application.1' => 'App\Presenters\ProcessPresenter',
				'application.2' => 'App\Presenters\ErrorPresenter',
				'application.3' => 'App\Presenters\RegistrationPresenter',
				'application.4' => 'App\Presenters\RecoverPasswordPresenter',
				'application.5' => 'App\Presenters\SecurePresenter',
				'application.6' => 'App\Presenters\HomepagePresenter',
				'application.7' => 'App\Presenters\Error4xxPresenter',
				'application.8' => 'NetteModule\ErrorPresenter',
				'application.9' => 'NetteModule\MicroPresenter',
			],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct(array $params = [])
	{
		$this->parameters = $params;
		$this->parameters += [
			'appDir' => '/home/domains/albayan/app',
			'wwwDir' => '/home/domains/albayan/www',
			'debugMode' => true,
			'productionMode' => false,
			'consoleMode' => false,
			'tempDir' => '/home/domains/albayan/app/../temp',
			'appSettings' => ['bank_token' => 'test_pjWdRaFKbMUgvdHHTMafwgtft3SFN5'],
			'apiSettings' => [
				'url' => 'http://localhost:9090/',
				'token' => 'shieMo3g',
				'test' => false,
				'secret' => 'modernitv',
			],
		];
	}


	public function createService__22_App_Components_CssJsLoaderFactory(): App\Components\CssJsLoaderFactory
	{
		$service = new App\Components\CssJsLoaderFactory;
		return $service;
	}


	public function createService__23_App_Forms_FormFactory(): App\Forms\FormFactory
	{
		$service = new App\Forms\FormFactory;
		return $service;
	}


	public function createService__24_App_Forms_NewPasswordFormControlFactory(): App\Forms\NewPasswordFormControlFactory
	{
		return new class ($this) implements App\Forms\NewPasswordFormControlFactory {
			private $container;


			public function __construct(Container_8e9d4eb926 $container)
			{
				$this->container = $container;
			}


			public function create(): App\Forms\NewPasswordFormControl
			{
				$service = new App\Forms\NewPasswordFormControl($this->container->getService('32_App_Model_ModernTv'));
				return $service;
			}
		};
	}


	public function createService__25_App_Forms_OrderFormControlFactory(): App\Forms\OrderFormControlFactory
	{
		return new class ($this) implements App\Forms\OrderFormControlFactory {
			private $container;


			public function __construct(Container_8e9d4eb926 $container)
			{
				$this->container = $container;
			}


			public function create(): App\Forms\OrderFormControl
			{
				$service = new App\Forms\OrderFormControl($this->container->getService('32_App_Model_ModernTv'));
				$service->injectFormFactory($this->container->getService('23_App_Forms_FormFactory'));
				$service->injectLatteMacrosFactory($this->container->getService('30_App_Lib_LatteMacrosFactory'));
				$service->injectUser($this->container->getService('security.user'));
				return $service;
			}
		};
	}


	public function createService__26_App_Forms_RecoverPasswordFormControlFactory(): App\Forms\RecoverPasswordFormControlFactory
	{
		return new class ($this) implements App\Forms\RecoverPasswordFormControlFactory {
			private $container;


			public function __construct(Container_8e9d4eb926 $container)
			{
				$this->container = $container;
			}


			public function create(): App\Forms\RecoverPasswordFormControl
			{
				$service = new App\Forms\RecoverPasswordFormControl($this->container->getService('32_App_Model_ModernTv'));
				return $service;
			}
		};
	}


	public function createService__27_App_Forms_RegistrationFormControlFactory(): App\Forms\RegistrationFormControlFactory
	{
		return new class ($this) implements App\Forms\RegistrationFormControlFactory {
			private $container;


			public function __construct(Container_8e9d4eb926 $container)
			{
				$this->container = $container;
			}


			public function create(): App\Forms\RegistrationFormControl
			{
				$service = new App\Forms\RegistrationFormControl($this->container->getService('32_App_Model_ModernTv'));
				return $service;
			}
		};
	}


	public function createService__28_App_Forms_TransactionHistoryControlFactory(): App\Forms\TransactionHistoryControlFactory
	{
		return new class ($this) implements App\Forms\TransactionHistoryControlFactory {
			private $container;


			public function __construct(Container_8e9d4eb926 $container)
			{
				$this->container = $container;
			}


			public function create(): App\Forms\TransactionHistoryControl
			{
				$service = new App\Forms\TransactionHistoryControl($this->container->getService('32_App_Model_ModernTv'));
				$service->injectFormFactory($this->container->getService('23_App_Forms_FormFactory'));
				$service->injectLatteMacrosFactory($this->container->getService('30_App_Lib_LatteMacrosFactory'));
				$service->injectUser($this->container->getService('security.user'));
				return $service;
			}
		};
	}


	public function createService__29_App_Lib_ApiDebugBar(): App\Lib\ApiDebugBar
	{
		$service = new App\Lib\ApiDebugBar;
		return $service;
	}


	public function createService__30_App_Lib_LatteMacrosFactory(): App\Lib\LatteMacrosFactory
	{
		$service = new App\Lib\LatteMacrosFactory($this->getService('32_App_Model_ModernTv'));
		return $service;
	}


	public function createService__32_App_Model_ModernTv(): App\Model\ModernTv
	{
		$service = new App\Model\ModernTv(['bank_token' => 'test_pjWdRaFKbMUgvdHHTMafwgtft3SFN5']);
		$service->injectApiRepository($this->getService('33_App_Lib_ApiRepository'));
		$service->injectCacheStorage($this->getService('cache.storage'));
		return $service;
	}


	public function createService__33_App_Lib_ApiRepository(): App\Lib\ApiRepository
	{
		$service = new App\Lib\ApiRepository(true, [
			'url' => 'http://localhost:9090/',
			'token' => 'shieMo3g',
			'test' => false,
			'secret' => 'modernitv',
		], $this->getService('security.user'));
		return $service;
	}


	public function createServiceAjaxHistory__onRequestHandler(): VojtechDobes\NetteAjax\OnRequestHandler
	{
		$service = new VojtechDobes\NetteAjax\OnRequestHandler($this->getService('http.request'),
			$this->getService('ajaxHistory.onResponseHandler'));
		return $service;
	}


	public function createServiceAjaxHistory__onResponseHandler(): VojtechDobes\NetteAjax\OnResponseHandler
	{
		$service = new VojtechDobes\NetteAjax\OnResponseHandler($this->getService('http.request'),
			$this->getService('routing.router'));
		return $service;
	}


	public function createServiceApplication__1(): App\Presenters\ProcessPresenter
	{
		$service = new App\Presenters\ProcessPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectApi($this->getService('33_App_Lib_ApiRepository'));
		$service->injectCssJsLoaderFactory($this->getService('22_App_Components_CssJsLoaderFactory'));
		$service->injectLatteMacrosFactory($this->getService('30_App_Lib_LatteMacrosFactory'));
		$service->injectModernTv($this->getService('32_App_Model_ModernTv'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__2(): App\Presenters\ErrorPresenter
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectApi($this->getService('33_App_Lib_ApiRepository'));
		$service->injectCssJsLoaderFactory($this->getService('22_App_Components_CssJsLoaderFactory'));
		$service->injectLatteMacrosFactory($this->getService('30_App_Lib_LatteMacrosFactory'));
		$service->injectModernTv($this->getService('32_App_Model_ModernTv'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\RegistrationPresenter
	{
		$service = new App\Presenters\RegistrationPresenter($this->getService('27_App_Forms_RegistrationFormControlFactory'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectApi($this->getService('33_App_Lib_ApiRepository'));
		$service->injectCssJsLoaderFactory($this->getService('22_App_Components_CssJsLoaderFactory'));
		$service->injectLatteMacrosFactory($this->getService('30_App_Lib_LatteMacrosFactory'));
		$service->injectModernTv($this->getService('32_App_Model_ModernTv'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__4(): App\Presenters\RecoverPasswordPresenter
	{
		$service = new App\Presenters\RecoverPasswordPresenter($this->getService('26_App_Forms_RecoverPasswordFormControlFactory'),
			$this->getService('24_App_Forms_NewPasswordFormControlFactory'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectApi($this->getService('33_App_Lib_ApiRepository'));
		$service->injectCssJsLoaderFactory($this->getService('22_App_Components_CssJsLoaderFactory'));
		$service->injectLatteMacrosFactory($this->getService('30_App_Lib_LatteMacrosFactory'));
		$service->injectModernTv($this->getService('32_App_Model_ModernTv'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): App\Presenters\SecurePresenter
	{
		$service = new App\Presenters\SecurePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectApi($this->getService('33_App_Lib_ApiRepository'));
		$service->injectCssJsLoaderFactory($this->getService('22_App_Components_CssJsLoaderFactory'));
		$service->injectLatteMacrosFactory($this->getService('30_App_Lib_LatteMacrosFactory'));
		$service->injectModernTv($this->getService('32_App_Model_ModernTv'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__6(): App\Presenters\HomepagePresenter
	{
		$service = new App\Presenters\HomepagePresenter($this->getService('25_App_Forms_OrderFormControlFactory'),
			$this->getService('28_App_Forms_TransactionHistoryControlFactory'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectApi($this->getService('33_App_Lib_ApiRepository'));
		$service->injectCssJsLoaderFactory($this->getService('22_App_Components_CssJsLoaderFactory'));
		$service->injectLatteMacrosFactory($this->getService('30_App_Lib_LatteMacrosFactory'));
		$service->injectModernTv($this->getService('32_App_Model_ModernTv'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__7(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter($this->getService('tracy.logger'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectApi($this->getService('33_App_Lib_ApiRepository'));
		$service->injectCssJsLoaderFactory($this->getService('22_App_Components_CssJsLoaderFactory'));
		$service->injectLatteMacrosFactory($this->getService('30_App_Lib_LatteMacrosFactory'));
		$service->injectModernTv($this->getService('32_App_Model_ModernTv'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__8(): NetteModule\ErrorPresenter
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	public function createServiceApplication__9(): NetteModule\MicroPresenter
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'),
			$this->getService('routing.router'));
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'));
		$service->catchExceptions = false;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$service->onRequest[] = $this->getService('ajaxHistory.onRequestHandler');
		$service->onResponse[] = $this->getService('ajaxHistory.onResponseHandler');
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('application.presenterFactory')));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'),
			$this->getService('http.request')->getUrl(), $this->getService('application.presenterFactory'));
		return $service;
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, '/home/domains/albayan/app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache(): Nette\Caching\Cache
	{
		$service = new \Nette\Caching\Cache($this->getService('cache.storage'), 'UGANDA');
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\IJournal
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('/home/domains/albayan/app/../temp/cache/journal.s3db');
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\Storages\FileStorage
	{
		$service = new Nette\Caching\Storages\FileStorage('/home/domains/albayan/app/../temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function createServiceHttp__context(): Nette\Http\Context
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		return $service;
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\ILatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\ILatteFactory {
			private $container;


			public function __construct(Container_8e9d4eb926 $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/home/domains/albayan/app/../temp/cache/latte');
				$service->setAutoRefresh(true);
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Application\UI\ITemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'),
			$this->getService('http.request'), $this->getService('security.user'),
			$this->getService('cache.storage'), null);
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\IMailer
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	public function createServiceRouting__router(): Nette\Application\IRouter
	{
		$service = App\RouterFactory::createRouter();
		return $service;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\IUserStorage
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('10 hours');
		$service->setOptions([
			'savePath' => '/home/domains/albayan/app/../temp/session',
			'gc_probability' => 1,
			'gc_divisor' => 1000,
		]);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		$service = Tracy\Debugger::getBar();
		return $service;
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		$service = Tracy\Debugger::getBlueScreen();
		return $service;
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		$service = Tracy\Debugger::getLogger();
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Prague');
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		$this->getService('http.response')->setHeader('Content-Type', 'text/html; charset=utf-8');
		$this->getService('http.response')->setHeader('X-Frame-Options', 'SAMEORIGIN');
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		Tracy\Debugger::$email = 'jakub@jacon.cz';
		Tracy\Debugger::$editorMapping = [];
		Tracy\Debugger::setLogger($this->getService('tracy.logger'));
		$this->getService('tracy.bar')->addPanel(new App\Lib\ApiDebugBar);
		if ($tmp = $this->getByType("Nette\Http\Session", false)) { $tmp->start(); Tracy\Debugger::dispatch(); };
	}
}
