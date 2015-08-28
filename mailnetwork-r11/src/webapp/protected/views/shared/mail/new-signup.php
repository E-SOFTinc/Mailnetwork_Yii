<center>
	<h3 class="h3">International Mail Forwarding Network</h3>
	<strong>New User Signup</strong><br />
</center>
<strong>
    <?php echo $customer->bilprenom . ' ' . $customer->bilnom ?> (by <?php echo $customer->bilsignupmethod ?>)
</strong>
<br />
<strong>Customer <a href="http://www.mailnetwork.com/customer/update/id/<?php echo $customer->bilkey ?>">#<?php echo $customer->bilkey ?></a></strong><br />
<br />

<strong><u>Order Details</u></strong><br />
<strong>Initial Payment Method: </strong><?php echo $commande->cominitpaytype; ?><br />
<?php if ($commande->comfrequency == Commande::TYPE_FREQUENCY_TYPE_8): ?>
<strong>Period of Rental: </strong>One Time Use ($<?php echo $order_totals['rental_rate']; ?> USD)<br />
<?php else: ?>
<strong>Period of Rental: </strong><?php echo $commande->comperiod; ?> months ($<?php echo $order_totals['rental_rate']; ?> USD)<br />
<?php endif; ?>

<?php if($customer->bilcountry == "Canada"): ?>
    <strong>GST: </strong>$<?php echo $order_totals['tax_gst']; ?> USD<br />
    <?php if($customer->bilstate == "QC"): ?>
        <strong>PST </strong>$<?php echo $order_totals['tax_pst']; ?> USD<br />
    <?php endif; ?>
<?php endif; ?>

<strong>Mail Forwarding Deposit: </strong><?php echo $commande->comfrequency; ?> ($<?php echo $order_totals['deposit']; ?> USD)<br />
<?php if ($commande->box->goodcountry == "USA"): ?>
<strong>Mailing Address: </strong><?php echo $commande->box->goodcity; ?>, <?php echo $commande->box->goodstate; ?>
<?php else: ?>
<strong>Mailing Address: </strong><?php echo $commande->box->goodcity; ?>, <?php echo $commande->box->goodcountry; ?>
<?php endif; ?>
<br />
<strong>Total: </strong>$<?php echo $order_totals['total']; ?> USD<br />

<br />

<strong><u>Documentation</u></strong><br />

<?php if(isset($cc)):?>

    <strong>Credit Card Information</strong><br />
    <strong>Name: </strong><?php echo $cc['namedofcardholder'] ?><br />
    <strong>Card Type: </strong><?php echo $cc['cardType'] ?><br />
    <strong>Card Number: </strong><?php echo $cc['cardNumber'][0] ?>-<?php echo $cc['cardNumber'][1] ?>-<?php echo $cc['cardNumber'][2] ?>-<?php echo $cc['cardNumber'][3] ?><br />
    <strong>Exp Date: </strong><?php echo $cc['expDate']['expMonth'].'/'.$cc['expDate']['expYear'] ?><br />

    <?php if(isset($cc_images['cc_sideone'])): ?>
        <a href="<?php echo $cc_images['cc_sideone'] ?>">Credit Card Side One</a><br />
    <?php endif; ?>

    <?php if(isset($cc_images['cc_sidetwo'])): ?>
        <a href="<?php echo $cc_images['cc_sidetwo'] ?>">Credit Card Side Two</a><br />
    <?php endif; ?>

    <?php if(!isset($cc_images['cc_sidetwo']) && !isset($cc_images['cc_sidetwo'])): ?>
        <p><strong>*This customer did not upload scans of their Credit Card*</strong></p>
    <?php endif; ?>

<?php endif; ?>

<?php

$arr_uploads = array('dest_idpicture11', 'dest_idpicture12', 'dest_idpsform1',
			 		 'dest_idpicture21', 'dest_idpicture22', 'dest_idpsform2',
			 		 'dest_idpicture31', 'dest_idpicture32', 'dest_idpsform3');

?>

<?php

foreach($arr_uploads as $doc):
    if (($commande->{$doc} != null) && ($commande->{$doc} != "")):
?>
<a href="<?php echo pathToUrl($commande->{$doc}); ?>"><?php echo $doc; ?></a><br />

<?php
endif;
endforeach;
?>