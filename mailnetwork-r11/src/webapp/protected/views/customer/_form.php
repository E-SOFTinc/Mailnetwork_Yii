<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bilstatus'); ?>
		<?php echo $form->dropDownList($model,'bilstatus',$model->getBilStatusOptions()); ?>
		<?php //echo $form->textField($model,'bilstatus',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bilstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'billogin'); ?>
		<?php echo $form->textField($model,'billogin',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'billogin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilpass'); ?>
		<?php echo $form->textField($model,'bilpass',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'bilpass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilbuztype'); ?>
		<?php echo $form->textField($model,'bilbuztype',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bilbuztype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilnom'); ?>
		<?php echo $form->textField($model,'bilnom',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bilnom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilprenom'); ?>
		<?php echo $form->textField($model,'bilprenom',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bilprenom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilcompany'); ?>
		<?php echo $form->textField($model,'bilcompany',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bilcompany'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biladdress1'); ?>
		<?php echo $form->textField($model,'biladdress1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'biladdress1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biladdress2'); ?>
		<?php echo $form->textField($model,'biladdress2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'biladdress2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilcity'); ?>
		<?php echo $form->textField($model,'bilcity',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bilcity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilstate'); ?>
		<?php echo $form->textField($model,'bilstate',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bilstate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilzip'); ?>
		<?php echo $form->textField($model,'bilzip',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bilzip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilcountry'); ?>
		<?php echo $form->textField($model,'bilcountry',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bilcountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilphone1'); ?>
		<?php echo $form->textField($model,'bilphone1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->dropDownList($model,'bilphone1opt',$model->getPhoneOptions()); ?>
		<?php echo $form->error($model,'bilphone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilphone2'); ?>
		<?php echo $form->textField($model,'bilphone2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->dropDownList($model,'bilphone2opt',$model->getPhoneOptions()); ?>
		<?php echo $form->error($model,'bilphone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilphone3'); ?>
		<?php echo $form->textField($model,'bilphone3',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->dropDownList($model,'bilphone3opt',$model->getPhoneOptions()); ?>
		<?php echo $form->error($model,'bilphone3'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'bilphone1opt'); ?>
		<?php echo $form->dropDownList($model,'bilphone1opt',$model->getPhoneOptions()); ?>
		<?php //echo $form->textField($model,'bilphone1opt',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bilphone1opt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilphone2opt'); ?>
		<?php echo $form->dropDownList($model,'bilphone2opt',$model->getPhoneOptions()); ?>
		<?php //echo $form->textField($model,'bilphone2opt',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bilphone2opt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilphone3opt'); ?>
		<?php echo $form->dropDownList($model,'bilphone3opt',$model->getPhoneOptions()); ?>
		<?php //echo $form->textField($model,'bilphone3opt',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bilphone3opt'); ?>
	</div>
-->

	<div class="row">
		<?php echo $form->labelEx($model,'bilfax'); ?>
		<?php echo $form->textField($model,'bilfax',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bilfax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilemail'); ?>
		<?php echo $form->textField($model,'bilemail',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bilemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilemail2'); ?>
		<?php echo $form->textField($model,'bilemail2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bilemail2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilurl'); ?>
		<?php echo $form->textField($model,'bilurl',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bilurl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biloldid'); ?>
		<?php echo $form->textField($model,'biloldid',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'biloldid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilhow'); ?>
		<?php echo $form->textField($model,'bilhow',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bilhow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilnote'); ?>
		<?php echo $form->textArea($model,'bilnote',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'bilnote'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bilbalance'); ?>
		<?php echo $form->textField($model,'bilbalance'); ?>
		<?php echo $form->error($model,'bilbalance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
