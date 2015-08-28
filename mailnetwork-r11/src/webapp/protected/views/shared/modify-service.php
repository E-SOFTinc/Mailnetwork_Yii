<script language="javascript">

function display(selection)
{
	//get index # of selection
	tempIndex=selection.selectedIndex
	//get the text .text ou get the value .value
	selectedState=selection.options[tempIndex].value
	elem = document.getElementById('Commande_dest_state')
	elem.value=selectedState
}	

</script>
  
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($customer_model); ?>
<?php echo $form->errorSummary($commande_model); ?>

  
  <table width="780" border="0" cellspacing="0" cellpadding="0">
	<tr><td align="center"><h2>Customer #<?php echo $customer_model->bilkey ?></h2></td></tr>
	<tr><td align="center"><h2><?php echo $customer_model->bilprenom . ' ' . $customer_model->bilnom; ?></h2></td></tr>
	<tr><td align="center"><h2><?php echo $customer_model->bilcompany ?></h2></td></tr>
	<?php if (isset($admin)): ?>
	<tr><td align="center" style="padding-top:5px;"><a href="<?php echo Yii::app()->request->baseUrl; ?>/customer/update/id/<?php echo $customer_model->bilkey ?>">[Back to customer record]</a></td></tr>
	<?php else: ?>
	<tr><td align="center" style="padding-top:5px;"><a href="<?php echo Yii::app()->request->baseUrl; ?>/user/info">[Back]</a></td></tr>
	<?php endif; ?>
	<tr><td align="center">&nbsp;</td></tr>
    <tr>
      <td align="center" valign="top"><table width="760" border="0" cellspacing="0" cellpadding="0">
      	<?php if(isset($admin)): ?>
        <tr>
          <td align="center" valign="top"><table width="620" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="38" align="left" valign="middle" background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg" class="forms_hed1">Services</td>
            </tr>
            <tr>
              <td align="center" valign="top">
              <div class="forms_headerbg">
              <table width="100%" border="0" cellspacing="3" cellpadding="3">
              <tr>
                <td width="152" align="left" valign="middle">Status: </td>
                <td colspan="2" align="left" valign="middle">
                <?php echo $form->dropDownList($commande_model,'comstatus',$commande_model->getComStatusOptions()); ?>
                </td>
              </tr>
              <tr>
                <td align="left" valign="middle">Start:</td>
                <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'comdebut', array('size'=>15)); ?></td>
              </tr>
              <tr>
                <td align="left" valign="middle">End :</td>
                <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'comfin', array('size'=>15)); ?></td>
              </tr>
              <tr>
                <td align="left" valign="middle">Frequency:</td>
                <td align="left" valign="middle"><?php echo $form->dropDownList($commande_model,'comfrequency',$commande_model->getFrequencyOptions($with_prices=FALSE)); ?></td>
<!--                <td width="164" align="left" valign="middle"><input name="comfrequency" size="30" value="Air-mail service monthly" type="text" /></td>-->
              </tr>
              <tr>
                <td align="left" valign="middle">Rental Period </td>
                <td colspan="2" align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="11%"><?php echo $form->dropDownList($commande_model,'comperiod',$commande_model->getRentalPeriodOptionsAdmin()); ?></td>
                    <td width="89%"></td>
                  </tr>
                </table></td>
                </tr>
              <tr>
                <td align="left" valign="middle">Forwarding Deposit</td>
                <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'comdeposit', array('size'=>8)); ?></td>
              </tr>
              </table>
              </div>
