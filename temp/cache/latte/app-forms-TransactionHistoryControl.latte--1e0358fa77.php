<?php
// source: /Users/filipkuchar/Sites/yotv_project/app/forms/TransactionHistoryControl.latte

use Latte\Runtime as LR;

class Template1e0358fa77 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<h3>Active subscriptions</h3>
<?php
		if (count($activeSubscriptions) === 0) {
?>
	<p>You have no active susbcriptions</p>
<?php
		}
?>


<?php
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($activeSubscriptions) as $subscription) {
			if ($iterator->isFirst()) {
?>
		<div class="table-responsive">
		<table class="table">
		<thead>
		<tr>
			<th>Package</th>
			<th>From</th>
			<th>To</th>
		</tr>
		</thead>
		<tbody>
<?php
			}
?>
	<tr>
		<td><?php echo LR\Filters::escapeHtmlText($subscription['products_name']) /* line 21 */ ?></td>
		<td><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->formatdatetime, $subscription['viewers_bouquets_active_from'])) /* line 22 */ ?></td>
		<td><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->formatdatetime, $subscription['viewers_bouquets_active_to'])) /* line 23 */ ?></td>
	</tr>
<?php
			if ($iterator->isLast()) {
?>
		</tbody>
		</table>
		</div><?php
			}
?>

<?php
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
?>

<?php
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($orders) as $order) {
			if ($iterator->isFirst()) {
?>
		<h2>Past orders</h2>
		<table class="table table-stripped table-bordered table-hover">
		<thead>
		<tr>
			<th>Date</th>
			<th>Order number</th>
			<th>Order status</th>
			<th>Amount</th>
			<th>Products</th>
		</tr>
		</thead>
		<tbody>
<?php
			}
?>
	<tr>
		<td><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->formatdatetime, $order['yotv_orders_created'])) /* line 47 */ ?></td>
		<td><?php echo LR\Filters::escapeHtmlText($order['yotv_orders_mollie_id']) /* line 48 */ ?></td>
		<td><?php echo LR\Filters::escapeHtmlText($order['yotv_orders_response']) /* line 49 */ ?></td>
		<td><?php echo LR\Filters::escapeHtmlText($order['yotv_orders_amount']) /* line 50 */ ?> USh</td>
		<td><?php echo LR\Filters::escapeHtmlText($order['grouped_products']) /* line 51 */ ?></td>
	</tr>
<?php
			if ($iterator->isLast()) {
?>
		</tbody>
		</table><?php
			}
?>

<?php
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
?>

<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['subscription'])) trigger_error('Variable $subscription overwritten in foreach on line 7');
		if (isset($this->params['order'])) trigger_error('Variable $order overwritten in foreach on line 31');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
