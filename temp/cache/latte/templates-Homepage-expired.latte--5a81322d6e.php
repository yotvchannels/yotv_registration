<?php
// source: /home/domains/albayan/app/presenters/templates/Homepage/expired.latte

use Latte\Runtime as LR;

class Template5a81322d6e extends Latte\Runtime\Template
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
