<tr id="creditCardPayment">
	<td align="center">
	<table width="620" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="38" align="left" valign="middle"
				background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
				class="forms_hed1">Credit Card Information</td>
		</tr>
		<tr>
			<td>
			<div class="forms_headerbg">
			<table width="620" border="0" cellspacing="3" cellpadding="3">
                            <tr>
					<td colspan="7" style="line-height: 18px">
					I authorize Copies.Courrier&amp;Plus- 9301-3944 QC Inc. to
					charge my credit card for <strong><?php echo $order_totals['total']; ?>
					USD</strong>.<br /><br />
					Please note that credit card transactions are carried out in
					CANADIAN DOLLARS (CAD). 5% were added to the amount to cover
					administration fees.</td>
                                        </br>
                            </tr>
                                        <?php if(isset($transaction_failed)) { 
                                        echo '<tr><td colspan="7" style="line-height: 18px"><span style="color:red;">The transaction didn\'t work, make sure your credit card is a VISA, MASTERCARD or AMEX, and try again later</span></td></tr>'
                                        ?>   
                                        <?php } ?>   
                                        </td>
				                            
                            <tr>                           
                                <td width="10" align="left" valign="middle"><label> Card Number </label></td>
                                <td width="152" align="left" valign="middle"><input type="text" id="ccNumber" name="ccNumber" pattern="\d*" maxlength="16" class="numbersOnly" autocomplete="off"></td>                      
                            </tr>
                            <tr> 
                                <td width="10" align="left" valign="middle"><label> Name on Card </label></td>
                                <td width="152" align="left" valign="middle"><input type="text" id="ccName" name="ccName"></td>
                            </tr>
                            <tr> 
                                <td align="left" valign="middle"><label> Expiration Date </label>
                                <td width="152" align="left" valign="middle">
                                    <select name="expMonth" id="expMonth" onclick="expirationDateValidation()">
                                    <?php for($i = 1; $i <= 12; $i++)
                                       echo "<option value='".(str_pad ($i, 2, "0", STR_PAD_LEFT))."'>" .(str_pad ($i, 2, "0", STR_PAD_LEFT))." </option>"
                                       ?>
                                    </select>
                                    <select name="expYear" id="expYear" onclick="expirationDateValidation()">
                                    <?php for($i = 0; $i < 15; $i++)
                                       echo "<option value='".((int)date("Y") + $i)."'>" . ((int)date("Y") + $i)." </option>"
                                       ?>                                   
                                    
                                    </select>
                                    <label id="epiredCardError" style="display:none; color:red;">Your Credit Card is expired</label>
                                </td>                                
                            </tr>
                            <tr>
                                <td width="10" align="left" valign="middle">CVD</td>
                                <td width="152" align="left" valign="middle"><input type="text" id="cvdNumber" name="cvdNumber" pattern="\d*" maxlength="5" style="width: 40px;" class="numbersOnly" autocomplete="off"></td>
                            </tr>                            
			</table>
			</div>
			</td>
		</tr>
	</table>
	</td>
</tr>

<script>
    jQuery('.numbersOnly').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');
    });
    
    function expirationDateValidation(){        
        var month = $('#expMonth').val();
        var year = $('#expYear').val();
        if (year <= (new Date).getFullYear())
            if (month < (new Date).getMonth() + 1)
                $('#epiredCardError').show();
            else
                $('#epiredCardError').hide();
        else
            $('#epiredCardError').hide();
    }
</script>
    