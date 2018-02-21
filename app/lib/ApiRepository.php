<?php


namespace App\Lib;

use App;
use GuzzleHttp;
use Nette;


class ApiRepository extends Nette\Object
{

	private $user;

	private $apiSettings;

	private $debugMode;

	private $request_cache = [];


	public function getSettings()
	{
		return $this->apiSettings;
	}


	function __construct($debugMode, $apiSettings, Nette\Security\User $user)
	{
		$this->debugMode = $debugMode;
		$this->apiSettings = $apiSettings;
		$this->user = $user;
	}


	public function call($model, $action, $data = [], $auth = [])
	{
		return $this->apiCall($model . '/' . $action, $data, $auth);
	}


	private function replaceDateTime($data)
	{
		foreach ($data as $k => $v) {
			if (is_array($v) or $v instanceof Nette\Utils\ArrayHash) {
				$data[$k] = $this->replaceDateTime($v);
			} else {
				if ($v instanceof \DateTime) {
					$data[$k] = $v->format('Y-m-d H:i:s');
				}
			}
		}
		return $data;
	}


	private function apiCall($path, $requestData = [], $auth = [])
	{
		$md5_call = md5($path . serialize($requestData));
		if (array_key_exists($md5_call, $this->request_cache)) {
			return $this->request_cache[$md5_call];
		}

		$data = [
			'data'   => $requestData,
			'test'   => $this->apiSettings['test'],
			'auth'   => [
				'token' => $this->apiSettings['token'],
			],
			'system' => [
				'name' => 'OTT_SELFCARE',
			],
		];

		$data = $this->replaceDateTime($data);

		App\Lib\ApiDebugBar::$calls[] = [$this->apiSettings['url'], $path, $data];


		$client = new GuzzleHttp\Client();

		$guzzleResponse = $client->request('POST', $this->apiSettings['url'] . '/' . $path, [
			'body'    => json_encode($data),
			'headers' => [
				'x-api-debug' => $this->debugMode,
			],
		]);
		$responseContent = $guzzleResponse->getBody()->getContents();

		\App\Lib\ApiDebugBar::$calls[count(App\Lib\ApiDebugBar::$calls) - 1][] = $responseContent;

		$response = json_decode($responseContent, JSON_FORCE_OBJECT);
		\App\Lib\ApiDebugBar::$calls[count(App\Lib\ApiDebugBar::$calls) - 1][] = \Tracy\Debugger::timer();

		$this->request_cache[$md5_call] = $response['response'];

		if ($response['status'] !== 1) {
			throw new App\Lib\ApiException($response['status'], $response['response']);
		}
		return $response['response'];
	}

}
