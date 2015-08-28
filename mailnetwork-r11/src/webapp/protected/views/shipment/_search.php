<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'shipkey'); ?>
		<?php echo $form->textField($model,'shipkey'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comkey'); ?>
		<?php echo $form->textField($model,'comkey'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilkey'); ?>
		<?php echo $form->textField($model,'bilkey'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipdate'); ?>
		<?php echo $form->textField($model,'shipdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipdetail'); ?>
		<?php echo $form->textField($model,'shipdetail',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipdebit'); ?>
		<?php echo $form->textField($model,'shipdebit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipcredit'); ?>
		<?php echo $form->textField($model,'shipcredit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->