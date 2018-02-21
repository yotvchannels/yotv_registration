<?php
// source: C:\xampp\htdocs\yotv\app\presenters/templates/Homepage/expired.latte

use Latte\Runtime as LR;

class Templatef480c5b3c1 extends Latte\Runtime\Template
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
