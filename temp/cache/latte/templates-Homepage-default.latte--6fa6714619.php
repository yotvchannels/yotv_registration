<?php
// source: /Users/filipkuchar/Sites/yotv_project/app/presenters/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Template6fa6714619 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['device'])) trigger_error('Variable $device overwritten in foreach on line 4');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
		$modernDevice = NULL;
		if (!$customerNotFound) {
			$iterations = 0;
			foreach ($customer['devices'] as $device) {
				if ($device['type'] !== 'modern_tv') continue;
				$modernDevice = $device;
				$iterations++;
			}
		}
		if ($customerNotFound && $modernDevice !== NULL) {
?>
	Given customer not found
<?php
		}
		else {
			?>	<h1>Hello <?php echo LR\Filters::escapeHtmlText($customer['viewers_firstname']) /* line 12 */ ?> <?php
			echo LR\Filters::escapeHtmlText($customer['viewers_lastname']) /* line 12 */ ?></h1>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Personal information</h3>
		</div>
		<div class="container-fluid" style=''>
			<div class='row'>
				<div class='col-sm-6'>
					Device ID: <?php echo LR\Filters::escapeHtmlText($modernDevice['device_modern_tv_account_id']) /* line 20 */ ?>

				</div>
				<div class='col-sm-6'>
					Login: <?php echo LR\Filters::escapeHtmlText($modernDevice['device_modern_tv_login']) /* line 23 */ ?>

				</div>
				<div class='col-sm-6'>
					Email: <?php echo LR\Filters::escapeHtmlText($modernDevice['device_modern_tv_email']) /* line 26 */ ?>

				</div>
			</div>
		</div>
	</div>
<?php
		}
?>

<?php
		/* line 33 */ $_tmp = $this->global->uiControl->getComponent("orderFormControl");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>


<?php
		/* line 36 */ $_tmp = $this->global->uiControl->getComponent("transactionHistoryControl");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>


<?php
	}

}
