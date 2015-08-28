
<tr id="paypalpayment">
	<td align="center">
	<table width="620" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="38" align="left" valign="middle"
				background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
				class="forms_hed1">PayPal</td>
		</tr>
		<tr>
			<td>
			<div class="forms_headerbg">
			<table width="620" border="0" cellspacing="3" cellpadding="3">
                            
                            <?php if(isset($transaction_failed)) { 
                                echo '<tr><td colspan="7" style="line-height: 18px"><span style="color:red;">The transaction didn\'t work, make sure your information are correct and your paypal is valid, and try again later</span></td></tr>'
                            ?>   
                            <?php } ?> 
                            
                            <tr>
					<td colspan="7" style="line-height: 18px">
					The total for your order is <strong><?php echo $order_totals['total']; ?>
					USD</strong>.<br /><br />
					Copies.Courrier&amp;Plus- 9301-3944 QC Inc.<br>
                    Please note that credit card transactions are carried out in
                    CANADIAN DOLLARS (CAD). 5% were added to the amount to cover
                    administration fees.</td>
                                        </br>
                            </tr>
                            <tr><!--https://www.sandbox.paypal.com/cgi-bin/webscr-->
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                    <input type="hidden" name="cmd" value="_xclick">
                                    <input type="hidden" name="business" value="ccplus1@videotron.ca">
                                    <input type="hidden" name="item_name" value="Mailbox in <?php echo $goodcity->goodcity ?> for <?php echo $commande_model->comperiod; ?> months">
                                    <input type="hidden" name="item_number" value="<?php echo $commande_model['comgoodcitykey'] ?>">
                                    <input type="hidden" name="amount" value="<?php echo $order_totals['total'] ?>">                                    
                                    <input type="hidden" name="tax" value="0">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="no_note" value="1">
                                    <input type="hidden" name="currency_code" value="USD">                                      
                                    <input type="hidden" name="rm" value="2">
                                    <input type="hidden" name="return" value="<?php echo Yii::app()->getBaseUrl(true);?>/user/PaypalPayment">
                                    <input type="hidden" name="cancel_return" value="<?php echo Yii::app()->getBaseUrl(true);?>/user/PaypalPayment">
                                    

                                    <!-- Enable override of buyers's address stored with PayPal . -->
                                    <input type="hidden" name="address_override" value="1">
                                    <!-- Set variables that override the address stored with PayPal. -->
                                    <input type="hidden" name="first_name" value="<?php echo $customer_model['attributes']['bilprenom'] ?>">
                                    <input type="hidden" name="last_name" value="<?php echo $customer_model['attributes']['bilnom'] ?>">
                                    <input type="hidden" name="address1" value="<?php echo $customer_model['attributes']['biladdress1'] ?>">
                                    <input type="hidden" name="city" value="<?php echo $customer_model['attributes']['bilcity'] ?>">
                                    <input type="hidden" name="zip" value="<?php echo str_replace(' ', '', $customer_model['attributes']['bilzip']) ?>">
                                    <input type="hidden" name="state" value="<?php echo $customer_model['attributes']['bilstate'] ?>">      
                                    <input type="hidden" name="country" value="<?php echo (strtoupper($customer_model['attributes']['bilcountry']) == "CANADA") ? "CA" : "US" ?>">
                                    <input type="image" name="submit" border="0"
                                    src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif"
                                    alt="PayPal - The safer, easier way to pay online">
                                </form>
                            </tr>
                                                                                    
			</table>
			</div>
			</td>
		</tr>
	</table>
	</td>
</tr>