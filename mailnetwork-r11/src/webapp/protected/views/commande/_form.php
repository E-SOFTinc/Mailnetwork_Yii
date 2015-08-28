<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'commande-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bilkey'); ?>
		<?php echo $form->textField($model,'bilkey',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'bilkey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comstatus'); ?>
		<?php echo $form->textField($model,'comstatus',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'comstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comgoodcitykey'); ?>
		<?php echo $form->textField($model,'comgoodcitykey',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'comgoodcitykey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comfrequency'); ?>
		<?php echo $form->dropDownList($model,'comfrequency',$model->getFrequencyOptions()); ?>
		<?php //echo $form->textField($model,'comfrequency',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'comfrequency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comsetup'); ?>
		<?php echo $form->textField($model,'comsetup'); ?>
		<?php echo $form->error($model,'comsetup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comdeposit'); ?>
		<?php echo $form->dropDownList($model,'comdeposit',$model->getDepositOptions()); ?>	
		<?php echo $form->error($model,'comdeposit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comperiod'); ?>
		<?php echo $form->dropDownList($model,'comperiod',$model->getRentalPeriodOptions()); ?>		
		<?php echo $form->error($model,'comperiod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comdebut'); ?>
		<?php echo $form->textField($model,'comdebut'); ?>
		<?php echo $form->error($model,'comdebut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comfin'); ?>
		<?php echo $form->textField($model,'comfin'); ?>
		<?php echo $form->error($model,'comfin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comgroup'); ?>
		<?php echo $form->textField($model,'comgroup',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'comgroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commfgp'); ?>
		<?php echo $form->textField($model,'commfgp',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'commfgp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comnodesuite'); ?>
		<?php echo $form->textField($model,'comnodesuite',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'comnodesuite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_first'); ?>
		<?php echo $form->textField($model,'dest_first',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dest_first'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_last'); ?>
		<?php echo $form->textField($model,'dest_last',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dest_last'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_company'); ?>
		<?php echo $form->textField($model,'dest_company',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_address1'); ?>
		<?php echo $form->textField($model,'dest_address1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_address2'); ?>
		<?php echo $form->textField($model,'dest_address2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_city'); ?>
		<?php echo $form->textField($model,'dest_city',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_state'); ?>
		<?php echo $form->textField($model,'dest_state',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_zip'); ?>
		<?php echo $form->textField($model,'dest_zip',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_country'); ?>
		<?php echo $form->textField($model,'dest_country',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comnote'); ?>
		<?php echo $form->textArea($model,'comnote',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comnote'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_mailco'); ?>
		<?php echo $form->textField($model,'dest_mailco',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_mailco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_mailname1'); ?>
		<?php echo $form->textField($model,'dest_mailname1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_mailname1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idtype11'); ?>
		<?php echo $form->dropDownList($model,'dest_idtype11',$model->getIdTypeOptions()); ?>		
		<?php echo $form->error($model,'dest_idtype11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idnumber11'); ?>
		<?php echo $form->textField($model,'dest_idnumber11',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dest_idnumber11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idpicture11'); ?>
		<?php echo $form->textField($model,'dest_idpicture11',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dest_idpicture11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idtype12'); ?>
		<?php echo $form->dropDownList($model,'dest_idtype12',$model->getIdTypeOptions()); ?>
		<?php echo $form->error($model,'dest_idtype12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idnumber12'); ?>
		<?php echo $form->textField($model,'dest_idnumber12',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dest_idnumber12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idpicture12'); ?>
		<?php echo $form->textField($model,'dest_idpicture12',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dest_idpicture12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idpsform1'); ?>
		<?php echo $form->textField($model,'dest_idpsform1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dest_idpsform1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_mailname2'); ?>
		<?php echo $form->textField($model,'dest_mailname2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_mailname2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idtype21'); ?>
		<?php echo $form->dropDownList($model,'dest_idtype21',$model->getIdTypeOptions()); ?>
		<?php echo $form->error($model,'dest_idtype21'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idnumber21'); ?>
		<?php echo $form->textField($model,'dest_idnumber21',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dest_idnumber21'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idpicture21'); ?>
		<?php echo $form->textField($model,'dest_idpicture21',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dest_idpicture21'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idtype22'); ?>
		<?php echo $form->dropDownList($model,'dest_idtype22',$model->getIdTypeOptions()); ?>
		<?php echo $form->error($model,'dest_idtype22'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idnumber22'); ?>
		<?php echo $form->textField($model,'dest_idnumber22',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dest_idnumber22'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idpicture22'); ?>
		<?php echo $form->textField($model,'dest_idpicture22',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dest_idpicture22'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idpsform2'); ?>
		<?php echo $form->textField($model,'dest_idpsform2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dest_idpsform2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_mailname3'); ?>
		<?php echo $form->textField($model,'dest_mailname3',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dest_mailname3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idtype31'); ?>
		<?php echo $form->dropDownList($model,'dest_idtype31',$model->getIdTypeOptions()); ?>
		<?php echo $form->error($model,'dest_idtype31'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idnumber31'); ?>
		<?php echo $form->textField($model,'dest_idnumber31',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dest_idnumber31'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idpicture31'); ?>
		<?php echo $form->textField($model,'dest_idpicture31',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dest_idpicture31'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idtype32'); ?>
		<?php echo $form->dropDownList($model,'dest_idtype32',$model->getIdTypeOptions()); ?>
		<?php echo $form->error($model,'dest_idtype32'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idnumber32'); ?>
		<?php echo $form->textField($model,'dest_idnumber32',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dest_idnumber32'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idpicture32'); ?>
		<?php echo $form->textField($model,'dest_idpicture32',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dest_idpicture32'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dest_idpsform3'); ?>
		<?php echo $form->textField($model,'dest_idpsform3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dest_idpsform3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
