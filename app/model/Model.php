<?php

namespace App\Model;

use App;
use Nette;


abstract class Model extends Nette\Object
{

	/**
	 * @var App\Lib\ApiRepository
	 */
	protected $apiRepository;

	/**
	 * @var Nette\Caching\Storages\FileStorage
	 */
	protected $cacheStorage;

	/**
	 * @var Nette\Caching\Cache
	 */
	protected $cache;


	public function injectApiRepository(App\Lib\ApiRepository $apiRepository)
	{
		$this->apiRepository = $apiRepository;
	}


	public function injectCacheStorage(Nette\Caching\Storages\FileStorage $cacheStorage)
	{
		$this->cacheStorage = $cacheStorage;
		$name = get_called_class();
		if (strpos($name, "\\") !== FALSE) {
			$name = explode("\\", $name);
			$name = $name[count($name) - 1];
		}
		$this->cache = new Nette\Caching\Cache($cacheStorage, $name);
	}


	protected function removeModelCache($model, $key)
	{
		$cache = new Nette\Caching\Cache($this->cacheStorage, $model);
		$cache->remove($key);
	}


	protected function cleanModelCache($model, $options)
	{
		$cache = new Nette\Caching\Cache($this->cacheStorage, $model);
		$cache->clean($options);
	}

}