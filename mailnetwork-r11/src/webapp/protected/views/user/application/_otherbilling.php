<tr>
	<td align="center">
	<table width="620" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="38" align="left" valign="middle"
				background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
				class="forms_hed1">Other Billing Information</td>
		</tr>
		<tr>
			<td>
			<div class="forms_headerbg">
			<table width="620" border="0" cellspacing="3" cellpadding="3">
				<tr>
					<td width="210" align="left" valign="middle">Phone 1<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td width="152" align="left" valign="middle"><?php echo $form->textField($customer_model,'bilphone1',array('size'=>20,'maxlength'=>50)); ?></td>
					<td width="403" align="left" valign="middle"><?php echo $form->dropDownList($customer_model,'bilphone1opt',$customer_model->getPhoneOptions()); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilphone1; ?> (<?php echo $customer_model->bilphone1opt; ?>)</td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">Phone 2</td>
                    <?php if(!isset($review)): ?>
					<td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilphone2',array('size'=>20,'maxlength'=>50)); ?></td>
					<td align="left" valign="middle"><?php echo $form->dropDownList($customer_model,'bilphone2opt',$customer_model->getPhoneOptions()); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilphone2; ?> (<?php echo $customer_model->bilphone2opt; ?>)</td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">Phone 3</td>
                    <?php if(!isset($review)): ?>
					<td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilphone3',array('size'=>20,'maxlength'=>50)); ?></td>
					<td align="left" valign="middle"><?php echo $form->dropDownList($customer_model,'bilphone3opt',$customer_model->getPhoneOptions()); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilphone3; ?> (<?php echo $customer_model->bilphone3opt; ?>)</td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">Fax</td>
                    <?php if(!isset($review)): ?>
					<td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilfax',array('size'=>20,'maxlength'=>50)); ?></td>
					<td align="left" valign="middle">&nbsp;</td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilfax; ?></td>
                    <?php endif; ?>
				</tr>
                                <?php echo (!empty($email_used))? '<tr><td colspan="7" style="line-height: 18px"><span style="color:red;">That email is already used</span></td></tr>' : ""; ?>
				<tr>
					<td align="left" valign="middle"><b>E-mail 1</b><span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>                                        
					<td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilemail',array('size'=>20,'maxlength'=>50)); ?></td>
					<td align="left" valign="middle">&nbsp;</td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilemail; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle"><b>E-mail 2</b></td>
                    <?php if(!isset($review)): ?>
					<td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilemail2',array('size'=>20,'maxlength'=>50)); ?></td>
					<td align="left" valign="middle">&nbsp;</td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilemail2; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">How did you hear about us?</td>
                    <?php if(!isset($review)): ?>
					<td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilhow',array('size'=>25,'maxlength'=>100)); ?></td>
					<td align="left" valign="middle">&nbsp;</td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilhow; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td height="30" colspan="3" align="left" valign="middle"><strong>Login Name and Password (to access your personal record)</strong></td>
				</tr>
				<tr>
					<td colspan="3" align="left" valign="middle">
					<table width="620" border="0" cellspacing="0" cellpadding="3">
						<tr>
                        	<?php if(!isset($review)): ?>
                                                    <?php echo (!empty($username_used))? '<tr><td colspan="7" style="line-height: 18px"><span style="color:red;">The username is already used, or the password isn\'t valid</span></td></tr>' : ""; ?>
							<td width="310" align="left" valign="middle"><span class="start_txt"></span><span class="start_txt">*</span><b>Login (at least 6 char)</b></td>
							<td width="157" align="left" valign="middle"><?php echo $form->textField($customer_model,'billogin',array('size'=>20,'maxlength'=>20)); ?></td>
							<td width="379" align="left" valign="middle">&nbsp;</td>
							<?php else: ?>
                            <td width="210" align="left" valign="middle"><span class="start_txt"></span><span class="start_txt">*</span><b>Login</b></td>
							<td colspan="2" align="left" valign="middle"><?php echo $customer_model->billogin; ?></td>
							<?php endif; ?>                                                    
						</tr>
						<tr>
                        	<?php if(!isset($review)): ?>
							<td align="left" valign="middle"><span class="start_txt">*</span><b>Password (at least 6 char)</b></td>
							<td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilpass',array('size'=>20,'maxlength'=>20)); ?></td>
							<td align="left" valign="middle">&nbsp;</td>
                            <?php else: ?>
                            <td align="left" valign="middle"><span class="start_txt">*</span><b>Password</b></td>
                            <td colspan="2" align="left" valign="middle"><?php echo str_repeat('*', strlen($customer_model->bilpass));?></td>
                            <?php endif; ?>
						</tr>
						<tr>
							<td align="left" valign="middle"><strong>Additional Information</strong></td>
                            <?php if(!isset($review)): ?>
							<td colspan="2" align="left" valign="middle"><?php echo $form->textArea($customer_model,'bilnote',array('rows'=>6, 'cols'=>50)); ?></td>
                            <?php else: ?>
                            <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilnote; ?></td>
                            <?php endif; ?>
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