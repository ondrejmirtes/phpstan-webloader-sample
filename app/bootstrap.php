<?php
declare(strict_types=1);
setlocale(LC_TIME, "cs_CZ.utf8");

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;

$configurator->setDebugMode(TRUE);
$configurator->enableTracy(__DIR__ . '/../log');

$configurator->setTimeZone('Europe/Prague');
$configurator->setTempDirectory(__DIR__ . '/../temp');

@mkdir(__DIR__ . '/../temp/sessions');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
if (file_exists(__DIR__ . '/config/config.local.neon')) {
	$configurator->addConfig(__DIR__ . '/config/config.local.neon');
}
$configurator->addConfig(__DIR__ . '/config/config.local.parameters.neon');

$container = $configurator->createContainer();

return $container;
