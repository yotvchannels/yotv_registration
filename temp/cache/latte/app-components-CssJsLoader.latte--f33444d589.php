<?php
// source: /Users/filipkuchar/Sites/yotv_project/app/components/CssJsLoader.latte

use Latte\Runtime as LR;

class Templatef33444d589 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		?><link rel = 'stylesheet' href = '<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 4 */ ?>/temp/<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($css)) /* line 4 */ ?>'>
<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 5 */ ?>/temp/<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($js)) /* line 5 */ ?>"></script>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
