<script type="text/javascript">
function detail(selection)
{
	//get index # of selection
	tempIndex=selection.selectedIndex
	//get the text .text ou get the value .value
	selectedState=selection.options[tempIndex].value
	elem = document.getElementById('Shipment_shipdetail')
	elem.value=selectedState
}

function display(selection)
{
	//get index # of selection
	tempIndex=selection.selectedIndex
	//get the text .text ou get the value .value
	selectedState=selection.options[tempIndex].value
	elem = document.getElementById('Customer_bilstate')
	elem.value=selectedState
}	

function display2(selection)
{
	//get index # of selection
	tempIndex=selection.selectedIndex
	//get the text .text ou get the value .value
	selectedState=selection.options[tempIndex].value
	elem = document.getElementById('Commande_dest_state')
	elem.value=selectedState
}	


function toggleSecondId() {
//	$(".secondId").toggle();
}

function toggleThirdId() {
//	$(".thirdId").toggle();
}

function checkSecondId() {
	if ($("#Commande_dest_mailname2").val() == "")
		$(".secondId").hide()
	else {
		if ($('input:radio[name=address2]:checked').val() == "personal") {
			$(".secondId").show()
		}
		else {
			$(".secondId").hide()			
		}
	}
}

function checkThirdId() {
	if ($("#Commande_dest_mailname3").val() == "")
		$(".thirdId").hide()
	else {
		if ($('input:radio[name=address3]:checked').val() == "personal") {
			$(".thirdId").show()
		}
		else {
			$(".thirdId").show()
		}
	}
}

function copyBillingToMailingAddress() {
	if ($("input#copycheckbox").is(':checked')) {
		$("#Commande_dest_first").val($("#Customer_bilprenom").val())
		$("#Commande_dest_last").val($("#Customer_bilnom").val())
		$("#Commande_dest_company").val($("#Customer_bilcompany").val())
		
		$("#Commande_dest_address1").val($("#Customer_biladdress1").val())
		$("#Commande_dest_address2").val($("#Customer_biladdress2").val())
		$("#Commande_dest_city").val($("#Customer_bilcity").val())
		$("#Commande_dest_state").val($("#Customer_bilstate").val())
		$("#Commande_dest_country").val($("#Customer_bilcountry").val())
		$("#Commande_dest_zip").val($("#Customer_bilzip").val())
	}
}

$(document).ready(function() {
	$(".secondId").hide()
	$(".thirdId").hide()
	$('input:radio[name=address2]').click(function(){
//		alert('hi');
		checkSecondId()
	});
	$('input:radio[name=address3]').click(function(){
		checkThirdId()
	});
	
//	toggleSecondId();
//	toggleThirdId();
});

</script>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

<?php echo $form->errorSummary($customer_model); ?>
<?php echo $form->errorSummary($commande_model); ?>

<input type="hidden" name="Customer[bilstatus]" value="New" />
<input type="hidden" name="Commande[comstatus]" value="New" />
<input type="hidden" name="Commande[comgoodcitykey]" value="<?php echo $goodcity->goodcitykey; ?>" />

<input type="hidden" id="6months" name="6" value="295" />
<input type="hidden" id="12months" name="12" value="545" />
<input type="hidden" id="gstvalue" name="gstvalue" value="0.05" />
<input type="hidden" id="pstvalue" name="pstvalue" value="0.085 " />


