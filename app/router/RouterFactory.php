<?php

namespace App;

use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;
use Nette\Application\Responses\TextResponse;

class RouterFactory
{
	use Nette\StaticClass;


	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;
		$router[] = new Route('log/log/<filename [a-z0-9-]+>.html', function ($presenter, $filename) {
			$path = realpath(__DIR__ . '/../../log/' . $filename . '.html');
			return new TextResponse(file_exists($path) ? file_get_contents($path) : 'exception file not found');
		});
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;
	}

}
