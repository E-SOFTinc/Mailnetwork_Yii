<script type="text/javascript">

function printFax() {
	window.print()
	window.location = "<?php echo $this->createUrl('user/thanks', array('method'=>"fax")); ?>"
}

function printMail() {
	window.print()
	window.location = "<?php echo $this->createUrl('user/thanks', array('method'=>"fax")); ?>"	
}

</script>
<?php $review = true; ?>
<table width="752" border="0" cellspacing="0" cellpadding="0">
<!--<form enctype="multipart/form-data" id="order-form" action="/mailnetwork-yii/user/thanks/method/email" method="post">-->
<?php
if($payment_type != "credit_card" && $payment_type != "paypal"){
	echo '<form enctype="multipart/form-data" id="order-form" action="/user/process" method="post">';
}
if ($payment_type == "credit_card"){
$form=$this->beginWidget('CActiveForm', array(
    'id'=>'order-form',
    'enableAjaxValidation'=>false,
	'action'=>$this->createUrl('user/CreditPayment'),
    'htmlOptions'=>array('enctype'=>'multipart/form-data')
));} ?>

<?php if(!isset($thanks)): ?>
	<tr><td align="center"><h2>Application Form Step 2/3</h2></td></tr>
	<tr><td align="center"><a href="javascript:history.back()">[Go Back to Form]</a></td></tr>
    <tr><td align="center">&nbsp;</td></tr>
    <tr><td align="center"><strong>Preview Information</strong></td></tr>
    <tr><td align="center">Please carefully review the information that you entered.</td></tr>
    <tr><td align="center">Click [Go Back to Form] if you need to make changes, or click your browser's back button.</td></tr>
<?php else: ?>
    <tr><td align="center"><h2>Application Form Step 3/3</h2></td></tr>
    <tr><td align="center"><a href="javascript:window.print()">[Print Application Form]</a>
    <img border="0" src="http://mailnetwork.com/affiliates/sale.php?profile=72198&idev_saleamt=<?php echo $order_totals['total'];?>&idev_ordernum=<?php echo $auth_code;?>" width="1" height="1">
    </td></tr>    
