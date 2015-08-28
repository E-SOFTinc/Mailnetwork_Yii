<script type="text/javascript">

function display(selection)
{
    //get index # of selection
    tempIndex=selection.selectedIndex
    //get the text .text ou get the value .value
    selectedState=selection.options[tempIndex].value
    elem = document.getElementById('Goodcity_goodstate')
    elem.value=selectedState
}

</script>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>
  
  <table width="780" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="center" valign="top"><form>
        <table width="760" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="35" align="center" valign="middle"><a href="<?php echo $this->createUrl('goodcity/admin'); ?>" class="formslinks">[ Go Back ]</a></td>
          </tr>
          <tr>
            <td align="center" valign="top"><table width="620" border="0" cellspacing="0" cellpadding="0">
              <tr>
              	<?php if (@$mode == 'create'): ?>
                <td height="38" align="left" valign="middle" background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg" class="forms_hed1">Add a New Address</td>
                <?php else: ?>
                <td height="38" align="left" valign="middle" background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg" class="forms_hed1">Update an Existing Address</td>
                <?php endif; ?>
              </tr>
              <tr>
                <td><div class="forms_headerbg">
                  <table width="100%" border="0" cellspacing="3" cellpadding="3">
                    <tr>
                      <td align="left" valign="middle">Center Name<span class="start_txt">*</span></td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodcenter',array('size'=>40,'maxlength'=>63)); ?></td>
                    </tr>
                    <tr>
                      <td width="152" rowspan="2" align="left" valign="top">Address<span class="start_txt">*</span></td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodaddress',array('size'=>40,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">City<span class="start_txt">*</span></td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodcity',array('size'=>40,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">State/Prov<span class="start_txt">*</span></td>
                      <td width="164" align="left" valign="middle"><?php echo CHtml::dropDownList('', '', Customer::getStateOptions(), array('onchange'=>'display(this)'))?></td>
                      <td width="394" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodstate',array('size'=>11,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Country<span class="start_txt">*</span></td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodcountry',array('size'=>40,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Zip/Postal Code</td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodzip',array('size'=>40,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Rate Category</td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodcategory',array('size'=>2,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Contact name</td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodname',array('size'=>40,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Phone</td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodphone',array('size'=>40,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Fax</td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodfax',array('size'=>40,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">E-mail</td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodemail',array('size'=>40,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Fee 6 months </td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'goodsix',array('size'=>40,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Fee 12 months </td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textField($goodcity_model,'gooddouze',array('size'=>40,'maxlength'=>50)); ?></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">Note</td>
                      <td colspan="2" align="left" valign="middle"><?php echo $form->textArea($goodcity_model,'goodnote',array('rows'=>3, 'cols'=>37)); ?></textarea></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">City Picture</td>
                      <td colspan="2" align="left" valign="middle"><?php echo CHtml::activeFileField($goodcity_model, 'goodcitypic'); ?></td>
                    </tr>                    
                  </table>
                </div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="center"><table width="620" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="30" align="center" valign="middle"><p>
                  <?php echo CHtml::submitButton($goodcity_model->isNewRecord ? 'Create' : 'Save'); ?>
                  <br />
                  <br />
                </p>
                  <p><a href="#" class="formslinks">[ Go Back ] </a></p></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
      </form></td>
    </tr>
  </table>
<?php $this->endWidget(); ?>