<table width="752" border="0" cellspacing="0" cellpadding="0">
	<tr><td align="center"><h2>Application Form Step 1/3</h2></td></tr>
	<tr><td align="center"><span style="color:red">Fields marked with * are mandatory</span></td></tr>
	<tr>
		<td align="center" valign="top">
		<table width="752" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td align="center" valign="top">
				<table width="620" border="0" cellspacing="0" cellpadding="0">
					<tr><td align="center">&nbsp;</td></tr>
				
					<tr>
                    <?php if ($onetime == true): ?>
						<td height="38" align="left" valign="middle" background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg" class="forms_hed1">Services - One-Time Use Service</td>
                    <?php else: ?>
                        <td height="38" align="left" valign="middle" background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg" class="forms_hed1">Services</td>
                    <?php endif;?>
					</tr>
					<tr>
						<td align="center" valign="top">
						<div class="forms_headerbg">
						<table width="600" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="left" valign="top"></td>
							</tr>
							<tr>
								<td height="30" align="left" valign="middle"><b>Mailing Address</b></td>
							</tr>
							<tr>
								<td height="25" align="center" valign="top"><strong>Personal name or Business name (max. 3 names) 
								which applicant will receive mail to:</strong></td>
							</tr>
							<tr>
								<td align="left" valign="top">
								<table width="600" border="0" cellspacing="0" cellpadding="3">
									<tr>
										<td width="90" height="25" align="left" valign="middle">&nbsp;</td>
										<td width="40" align="center" valign="middle">1</td>
										<td width="414" height="25" align="left" valign="middle">
										<?php echo $form->textField($commande_model,'dest_mailname1',array('size'=>40,'maxlength'=>100)); ?>
										<?php echo $form->error($commande_model,'dest_mailname1'); ?>
										<input type="radio" name="address1" value="personal" checked /> Personal <input type="radio" name="address1" value="business"  /> Business
										</td>
									</tr>
									<tr>
										<td height="25" align="left" valign="middle">&nbsp;</td>
										<td height="25" align="center" valign="middle">2</td>
										<td height="25" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_mailname2',array('size'=>40,'maxlength'=>100, 
																								   'onFocus'=>'toggleSecondId()',
																								   'onBlur'=>'checkSecondId()')); ?>
										<?php echo $form->error($commande_model,'dest_mailname2'); ?>
										<input type="radio" name="address2" value="personal" checked /> Personal <input type="radio" name="address2" value="business"  /> Business
										</td>
									</tr>
									<tr>
										<td height="25" align="left" valign="middle">&nbsp;</td>
										<td height="25" align="center" valign="middle">3</td>
										<td height="25" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_mailname3',array('size'=>40,'maxlength'=>100, 
																								   'onFocus'=>'toggleThirdId()',
																								   'onBlur'=>'checkThirdId()')); ?>
										<?php echo $form->error($commande_model,'dest_mailname3'); ?>
										<input type="radio" name="address3" value="personal" checked /> Personal <input type="radio" name="address3" value="business"  /> Business
										</td>
									</tr>
									<tr>
										<td height="25" colspan="2" align="center" valign="middle">&nbsp;</td>
										<td height="25" align="left" valign="middle"><strong><?php echo $goodcity->goodaddress ?>
										</strong><i>(your box number)</i><br>
										<strong><?php echo $goodcity->goodcity ?>, <?php echo $goodcity->goodstate ?>
										&nbsp;<?php echo $goodcity->goodzip ?></strong><br>
										<strong><?php echo $goodcity->goodcountry?></strong></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td height="25" align="left" valign="middle"><strong>Identification
								(ID)</strong> - Each individual must provide a copy of 2 valid ID, at
								least one with picture.</td>
							</tr>
							<tr>
								<td align="left" valign="top">
								<table width="600" border="0" cellspacing="3" cellpadding="1">
									<tr>
										<td width="14" align="left" valign="middle">1</td>
										<td width="127" align="left" valign="middle">First ID<span
											class="start_txt">*</span></td>
										<td width="239" align="left" valign="middle"><?php echo $form->dropDownList($commande_model,'dest_idtype11',$commande_model->getIdTypeOptions()); ?>
										</td>
										<td width="19" align="left" valign="middle">No</td>
										<td width="82" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_idnumber11',array('size'=>13)); ?>
										</td>
										<td width="226" align="right" valign="middle">&nbsp;</td>
									</tr>
									<tr>
										<td width="14" align="left" valign="middle">&nbsp;</td>
										<td width="127" align="left" valign="middle">&nbsp;</td>
										<td width="239" align="left" valign="middle" colspan="3">
										<!--  TODO: Add correct names for uploaders --> 
