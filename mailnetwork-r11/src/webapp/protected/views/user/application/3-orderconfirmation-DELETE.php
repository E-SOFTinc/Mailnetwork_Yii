
<table width="752" border="0" cellspacing="0" cellpadding="0">
	<tr><td align="center"><h2>Application Form Step 3/3</h2></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td align="center" valign="top">
		<table width="760" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td align="center" valign="top">
				<table width="620" border="0" cellspacing="0" cellpadding="0">
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
								<p>Thank you for your Order!</p>
								<p>Your customer number is <strong>#<?php echo $customer_model->bilkey; ?></strong></p>
                                <br />
                                <?php if ($payment_method == "email"): ?>
								<p>We will confirm your new mailing address within one working day.</p>
                                <?php elseif($payment_method == "fax"): ?>
                                <p>Print this document and send it with your payment and copies of your I.D. Cards to:</p>
                                <ul>
                                    <li>Toll free fax number (USA &amp; Canada): 1 888 967-9248</li>
                                    <li>Direct fax number: 1 450 967-7678</li>
                                </ul>
                                <p>On receipt of your documents, we will confirm your new mailing address within one working day.</p>
                                <?php elseif($payment_method == "mail"): ?>
                                <p>Print this document and send it with your payment and copies of your I.D. Cards to:</p>
                                <p style="font-weight:bold">International Mail Forwarding Network<br />
                                511 Avenue of The America's, #604<br />
                                New York, NY 100011<br />
                                USA</p>
                                <p>On receipt of your documents, we will confirm your new mailing address within one working day.</p>
                                <?php endif; ?>                                 
                                <p>Your AuthCode is <?php echo $auth_code?>
                                
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
				<td height="30"></td>
			</tr>		
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
            
		</table>
		</td>
	</tr>
</table>
