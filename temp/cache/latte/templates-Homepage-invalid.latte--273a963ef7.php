<?php
// source: /Users/filipkuchar/Sites/yotv_project/app/presenters/templates/Homepage/invalid.latte

use Latte\Runtime as LR;

class Template273a963ef7 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		?>Invalid token signature<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
