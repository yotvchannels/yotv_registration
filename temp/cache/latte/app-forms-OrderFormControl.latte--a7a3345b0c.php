<?php
// source: /Users/filipkuchar/Sites/yotv_project/app/forms/OrderFormControl.latte

use Latte\Runtime as LR;

class Templatea7a3345b0c extends Latte\Runtime\Template
{
	public $blocks = [
		'_' => 'block_b14a7',
		'_orderPreview' => 'blockOrderPreview',
	];

	public $blockTypes = [
		'_' => 'html',
		'_orderPreview' => 'html',
	];


	function main()
	{
		extract($this->params);
		?><div id="<?php echo htmlSpecialChars($this->global->snippetDriver->getHtmlId('')) ?>"><?php $this->renderBlock('_', $this->params) ?></div><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['product'])) trigger_error('Variable $product overwritten in foreach on line 18');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function block_b14a7($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("", "static");
?>
	<h2>Available subscription</h2>

	<div<?php echo ' id="' . htmlSpecialChars($this->global->snippetDriver->getHtmlId('orderPreview')) . '"' ?>>
<?php $this->renderBlock('_orderPreview', $this->params) ?>
	</div>

	<p>Please select one product and then you can continue to the payment gateway.</p>
<?php
		if (count($availableProducts) === 0) {
?>
		<p>Unfortunately, there are no products available as of now.</p>
<?php
		}
		else {
			/* line 50 */ $_tmp = $this->global->uiControl->getComponent("orderForm");
			if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
		}
		$this->global->snippetDriver->leave();
		
	}


	function blockOrderPreview($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("orderPreview", "static");
		?>		<?php
		if ($selectedProducts !== NULL) {
?>

			<div class="modal fade" id="orderPreviewModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">
								Order preview
							</h4>
						</div>
						<div class="modal-body">
							<table class="table">
<?php
			$price = 0;
			$iterations = 0;
			foreach ((array) $selectedProducts as $product) {
?>
									<tr>
										<td><?php echo LR\Filters::escapeHtmlText($availableProducts[$product]['products_name']) /* line 20 */ ?></td>
										<td><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->currency, $availableProducts[$product]['products_price_retail'])) /* line 21 */ ?></td>
<?php
				$price = $price + $availableProducts[$product]['products_price_retail'];
?>
									</tr>
<?php
				$iterations++;
			}
?>
								<tr>
									<td>Total</td>
									<td><strong><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->currency, $price)) /* line 27 */ ?></strong></td>
								</tr>
							</table>
						</div>
						<div class="modal-footer">
							<button style="float: left;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($paymentUrl)) /* line 33 */ ?>" class="btn btn-danger"><span class="glyphicon glyphicon-credit-card"></span> Continue to payment</a>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<script type="text/javascript">
			$(function () {
				$('#orderPreviewModal').modal();
			});
			</script>
<?php
		}
		$this->global->snippetDriver->leave();
		
	}

}
