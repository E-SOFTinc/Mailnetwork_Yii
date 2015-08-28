<?php if($payment_type == "credit_card"): ?>
<input type="hidden" name="cc" />
<tr>
	<td align="center" valign="top">
	<table width="620" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="38" align="left" valign="middle"
				background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
				class="forms_hed1"><strong>Credit Card</strong></td>
		</tr>
		<tr>
			<td>
			<div class="forms_headerbg">
			<table width="100%" border="0" cellspacing="3" cellpadding="3">
				<tr>
					<td colspan="7" style="line-height: 18px">
					I authorize Copies.Courrier&amp;Plus- 9301-3944 QC Inc. to
					charge my credit card for <strong><?php echo $order_totals['total']; ?>
					USD</strong>.<br /><br />
					Please note that credit card transactions are carried out in
					CANADIAN DOLLARS (CAD). 5% will be added to the amount to cover
					administration fees.</td>
				</tr>
				<tr>
					<td width="32%" align="left" valign="middle"><strong>Card Type:</strong></td>
                    <?php if(!isset($thanks)): ?>
					<td width="5%" align="left" valign="middle"><input name="cc[cardType]" id="Visa" value="Visa" checked="checked" type="radio" /></td>
					<td width="6%" align="left" valign="middle">Visa</td>
					<td width="5%" align="left" valign="middle"><input name="cc[cardType]" id="MasterCard" value="MasterCard" type="radio" /></td>
					<td width="13%" align="left" valign="middle">Master Card</td>
					<td width="5%" align="left" valign="middle"><input name="cc[cardType]" id="American Express" value="American Express" type="radio" /></td>
					<td width="34%" align="left" valign="middle">American Express</td>
                    <?php else: ?>
                    <td width="68%" align="left" valign="middle"><strong><?php echo $cc['cardType']; ?></strong></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle"><strong>Card Number:</strong></td>
					<td colspan="6" align="left" valign="middle">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
                        	<?php if(!isset($thanks)): ?>
							<td width="16%"><input name="cc[cardNumber][]" id="cardNumber" style="width: 50px;" required="true" maxlength="4" type="text" /></td>
							<td width="17%"><input name="cc[cardNumber][]" id="cardNumber2" style="width: 50px;" required="true" maxlength="4" type="text" /></td>
							<td width="17%"><input name="cc[cardNumber][]" id="cardNumber3" style="width: 50px;" required="true" maxlength="4" type="text" /></td>
							<td width="41%"><input name="cc[cardNumber][]" id="cardNumber4" style="width: 50px;" required="true" maxlength="4" type="text" /></td>
							<td width="4%">&nbsp;</td>
							<td width="5%">&nbsp;</td>
                            <?php else: ?>
                            <td width="16%"><strong><?php echo $cc['cardNumber'][0]; ?>-<?php echo $cc['cardNumber'][1]; ?>-<?php echo $cc['cardNumber'][2]; ?>-<?php echo $cc['cardNumber'][3]; ?></strong></td>
                            <?php endif; ?>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left" valign="middle"><strong>Exp. Date:</strong></td>
					<td colspan="6" align="left" valign="middle">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
                        <?php if(!isset($thanks)): ?>
							<td width="20%" align="left" valign="middle">
	                            <select name="cc[expDate][expMonth]" id="expMonth">
									<option value="" selected="selected">Month</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
                            </td>
							<td width="21%" align="left" valign="middle">
	                            <select name="cc[expDate][expYear]" id="expDate[]">
									<option value="" selected="selected">Year</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
								</select>
                                                                                               
                            </td>
							<td width="19%" align="left" valign="middle">&nbsp;</td>
							<td width="31%" align="left" valign="middle">&nbsp;</td>
							<td width="4%" align="left" valign="middle">&nbsp;</td>
							<td width="5%" align="left" valign="middle">&nbsp;</td>
                        <?php else: ?>
                        <td colspan="6"><strong><?php echo $cc['expDate']['expMonth']; ?> / <?php echo $cc['expDate']['expYear']; ?></strong></td>
                        <?php endif; ?>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left" valign="middle"><strong>Named of cardholder:</strong></td>
					<td colspan="6" align="left" valign="middle">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td align="left" valign="middle">
                            <?php if(!isset($thanks)): ?>
	                            <input name="cc[namedofcardholder]" id="namedofcardholder" size="40"
									   type="text" />
                            <?php else: ?>
                                <strong><?php echo $cc['namedofcardholder']; ?></strong>
                            <?php endif; ?>
                            </td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td colspan="7" align="left" valign="top"
						style="line-height: 18px">I understand that my signature
					on this contract grants authorization to debit my credit card in
					accordance with<br />
					the credit bureau. I also understand that there will be no
					reimbursement.<br />
					<span style="color:red">With your Application form and I.D., please send us a copy of
					your credit card (both sides) to prevent fraud.</span></td>
				</tr>
                <?php if(!isset($thanks)): ?>
				<tr>
					<td colspan="7">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="32%" align="left" valign="middle">Upload credit card side one:</td>
							<td width="65%" align="left" valign="middle"><input
								fileuploader="true" name="cc_sideone"
								ftype="file" id="cc_sideone" value=""
								type="file" /></td>
							<td width="3%" align="left" valign="top">&nbsp;</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td colspan="7">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="32%" align="left" valign="middle">Upload credit card side two:</td>
							<td width="65%" align="left" valign="middle"><input
								fileuploader="true" name="cc_sidetwo"
								ftype="file" id="cc_sidetwo" value=""
								type="file" /></td>
							<td width="3%" align="left" valign="top">&nbsp;</td>
						</tr>
					</table>
					</td>
				</tr>
                <?php else: ?>
                <tr>
                    <td colspan="7">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="50%" align="left" valign="bottom">___________________________________</td>
                            <td width="50%" align="left" valign="bottom">___________________________________</td>
                        </tr>
                        <tr>
                            <td width="50%" align="left" valign="bottom">Signature of cardholder</td>
                            <td width="50%" align="left" valign="bottom">Date</td>
                        </tr>                        
                    </table>
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
<tr>
	<td height="20"></td>
