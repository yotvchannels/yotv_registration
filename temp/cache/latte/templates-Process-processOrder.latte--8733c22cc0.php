<?php
// source: /home/domains/albayan/app/presenters/templates/Process/processOrder.latte

use Latte\Runtime as LR;

class Template8733c22cc0 extends Latte\Runtime\Template
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
		if (isset($this->params['product'])) trigger_error('Variable $product overwritten in foreach on line 17');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Paypal payment</h1>
			</div>
			<div class="col-md-12">
<?php
		$total = 0;
?>
				<table class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>Product</th>
						<th>Price</th>
					</tr>
					</thead>
					<tbody>
<?php
		$iterations = 0;
		foreach ($order as $product) {
?>
						<tr>
							<td><?php echo LR\Filters::escapeHtmlText($product['products_name']) /* line 19 */ ?></td>
							<td><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->currency, $product['products_price_retail'])) /* line 20 */ ?></td>
<?php
			$total = $total + $product['products_price_retail'];
?>
						</tr>
<?php
			$iterations++;
		}
?>
					<tr>
						<td><b>Total</b></td>
						<td><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->currency, $total)) /* line 26 */ ?></td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-12">
				<a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("finishOrder", ['PayerID' => $payerId, 'paymentId' => $paymentId])) ?>"> Pay with PayPal</a>
			</div>
		</div>
	</div>
<?php
	}

}
