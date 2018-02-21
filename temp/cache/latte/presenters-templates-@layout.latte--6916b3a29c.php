<?php
// source: /Users/filipkuchar/Sites/yotv_project/app/presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Template6916b3a29c extends Latte\Runtime\Template
{
	public $blocks = [
		'_flash' => 'blockFlash',
	];

	public $blockTypes = [
		'_flash' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel='shortcut icon' type='image' href='<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 4 */ ?>/images/logo2.png'>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>yoTV</title>
<?php
		/* line 10 */ $_tmp = $this->global->uiControl->getComponent("cssJsLoader");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>
</head>

<body>

<div id="<?php echo htmlSpecialChars($this->global->snippetDriver->getHtmlId('flash')) ?>"><?php $this->renderBlock('_flash', $this->params) ?></div>
<div style="text-align: center;">
	<img src='<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 25 */ ?>/images/logo2.png'>
</div>
<div style="clear: both;"></div>

<?php
		$this->renderBlock('content', $this->params, 'html');
?>

<div style="text-align: center;">
	<img src='<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 32 */ ?>/images/logo1.png' style="width: 152px; height: 152px; ">
</div>
<div style="clear: both;"></div>

<script type="text/javascript">
	$(function () {
		$.nette.init();
		$.nette.ext('abort', null);

		$.nette.ext('error', {
			error: function (jqXHR, status, error, settings) {
				//console.log(jqXHR, status, error, settings);
				if (status == 'abort') {
					return;
				}
				alert('We have experienced error while processing your request. \n\nWe have been notified about this issue and we will resolve it shortly.');
			}
		});
	});
</script>

</body>

</html><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 18');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockFlash($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("flash", "static");
?>
	<script type="text/javascript">
		$.notifyClose();
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>		notifyMessage(<?php echo LR\Filters::escapeJs($flash->message) /* line 19 */ ?>, <?php echo LR\Filters::escapeJs($flash->type) /* line 19 */ ?>);
<?php
			$iterations++;
		}
?>
	</script>
<?php
		$this->global->snippetDriver->leave();
		
	}

}