<!--										<input-->
<!--											name="Commande[dest_idpicture11]" type="file"-->
<!--											id="Commande[dest_idpicture11]" value="test"-->
<!--											fileuploader="true" ftype="file" style="width: 100%" />-->
											<?php echo CHtml::activeFileField($commande_model, 'dest_idpicture11'); ?>
										</td>
										<td width="226" align="right" valign="middle">&nbsp;</td>
									</tr>
									<tr>
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">Second ID</td>
										<td align="left" valign="middle"><?php echo $form->dropDownList($commande_model,'dest_idtype12',$commande_model->getIdTypeOptions()); ?>
										</td>
										<td align="left" valign="middle">No</td>
										<td align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_idnumber12',array('size'=>13)); ?></td>
										<td align="right" valign="middle">&nbsp;</td>
									</tr>
									<tr>
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td colspan="4" align="left" valign="middle">
<!--										<input-->
<!--											fileuploader="true" name="destIdPicture12" ftype="file"-->
<!--											id="destIdPicture12" value="" type="file" />-->
											<?php echo CHtml::activeFileField($commande_model, 'dest_idpicture12'); ?>
										</td>
									</tr>
									<?php if($goodcity->goodcountry == "USA"): ?>
									<tr>
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">Postal Form</td>
										<td colspan="4" align="left" valign="middle"><strong>Please
										print and sign sections #5 and #16 of the <a href="<?php echo Yii::app()->request->baseUrl; ?>/forms/ps1583.pdf" target="_blank">[Postal
										Service Form 1583]</a></strong></td>
									</tr>
									<tr>
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td colspan="3" align="left" valign="middle">
<!--										<input-->
<!--											fileuploader="true" name="destIdPicture" ftype="file"-->
<!--											id="destIdPicture" value="" type="file" />-->
											<?php echo CHtml::activeFileField($commande_model, 'dest_idpsform1'); ?>
										</td>
										<td align="left" valign="middle">&nbsp;</td>
									</tr>
									<?php endif; ?>
									<tr>
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td colspan="3" align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
									</tr>

									<tr class="secondId">
										<td align="left" valign="middle">2</td>
										<td align="left" valign="middle">First ID<span
											class="start_txt">*</span></td>
										<td align="left" valign="middle"><?php echo $form->dropDownList($commande_model,'dest_idtype21',$commande_model->getIdTypeOptions()); ?>
										</td>
										<td align="left" valign="middle">No</td>
										<td align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_idnumber21',array('size'=>13)); ?></td>
										<td align="right" valign="middle">&nbsp;</td>
									</tr>
									<tr class="secondId">
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td colspan="3" align="left" valign="middle">
<!--										<input-->
<!--											fileuploader="true" name="destIdPicture21"-->
<!--											disabled="disabled" ftype="file" id="destIdPicture21"-->
<!--											value="" type="file" />-->
											<?php echo CHtml::activeFileField($commande_model, 'dest_idpicture21'); ?>
										</td>
										<td align="right" valign="middle">&nbsp;</td>
									</tr>
									<tr class="secondId">
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">Second ID</td>
										<td align="left" valign="middle"><?php echo $form->dropDownList($commande_model,'dest_idtype22',$commande_model->getIdTypeOptions()); ?>
										</td>
										<td align="left" valign="middle">No</td>
										<td align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_idnumber22'); ?>
										</td>
										<td align="right" valign="middle">&nbsp;</td>
									</tr>
									<tr class="secondId">
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td colspan="3" align="left" valign="middle">
<!--										<input-->
<!--											fileuploader="true" name="destIdPicture22" ftype="file"-->
<!--											disabled="disabled" id="destIdPicture22" value="" type="file" />-->
											<?php echo CHtml::activeFileField($commande_model, 'dest_idpicture22'); ?>
										</td>
										<td align="right" valign="middle">&nbsp;</td>
									</tr>
									<?php if($goodcity->goodcountry == "USA"): ?>
									<tr class="secondId">
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">Postal Form</td>
										<td colspan="4" align="left" valign="middle"><strong>Please
										print and sign sections #5 and #16 of the <a href="<?php echo Yii::app()->request->baseUrl; ?>/forms/ps1583.pdf">[Postal
										Service Form 1583]</a></strong></td>
									</tr>
									<tr class="secondId">
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td colspan="4" align="left" valign="middle">
<!--										<input-->
<!--											fileuploader="true" name="destIdPicture2" ftype="file"-->
<!--											disabled="disabled" id="destIdPicture2" value="" type="file" />-->
											<?php echo CHtml::activeFileField($commande_model, 'dest_idpsform2'); ?>
										</td>
									</tr>
									<?php endif; ?>
									<tr class="secondId">
										<td height="25" colspan="6" align="left" valign="middle">&nbsp;</td>
									</tr>

									<tr class="thirdId">
										<td align="left" valign="middle">3</td>
										<td align="left" valign="middle">First ID<span
											class="start_txt">*</span></td>
										<td align="left" valign="middle"><?php echo $form->dropDownList($commande_model,'dest_idtype31',$commande_model->getIdTypeOptions()); ?>
										</td>
										<td align="left" valign="middle">No</td>
										<td align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_idnumber31',array('size'=>13)); ?>
										</td>
										<td align="right" valign="middle">&nbsp;</td>
									</tr>
									<tr class="thirdId">
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td colspan="3" align="left" valign="middle">
<!--										<input-->
<!--											fileuploader="true" name="destIdPicture31" ftype="file"-->
<!--											disabled="disabled" id="destIdPicture31" value="" type="file" />-->
											<?php echo CHtml::activeFileField($commande_model, 'dest_idpicture31'); ?>
										</td>
										<td align="right" valign="middle">&nbsp;</td>
									</tr>
									<tr class="thirdId">
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">Second ID</td>
										<td align="left" valign="middle"><?php echo $form->dropDownList($commande_model,'dest_idtype32',$commande_model->getIdTypeOptions()); ?>
										</td>
										<td align="left" valign="middle">No</td>
										<td align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_idnumber32',array('size'=>13)); ?>
										</td>
										<td align="right" valign="middle">&nbsp;</td>
									</tr>
									<tr class="thirdId">
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td colspan="3" align="left" valign="middle">
<!--										<input-->
<!--											fileuploader="true" name="destIdPicture32" ftype="file"-->
<!--											disabled="disabled" id="destIdPicture32" value="" type="file" />-->
											<?php echo CHtml::activeFileField($commande_model, 'dest_idpicture32'); ?>
										</td>
										<td align="right" valign="middle">&nbsp;</td>
									</tr>
									<?php if($goodcity->goodcountry == "USA"): ?>
									<tr class="thirdId">
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">Postal Form</td>
										<td colspan="4" align="left" valign="middle"><strong>Please
										print and sign sections #5 and #16 of the <a href="<?php echo Yii::app()->request->baseUrl; ?>/forms/ps1583.pdf">[Postal
										Service Form 1583]</a></strong></td>
									</tr>
									<tr class="thirdId">
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td colspan="4" align="left" valign="middle">
<!--										<input-->
<!--											fileuploader="true" name="destIdPicture3" ftype="file"-->
<!--											disabled="disabled" id="destIdPicture3" value="" type="file" />-->
											<?php echo CHtml::activeFileField($commande_model, 'dest_idpsform3'); ?>
										</td>
									</tr>
                                    
									<?php endif; ?>
									<tr class="thirdId">
										<td height="20" colspan="6" align="left" valign="middle">&nbsp;</td>
									</tr>
                                    
                                    <?php if($onetime == false): ?>
                                    
									<tr>
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">Rental Period <span
											class="start_txt">*</span></td>
										<td align="left" valign="middle"><?php echo $form->dropDownList($commande_model,'comperiod',$commande_model->getRentalPeriodOptions()); ?>
										</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">&nbsp;</td>
										<td align="right" valign="middle">&nbsp;</td>
									</tr>