</td>
            </tr>
            </table></td>
        </tr>
        <tr>
          <td height="30"></td>        
        </tr>
        <?php endif; ?>
        <?php if(isset($admin)): ?>
        <tr>
          <td align="center" valign="top">
          <table width="620" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="38" align="left" valign="middle" background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg" class="forms_hed1"><b>Mailing Address </b></td>
            </tr>
            <tr>
              <td>
              <div class="forms_headerbg">
               
               <table width="100%" border="0" cellspacing="3" cellpadding="3">
              <tr>
                <td width="122" align="left" valign="middle">DBase address ID<br /></td>
                <td width="180" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_mailname1',array('size'=>30,'maxlength'=>100)); ?></td>
                <td width="288" align="left" valign="middle">&nbsp;</td>
              </tr>
                <tr>
                <td align="left" valign="middle"><?php echo $form->textField($commande_model,'comgoodcitykey',array('size'=>8,'maxlength'=>50)); ?></td>
                <td align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_mailco',array('size'=>30,'maxlength'=>100)); ?></td>
                <td align="left" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="middle">Note:</td>
                <td colspan="2" align="left" valign="middle"><?php echo $form->textArea($commande_model,'comnote',array('rows'=>3, 'cols'=>40)); ?></td>
                </tr>
              <tr>
                <td align="left" valign="top">City category: <?php echo $commande_model->box->goodcategory ?> </td>
                <td align="left" valign="top" colspan=2>Suite or #:
					<?php echo $form->textField($commande_model,'comnodesuite',array('size'=>10,'maxlength'=>20)); ?><br>
	                <?php echo trim($commande_model->box->goodaddress) . ' ' . trim($commande_model->comnodesuite) ?> <br />
	                <?php echo $commande_model->box->goodcity . ', ' . $commande_model->box->goodstate . ' ' . $commande_model->box->goodzip ?><br />
	                <?php echo $commande_model->box->goodcountry ?><br />
				</td>
              </tr>
              <tr>
                <td align="left" valign="middle"><b>First ID </b></td>
                <td colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><?php echo $form->dropDownList($commande_model,'dest_idtype11',$commande_model->getIdTypeOptions()); ?>
                      No
                      <?php echo $form->textField($commande_model,'dest_idnumber11',array('size'=>15,'maxlength'=>50)); ?></td>
                  </tr>
                </table></td>
                </tr>
              <tr>
                <td align="left" valign="middle"><b>Second ID </b></td>
                <td colspan="2" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><?php echo $form->dropDownList($commande_model,'dest_idtype12',$commande_model->getIdTypeOptions()); ?>
                      No                      
                      <?php echo $form->textField($commande_model,'dest_idnumber12',array('size'=>15,'maxlength'=>50)); ?></td>
                  </tr>
                </table></td>
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
		<?php endif; ?>
        <tr>
          <td align="center">
          <table width="620" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="38" align="left" valign="middle" background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg" class="forms_hed1"><b>Forwarding Address </b></td>
            </tr>
            <tr>
              <td>
              <div class="forms_headerbg">
              <?php echo $form->errorSummary($commande_model); ?>
               <table width="100%" border="0" cellspacing="3" cellpadding="3">
                 <tr>
                   <td align="left" valign="middle">First Name<span class="start_txt">*</span></td>
                   <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_first',array('size'=>40,'maxlength'=>50)); ?></td>
                 </tr>
                 <tr>
                   <td align="left" valign="middle">Last Name<span class="start_txt">*</span></td>
                   <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_last',array('size'=>40,'maxlength'=>50)); ?></td>
                 </tr>
                 <tr>
                   <td align="left" valign="middle">Company Name</td>
                   <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_company',array('size'=>40,'maxlength'=>50)); ?></td>
                 </tr>
                 <tr>
                   <td rowspan="2" align="left" valign="top">Address<span class="start_txt">*</span></td>
                   <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_address1',array('size'=>40,'maxlength'=>50)); ?></td>
                 </tr>
                 <tr>
                   <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_address2',array('size'=>40,'maxlength'=>50)); ?></td>
                 </tr>
                 <tr>
                   <td align="left" valign="middle">City<span class="start_txt">*</span></td>
                   <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_city',array('size'=>40,'maxlength'=>50)); ?></td>
                 </tr>
                 <tr>
                   <td align="left" valign="middle">State/Prov<span class="start_txt">*</span></td>
                   <td width="164" align="left" valign="middle">
                   <?php echo CHtml::dropDownList('', '', Customer::getStateOptions(), array('onchange'=>'display(this)'))?>
                   </td>
                   <td width="394" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_state',array('size'=>11,'maxlength'=>40)); ?></td>
                 </tr>
                 <tr>
                   <td align="left" valign="middle">Country<span class="start_txt">*</span></td>
                   <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_country',array('size'=>40,'maxlength'=>50)); ?></td>
                 </tr>
                 <tr>
                   <td align="left" valign="middle">Zip/Postal Code</td>
                   <td colspan="2" align="left" valign="middle"><?php echo $form->textField($commande_model,'dest_zip',array('size'=>40,'maxlength'=>50)); ?></td>
                 </tr>
                 <?php if(!isset($admin)): ?>
                 <tr>
                   <td align="left" valign="middle">Mail Forwarding Option<span class="start_txt">*</span></td>
                   <td colspan="2" align="left" valign="middle"><?php echo $form->dropDownList($commande_model,'comfrequency',$commande_model->getFrequencyOptions()); ?></td>
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
          <td></td>
        </tr>
        <tr>
          <td align="center"><table width="620" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td height="30" align="center" valign="middle"><?php echo CHtml::submitButton($commande_model->isNewRecord ? 'Create' : 'Save'); ?></td>
            </tr>
            </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
<?php $this->endWidget(); ?>