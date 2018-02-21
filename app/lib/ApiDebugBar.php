<?php

namespace App\Lib;


final class ApiDebugBar extends \Nette\Object implements \Tracy\IBarPanel
{

	public static $calls = [];


	public static function blueScreen()
	{
		return [
			'tab' => 'Api Calls',
			'panel' => self::_getPanel(),
		];
	}


	public function getTab()
	{
		$time = 0;
		foreach (self::$calls as $call) {
			if (!isset($call[4])) {
				continue;
			}
			$time = $time + $call[4];
		}
		return '<span title="CSMS API debug bar">CSMS API <strong>('.count(self::$calls).', '.round($time, 3).' s)</strong></span>';
	}


	private static function getApiCallTestForm($call)
	{
		//dump(json_encode($call[2], JSON_UNESCAPED_UNICODE));
		//dump(json_last_error());
		$text = "";
		$full_url = $call[0]."/".$call[1]."?";
		$text .= "<form method = 'post' action = '$full_url' target = '_blank'>";
		$text .= \Nette\Utils\Html::el('input')->type('hidden')->name('testField')->setValue(json_encode($call[2]));
		$text .= \Nette\Utils\Html::el('input')->type('hidden')->name('x-api-debug')->setValue(1);
		$text .= "<button type = 'submit' style = 'background: grey; border: 1px solid black; padding: 3px; cursor: pointer;'>Test!</button>";
		$text .= "</form>";
		return $text;
	}


	private static function getCallHtml($call, $i)
	{
		$text = "<tr>";
		$text .= "<td>$i</td>";
		$text .= "<td>/".$call[1]."</td>";
		$text .= "<td>".\Tracy\Dumper::toHtml($call[2], [\Tracy\Dumper::COLLAPSE => TRUE])."</td>";
		$text .= "<td>".(isset($call[3]) ? \Tracy\Dumper::toHtml(json_decode($call[3], JSON_FORCE_OBJECT), [\Tracy\Dumper::COLLAPSE => TRUE]) : "N/A")."</td>";
		$text .= "<td>".self::getApiCallTestForm($call)."</td>";
		$text .= "<td>".(isset($call[4]) ? $call[4] * 1000 : "N/A")."</td>";
		$text .= "</tr>";
		return $text;
	}


	public function getPanel()
	{
		return self::_getPanel();
	}


	public static function _getPanel()
	{
		$html = "<h1>API calls</h1>";
		$html .= "<table>";
		$html .= "<tr style = 'font-weight: bold; '><td>I</td><td>Action</td><td>Data</td><td>Response</td><td>Test</td><td>Time</td></tr>";
		$i = 1;
		foreach (self::$calls as $call){
			$html .= self::getCallHtml($call, $i);
			$i += 1;
		}
		$html .= "</table>";
		return $html;
	}

}
