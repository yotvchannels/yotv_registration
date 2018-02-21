<?php
// source: /Users/filipkuchar/Sites/yotv_project/app/presenters/templates/Homepage/expired.latte

use Latte\Runtime as LR;

class Template44f87a573d extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		?>Expired token!!!!<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
