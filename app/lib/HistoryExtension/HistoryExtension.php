<?php

namespace VojtechDobes\NetteAjax;

use Nette\DI;

if (!class_exists('Nette\DI\CompilerExtension')) {
	class_alias('Nette\Config\CompilerExtension', 'Nette\DI\CompilerExtension');
}


/**
 * Provides support for History API
 */
class HistoryExtension extends DI\CompilerExtension
{

	public function loadConfiguration()
	{
		$container = $this->getContainerBuilder();

		$container->addDefinition($this->prefix('onRequestHandler'))
			->setClass('VojtechDobes\NetteAjax\OnRequestHandler');

		$container->addDefinition($this->prefix('onResponseHandler'))
			->setClass('VojtechDobes\NetteAjax\OnResponseHandler');

		$application = $container->getDefinition('application');
		$application->addSetup('$service->onRequest[] = ?', ['@' . $this->prefix('onRequestHandler')]);
		$application->addSetup('$service->onResponse[] = ?', ['@' . $this->prefix('onResponseHandler')]);
	}

}
