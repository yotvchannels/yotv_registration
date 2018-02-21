<?php
// source: C:\xampp\htdocs\yotv\app\presenters/templates/Homepage/invalid.latte

use Latte\Runtime as LR;

class Template468d9cec6a extends Latte\Runtime\Template
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
