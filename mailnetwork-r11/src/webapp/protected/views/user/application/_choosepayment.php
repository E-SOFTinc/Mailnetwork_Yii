<tr>
	<td align="center">
	<table width="620" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="38" align="left" valign="middle"
				background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
				class="forms_hed1">Choose Payment Method</td>
		</tr>
		<tr>
			<td>
			<div class="forms_headerbg">
			<table width="620" border="0" cellspacing="3" cellpadding="3">
				<?php if(!isset($review)): ?>
						<tr>
							<td align="left" valign="middle">Payment Method <span class="start_txt">*</span></td>
							<td colspan="2" align="left" valign="middle">
                                                        <select name="payment" id="payment" required="true">
								<option selected="selected" disabled value="">Choose One</option>
								<option value="moneyorder">International Money Order</option>
								<option value="fundtransfer">Funds Transfer</option>								
								<option value="credit_card">Credit Card (Visa, MasterCard or American Express only)</option>
                                                                <option value="paypal">Paypal</option>
							</select>
                                                        </td>
						</tr>
                        <?php endif; ?>
			</table>
			</div>
			</td>
		</tr>
	</table>
	</td>
</tr>