<!--									<tr>-->
<!--										<td align="left" valign="middle">&nbsp;</td>-->
<!--										<td align="left" valign="middle">Setup Fee</td>-->
<!--										<td align="left" valign="middle"><b>$35 </b> <input name="Commande[comsetup]" value="35" type="hidden"></td>-->
<!--										<td align="left" valign="middle">&nbsp;</td>-->
<!--										<td align="left" valign="middle">&nbsp;</td>-->
<!--										<td align="right" valign="middle">&nbsp;</td>-->
<!--									</tr>-->
									<tr>
										<td align="left" valign="middle">&nbsp;</td>
										<td align="left" valign="middle">Mail Forwarding Deposit
										<span class="start_txt">*</span></td>
										<td colspan="4" align="left" valign="middle"><?php echo $form->dropDownList($commande_model,'comfrequency',$commande_model->getFrequencyOptions()); ?>
										</td>
									</tr>
                                    
                                    <?php else: ?>
                                    
                                    <tr>
                                        <td align="left" valign="middle">&nbsp;</td>
                                        <td align="left" valign="middle">Rental Fee</td>
                                        <td colspan="4" align="left" valign="middle"><strong>$50</strong></td>
                                    </tr>                                   
                                    <tr>
                                        <td align="left" valign="middle">&nbsp;</td>
                                        <td align="left" valign="middle">Mail Forwarding Deposit</td>
                                        <td colspan="4" align="left" valign="middle">The shipment fee will be charged on receipt of your piece of mail.</td>
                                    </tr>                                   
                                                                        
                                    <?php endif; ?>
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
				<td height="30"></td>
			</tr>
				<?php include("_billinginfo.php"); ?>
			<tr>
				<td height="30"></td>
			</tr>
            	<?php include("_mailingaddress.php"); ?>
			<tr>
				<td height="30"></td>
			</tr>
            	<?php include("_otherbilling.php"); ?>
                        <tr>
				<td height="30"></td>
			</tr>                
                <?php include("_choosepayment.php"); ?>
			
                        <tr> 
				<td align="center">
				<table width="620" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" valign="top">&nbsp;</td>
					</tr>
					<tr>
						<td>
						<table border="0" cellpadding="10" cellspacing="0">
							<tbody>
								<tr>
									<td align="Center"><span class="start_txt">*</span> <input
										name="agree" value="yes" type="Checkbox"> <b> I
									have read the <a href="<?php echo $this->createUrl('site/page',array('view'=>'terms')); ?>"
										target="_new" class="formslinks">Mailing Address Rental
									Agreement</a> and I agree to the terms set forth in it. <br>
									(Link will open in another window.) </b></td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
					<tr>
						<td height="30" align="center" valign="middle">
						    <?php echo CHtml::submitButton($commande_model->isNewRecord ? 'Create' : 'Save'); ?><br />
                            <strong>(Please click only once!)</strong>                     
                        </td>
					</tr>
				</table>
				</td>
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

<?php $this->endWidget(); ?>

<script>
  /*  function paymentChange(selected){
    if (selected.value == "credit_card")
        $('#creditCardPayment').show();
    else
        $('#creditCardPayment').hide();
    }       */
</script>