<?php

// Uncomment this line if you must temporarily take down your site for maintenance.
$maintenance = FALSE;
$allowedIp = [
	'127.0.0.1',
	'::1',
	'89.24.237.27',
	'202.21.189.218',
];

if ($maintenance === TRUE && !in_array($_SERVER['REMOTE_ADDR'], $allowedIp)) {
	require __DIR__ . '/maintenance.php';
}

$container = require __DIR__ . '/../app/bootstrap.php';

$container->getByType(Nette\Application\Application::class)->run();
