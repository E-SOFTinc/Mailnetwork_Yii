  
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'testimonial-form',
	'enableAjaxValidation'=>false,
)); ?>


  
  <table width="780" border="0" cellspacing="0" cellpadding="0">
	<tr><td align="center"><h2>Add Testimonial</h2></td></tr>
    <tr>
       <td height="35" align="center" valign="middle"><a href="<?php echo $this->createUrl('site/admin'); ?>" class="formslinks">[ Go Back ]</a></td>
    </tr>
  	 
    <tr>
      <td align="center" valign="top"><table width="760" border="0" cellspacing="0" cellpadding="0">
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
                <td align="left" valign="middle">First Name:</td>
                <td colspan="2" align="left" valign="middle"><?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255)); ?></td>
              </tr>
              <tr>
                <td align="left" valign="middle">Last Name:</td>
                <td colspan="2" align="left" valign="middle"><?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255)); ?></td>
              </tr>
              <tr>
                <td align="left" valign="middle">Location:</td>
                <td colspan="2" align="left" valign="middle"><?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>255)); ?></td>
              </tr>
              <tr>
                <td align="left" valign="middle">Content:</td>
                <td colspan="2" align="left" valign="middle"><?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>255)); ?></td>
              </tr>
              <tr>
                <td colspan="3" align="center"><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?></td>
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
    

 
      </table></td>
    </tr>
  </table>
<?php $this->endWidget(); ?>