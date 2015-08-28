<center>
	<h3 class="h3">International Mail Forwarding Network</h3>
	<strong>Order Confirmation</strong><br />
    <?php if($payment_method == "fax"): ?>
	    Send your Application Form, copies of your I.D., <a href="http://www.mailnetwork.com/forms/ps1583.pdf">1583 Form</a> signed (if necessary)<br />
	    and a copy of your credit card (if necessary) by fax to:<br />
	    <br />
	    Toll Free Fax Number (USA & Canada): 1-866-967-9248<br />
	    Direct Fax Number: 1-450-967-9248<br />    
    <?php elseif($payment_method == "mail"): ?>
	    Send your Application Form, copies of your I.D., <a href="http://www.mailnetwork.com/forms/ps1583.pdf">1583 Form</a> signed (if necessary)<br />
	    and a copy of your credit card (if necessary) by mail to:<br />
        <br />
        <strong>International Mail Forwarding Network</strong><br />
        511 Avenue of The America's, #604<br />
        New York, NY 100011<br />
        USA<br />
    <?php endif; ?>
    <br />
    Your customer number is: <?php echo $customer->bilkey ?><br />
    <br />
    <?php if($payment_method != "email"): ?>    
	    On receipt of your paperwork, we will confirm your new mailing address<br />
	    within one working day.<br />
    <?php else: ?>
        We will confirm your new mailing address within one working day.<br />    
    <?php endif;?>    
    <br />
    Thank you for your order!
</center>	


