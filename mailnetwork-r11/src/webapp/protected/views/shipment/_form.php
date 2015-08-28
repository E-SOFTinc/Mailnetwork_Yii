<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shipment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'shipdate'); ?>
		<?php echo $form->textField($model,'shipdate'); ?>
		<?php echo $form->error($model,'shipdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipdetail'); ?>
		<?php echo $form->textField($model,'shipdetail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'shipdetail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipdebit'); ?>
		<?php echo $form->textField($model,'shipdebit'); ?>
		<?php echo $form->error($model,'shipdebit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipcredit'); ?>
		<?php echo $form->textField($model,'shipcredit'); ?>
		<?php echo $form->error($model,'shipcredit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->