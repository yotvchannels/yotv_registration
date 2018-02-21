<?php

require __DIR__ . '/../vendor/autoload.php';


if (!is_dir('../temp/session')) {
	mkdir('../temp/session', 0777, TRUE); // @ - directory may already exist
}

$configurator = new Nette\Configurator;

$configurator->setDebugMode(TRUE);
$configurator->enableDebugger(__DIR__ . '/../log');
$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

\Tracy\Debugger::getLogger()->strictMode = TRUE;
\Tracy\Debugger::getLogger()->emailSnooze = '1 day';
\Tracy\Debugger::getLogger()->logSeverity = E_NOTICE | E_WARNING;

return $container;
