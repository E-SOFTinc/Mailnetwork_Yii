<tr>
	<td align="center">
	<table width="620" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td height="38" align="left" valign="middle"
				background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
				class="forms_hed1">Customer Forwarding Address</td>
		</tr>
		<tr>
			<td>
			<div class="forms_headerbg">
			<table width="100%" border="0" cellspacing="3" cellpadding="3">
                <?php if(!isset($review)): ?>
				<tr>
					<td width="152" align="left" valign="middle">Same as above </td>
					<td colspan="2" align="left" valign="middle"><input
						name="copycheckbox" id="copycheckbox"
						onclick="copyBillingToMailingAddress()" type="checkbox" /></td>
				</tr>
                <?php endif; ?>
				<tr>
					<td width="152" align="left" valign="middle">First Name<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_first',array('size'=>40,'maxlength'=>50)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $commande_model->dest_first; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">Last Name</td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_last',array('size'=>40,'maxlength'=>50)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $commande_model->dest_last; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">Company Name</td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_company',array('size'=>40,'maxlength'=>50)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $commande_model->dest_company; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td rowspan="2" align="left" valign="top">Address<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_address1',array('size'=>40,'maxlength'=>50)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $commande_model->dest_address1; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
                	<?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_address2',array('size'=>40,'maxlength'=>50)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $commande_model->dest_address2; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">City<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_city',array('size'=>40,'maxlength'=>50)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $commande_model->dest_city; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">State/Prov<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td width="164" align="left" valign="middle"><?php echo CHtml::dropDownList('', '', Customer::getStateOptions(), array('onchange'=>'display2(this)'))?></td>
					<td width="394" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_state',array('size'=>11,'maxlength'=>40)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $commande_model->dest_state; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">Country<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_country',array('size'=>40,'maxlength'=>50)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $commande_model->dest_country; ?></td>
                    <?php endif; ?>
				</tr>
				<tr>
					<td align="left" valign="middle">Zip/Postal Code<span class="start_txt">*</span></td>
                    <?php if(!isset($review)): ?>
					<td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_zip',array('size'=>40,'maxlength'=>50)); ?></td>
                    <?php else: ?>
                    <td colspan="2" align="left" valign="middle"><?php echo $commande_model->dest_zip; ?></td>
                    <?php endif; ?>
				</tr>
			</table>
			</div>
			</td>
		</tr>
	</table>
	</td>
</tr>