</tr>
<?php elseif($payment_type == "western_union"): ?>
<tr>
	<td align="center">
	<table width="620" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="38" align="left" valign="middle"
				background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
				class="forms_hed1"><b><font class="headerform">Money Transfer by Western Union</font></b></td>
		</tr>
		<tr>
			<td>
			<div class="forms_headerbg">
			<table width="100%" border="0" cellspacing="3" cellpadding="3">
				<tr>
					<td align="left" valign="middle" style="line-height: 18px">If
					you wish to make your payment through Western Union, you need to
					go to the nearest Western Union<br />
					branch. Please make transfer payable to:</td>
				</tr>
				<tr>
					<td align="left" valign="middle" style="line-height: 18px">Receiver:
					Mailnetwork.com<br />
					City: Laval<br />
					Country: Canada<br />
					Telephone number: 1-514-824-7678<br />
					</td>
				</tr>
				<tr>
					<td align="left" valign="middle"><strong><em>Once
					have you made the transfer, send us a money Transfer Control
					Number by e-mail info@mailnetwork.com </em></strong></td>
				</tr>

			</table>
			</div>
			</td>
		</tr>
	</table>
	</td>
</tr>
<tr>
	<td height="20" align="center">&nbsp;</td>
</tr>
<?php elseif($payment_type == "fundtransfer"): ?>
<tr>
	<td align="center">
	<table width="620" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="38" align="left" valign="middle"
				background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
				class="forms_hed1"><b>&nbsp;<font class="headerform">Payment Method</font></b></td>
		</tr>
		<tr>
			<td>
			<div class="forms_headerbg">
			<table width="620" border="0" cellspacing="3" cellpadding="3">
				<tr>
					<td align="left" valign="middle" style="line-height: 18px">
                                <span style="font-weight:bold; color:red">Bank Transfer</span> - Send your Payment to:<br /><br />
								International Mail Forwarding Network<br />
								9301-3944 QC Inc.<br />
								Bank of Nova Scotia<br />
								3000 des Laurentides Blvd<br />
								Laval, QC, Canada, H7K 3G5<br /><br />

								<p>
                                <strong>Swift or ABA code:</strong> NOSCCATTMTL<br />
                                <strong>Code of bank (inside Canada):</strong> 002<br /> 
								<strong>Transit of bank (branch inside the bank):</strong> 81331<br />
								<strong>Account number:</strong> 0011916 
                                </p>
                                
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
				<td height="20" align="center">&nbsp;</td>
			</tr>
			<?php elseif($payment_type == "moneyorder"): ?>
<tr>
	<td align="center" valign="top">
	<table width="620" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="38" align="left" valign="middle"
				background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
				class="forms_hed1"><b>&nbsp;<font class="headerform">International Money Order - Make Your Payment Payable To:</font></b></td>
		</tr>
		<tr>
			<td>
			<div class="forms_headerbg">
			<table width="620" border="0" cellspacing="3" cellpadding="3">
				<tr>
					<td width="599" align="center" valign="middle"
						style="line-height: 18px">
                        International Mail Forwarding Network <br />
				</tr>
			</table>
			</div>
			</td>
		</tr>
	</table>
	</td>
</tr>
<tr>
    <td height="20" align="center">&nbsp;</td>
</tr>
<?php endif; ?>
