<tr>
	<td align="center" valign="top">
	<table width="620" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="38" align="left" valign="middle"
				background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
	            class="forms_hed1">Customer Billing Information</td>
		</tr>
		<tr>
			<td>
			<div class="forms_headerbg">
			<table width="100%" border="0" cellspacing="3" cellpadding="3">
				<tr>
					<td width="152" align="left" valign="middle">First Name<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($customer_model,'bilprenom',array('size'=>40,'maxlength'=>50)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilprenom; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">Last Name<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($customer_model,'bilnom',array('size'=>40,'maxlength'=>50)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilnom; ?></td>
                    <?php endif; ?>                    
				</tr>
				<tr>
					<td align="left" valign="middle">Company Name</td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($customer_model,'bilcompany',array('size'=>40,'maxlength'=>100)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilcompany; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">Type of Business</td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($customer_model,'bilbuztype',array('size'=>40,'maxlength'=>100)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilbuztype; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td rowspan="2" align="left" valign="top">Address<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($customer_model,'biladdress1',array('size'=>40,'maxlength'=>100)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->biladdress1; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($customer_model,'biladdress2',array('size'=>40,'maxlength'=>100)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->biladdress2; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">City<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($customer_model,'bilcity',array('size'=>40,'maxlength'=>100)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilcity; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">State/Prov<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td width="164" align="left" valign="middle"><?php echo CHtml::dropDownList('', '', Customer::getStateOptions(), array('onchange'=>'display(this)'))?></td>
					<td width="394" align="left" valign="middle"><?php echo $form->textField($customer_model,'bilstate',array('size'=>2,'maxlength'=>4)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilstate; ?></td>
                    <?php endif; ?> 
				</tr>
				<tr>
					<td align="left" valign="middle">Country<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($customer_model,'bilcountry',array('size'=>40,'maxlength'=>100)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilcountry; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">Zip/Postal Code<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($customer_model,'bilzip',array('size'=>40,'maxlength'=>100)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $customer_model->bilzip; ?></td>
                    <?php endif; ?>
				</tr>
			</table>
			</div>
			</td>
		</tr>
	</table>
	</td>
</tr>