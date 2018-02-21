<?php

namespace App\Lib;

use App;
use Nette;


class LatteMacrosFactory extends Nette\Object
{

	private $modelModernTv;


	public function __construct(App\Model\ModernTv $modelModernTv)
	{
		$this->modelModernTv = $modelModernTv;
	}


	private function formatTime($time, $format)
	{
		if ($time instanceof \DateTime) {
			$time = $time->getTimestamp();
		}
		if (!is_numeric($time)) {
			$time = strtotime($time);
		}
		return date($format, $time);
	}


	public function install(Nette\Bridges\ApplicationLatte\Template $template)
	{
		$template->addFilter('currency', function ($amount) {
			return number_format($amount, 2, '.', ' ') . ' ' . $this->modelModernTv->getSmsConfig()['config_currency'];
		});

		$template->addFilter('formatDateTime', function ($time) {
			return $this->formatTime($time, 'm/d/Y G:i');
		});
		$template->addFilter('formatDate', function ($time) {
			return $this->formatTime($time, 'm/d/Y');
		});
		$template->addFilter('formatTime', function ($time) {
			return $this->formatTime($time, 'G:i');
		});
	}

}