<?php endif; ?>
    <tr><td align="center">&nbsp;</td></tr>
    
	<tr>
		<td align="center" valign="top">
		<table width="760" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td align="center" valign="top">
				<table width="620" border="0" cellspacing="0" cellpadding="0">
                <?php if(isset($thanks)): ?>
                                   
                    <tr>
                        <td height="38" align="left" valign="middle"
                            background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
                            class="forms_hed1"><strong>Order Confirmation</strong></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                        <div class="forms_headerbg">
                        <table width="100%" border="0" cellspacing="3" cellpadding="3">
                            <tr>
                                <td colspan="2" valign="middle" style="text-align: center">
                                <?php if ($payment_method == "email"): ?>
                                <p>We will confirm your new mailing address within one working day.</p>
                                <br />
                                <?php elseif($payment_method == "fax"): ?>
                                <p>Send your Application Form, copies of your I.D., 1584 Form signed (if necessary)<br /> 
                                and a copy of your credit card (if necessary) by fax to:
                                <br /><br />
                                Toll free fax number (USA &amp; Canada): 1-888-967-9248<br />
                                Direct fax number: 1-450-967-9248
                                <br /><br />                                
                                <p>
                                Or by mail:<br/><br/>
                                <strong>International Mail Forwarding Network</strong><br />
                                511 Avenue of The America's, #604<br />
                                New York, NY 100011<br />
                                USA</p><br />                                
                                
                                <?php elseif($payment_method == "mail"): ?>
                                <p>Send your Application Form, copies of your I.D., 1584 Form signed (if necessary)<br />
                                   and a copy of your credit card (if necessary) by mail to:
                                <br /><br />
                                <strong>International Mail Forwarding Network</strong><br />
                                511 Avenue of The America's, #604<br />
                                New York, NY 100011<br />
                                USA</p><br />                                
                                <?php endif; ?>
                                
                                <p>Your customer number is <strong>#<?php echo $customer_model->bilkey; ?></strong></p><br />
                                <?php if($payment_type == "credit_card" || $payment_type == "paypal") { ?>
                                <p>Your confirmation code is :  <strong><?php echo $auth_code?></strong></p><br />
                                <?php } ?>
                                <?php if($payment_method != "email"): ?>
                                <p>On receipt of your paperwork, we will confirm your new mailing address<br /> within one working day.</p><br />
                                <?php endif; ?>
                                <p>Thank you for your order!</p>
                                
                                                                
                                </td>
                            </tr>
                        </table>
                        </div>
                        </td>
                    </tr>
		            <tr>
		                <td height="30"></td>
		            </tr>
                    
                    <?php endif; ?>
					<tr>
						<td height="38" align="left" valign="middle"
							background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
							class="forms_hed1"><strong>Service Summary</strong></td>
					</tr>
					<tr>
						<td align="center" valign="top">
						<div class="forms_headerbg">
						<table width="600" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="left" valign="top"></td>
							</tr>
							<tr>
								<td height="30" align="left" valign="middle">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td align="left" valign="middle">
										<table width="600" border="0" cellspacing="0" cellpadding="3">

											<tr>
												<td height="25" colspan="2" align="left" valign="middle">Mailing Address</td>
												<td height="25" align="left" valign="middle"><strong><?php echo $customer_model->bilprenom ?>
												<?php echo $customer_model->bilnom ?></strong><br />
												<strong><?php echo $customer_model->bilcompany ?></strong><br />
												<strong><?php echo $goodcity->goodaddress ?> </strong><i>(your box number)</i><br />
												<strong><?php echo $goodcity->goodcity ?>, <?php echo $goodcity->goodstate ?>&nbsp;<?php echo $goodcity->goodzip ?></strong><br />
												<strong><?php echo $goodcity->goodcountry?></strong></td>
											</tr>
										</table>
										</td>
										<td align="left" valign="middle">&nbsp;</td>
									</tr>
								</table>
								</td>
							</tr>

							<tr>
								<td align="left" valign="top">&nbsp;</td>
							</tr>
							<tr>
								<td height="25" align="left" valign="middle">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td bgcolor="#f1f1f1">
										<table width="100%" border="0" cellspacing="1" cellpadding="5">
											<tr>
												<td align="left" valign="middle" bgcolor="#FFFFFF">Period of Rental</td>
                                                <?php if ($commande_model->comfrequency == Commande::TYPE_FREQUENCY_TYPE_8): ?>
												<td align="left" valign="middle" bgcolor="#FFFFFF">One time use</td>
												<td align="right" valign="middle" bgcolor="#FFFFFF"><?php echo $order_totals['rental_rate']; ?> USD</td>
                                                <?php else: ?>
                                                <td align="left" valign="middle" bgcolor="#FFFFFF"><?php echo $commande_model->comperiod; ?> months</td>
                                                <td align="right" valign="middle" bgcolor="#FFFFFF"><?php echo $order_totals['rental_rate']; ?> USD</td>                                                
                                                <?php endif; ?>
											</tr>
											<?php if($customer_model->bilcountry == "Canada"): ?>
											<tr>
												<td align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
												<td align="right" valign="middle" bgcolor="#FFFFFF">GST</td>
												<td align="right" valign="middle" bgcolor="#FFFFFF"><?php echo $order_totals['tax_gst']; ?> USD</td>
											</tr>
                                            <?php if($customer_model->bilstate == "QC"): ?>
											<tr>
												<td align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
												<td align="right" valign="middle" bgcolor="#FFFFFF">PST</td>
												<td align="right" valign="middle" bgcolor="#FFFFFF"><?php echo $order_totals['tax_pst']; ?> USD</td>
											</tr>
                                            <?php endif; ?>
											<?php endif; ?>
                                            <?php if ($commande_model->comfrequency == Commande::TYPE_FREQUENCY_TYPE_8): ?>
											<tr>
												<td align="left" valign="middle" bgcolor="#FFFFFF">Shipment Fee</td>
												<td align="left" valign="middle" bgcolor="#FFFFFF">Fee will be quoted on receipt of your piece of mail.</td>
												<td align="right" valign="middle" bgcolor="#FFFFFF">--- USD</td>
											</tr>
                                            <?php else: ?>
                                            <tr>
                                                <td align="left" valign="middle" bgcolor="#FFFFFF">Mail Forwarding Deposit</td>
                                                <td align="left" valign="middle" bgcolor="#FFFFFF"><?php echo $commande_model->comfrequency; ?></td>
                                                <td align="right" valign="middle" bgcolor="#FFFFFF"><?php echo $order_totals['deposit']; ?> USD</td>
                                            </tr>                                            
                                            <?php endif; ?>
                                            <tr>
												<td align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
												<td align="right" valign="middle" bgcolor="#FFFFFF"><strong>Administrative Fee</strong></td>
												<td align="right" valign="middle" bgcolor="yellow"><strong><?php echo $order_totals['administrative_cost']; ?> USD</strong></td>
											</tr>
											<tr>
												<td align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
												<td align="right" valign="middle" bgcolor="#FFFFFF"><strong>Total</strong></td>
												<td align="right" valign="middle" bgcolor="yellow"><strong><?php echo $order_totals['total']; ?> USD</strong></td>
											</tr>
										</table>
									
										</td>
									</tr>
								</table>
								</td>
							</tr>
						</table>
						</div>
						</td>
						
						
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td height="20"></td>
			</tr>                
                
                <?php include("_mailingaddress.php"); ?>
            <tr>
                <td height="30"></td>
            </tr>
                <?php include("_billinginfo.php"); ?>
            <tr>
                <td height="30"></td>
            </tr>
                <?php include("_otherbilling.php"); ?>
            <tr>
                <td height="30"></td>
            </tr>
            <?php if(!isset($thanks)): ?> 
            <?php if($payment_type == "credit_card")
                    include("_creditcardpayment.php"); 
                  else if($payment_type == "paypal")
                    include("_paypalpayment.php")
                ?>
            <tr>
                <td height="30"></td>
            </tr>
                                   
			<tr>
				<td align="center" valign="top">
				<table width="620" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td>
						<div class="">
						<table width="620" border="0" cellspacing="3" cellpadding="3">
							<tr>
								<td align="left" valign="middle">
								<table width="100%" border="0" cellspacing="2" cellpadding="2">
									<tr>
										<?php if($payment_type != "credit_card" && $payment_type != "paypal") { ?>
										<td align="center" valign="middle">
											<input type="image" src="<?php echo Yii::app()->request->baseUrl; ?>/images/forms_btn1.jpg" alt="Send Your Order By E-mail" name="email" />
											<!--<a
											href="<?php echo $this->createUrl('user/thanks', array('method'=>"email")); ?>"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/forms_btn1.jpg" /></a>--></td>
										<td align="center" valign="middle">
                                            <input type="image" src="<?php echo Yii::app()->request->baseUrl; ?>/images/forms_btn3.jpg" alt="Send Your Order By Mail" name="mail" />
                                            <!--<a
											href="javascript:printMail()"><img
											src="<?php echo Yii::app()->request->baseUrl; ?>/images/forms_btn3.jpg" /></a>--></td> 
                                        <?php } else { ?>                                        
                                            <td align="center" valign="middle">
                                                <?php if($payment_type != "paypal")
                                                    echo '<input type="submit" value="Confirm Payment">'?>                                                                                   
                                                
                                            </td>
                                        <?php } ?>
									</tr>
								</table>
								</td>
							</tr>
						</table>
						</div>
						</td>
						 
					</tr>
				</table>
				</td>
			</tr>
            <?php endif; ?>
            
            <?php if(!isset($thanks)): ?>
            <tr><td align="center">&nbsp;</td></tr>
            <tr><td align="center"><a href="javascript:history.back()">[Go Back to Form]</a></td></tr>
            <?php endif;?>
		</table>
		</td>
	</tr>
    <?php 
    if ($payment_type == "credit_card"){
    $this->endWidget(); }?>
    <?php if($payment_type != "credit_card" && $payment_type != "paypal"){
		echo '</form>';
	} ?>
	<!-- </form> -->
</table>
