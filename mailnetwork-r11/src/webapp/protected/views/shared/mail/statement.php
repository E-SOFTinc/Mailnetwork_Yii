<center>
	<h3 class="h3">International Mail Forwarding Network</h3>
	<strong>Statement of account (last 50 entries)</strong><br />
</center>	
<strong><?php echo $customer->bilprenom . ' ' . $customer->bilnom ?></strong><br />
<strong>Customer #<?php echo $customer->bilkey ?></strong><br />
<br />
<strong>Balance: </strong><?php echo '$'.number_format($customer->bilbalance, 2) ?>
<table width="100%">
<tr>
	<td><b>Date</b></td>
	<td><b>Description</b></td>
	<td><b>Debit</b></td>
	<td><b>Credit</b></td>
</tr>
<?php $count = 0; ?>
<?php foreach($shipment_details as $s): ?>
<?php $count++; if ($count > 50) break; ?>
	<tr>
		<td class="bodyContent"><?php echo $s['shipdate'] ?></td>
		<td class="bodyContent"><?php echo $s['shipdetail'] ?></td>
		<td class="bodyContent"><?php echo number_format($s['shipdebit'], 2) ?></td>
		<td class="bodyContent"><?php echo number_format($s['shipcredit'], 2) ?></td>	
	</tr>
<?php endforeach; ?>
</table>

