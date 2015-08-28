<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'goodcitykey'); ?>
		<?php echo $form->textField($model,'goodcitykey',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodaddress'); ?>
		<?php echo $form->textField($model,'goodaddress',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodcenter'); ?>
		<?php echo $form->textField($model,'goodcenter',array('size'=>60,'maxlength'=>63)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodcity'); ?>
		<?php echo $form->textField($model,'goodcity',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodstate'); ?>
		<?php echo $form->textField($model,'goodstate',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodcountry'); ?>
		<?php echo $form->textField($model,'goodcountry',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodzip'); ?>
		<?php echo $form->textField($model,'goodzip',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodcategory'); ?>
		<?php echo $form->textField($model,'goodcategory',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodname'); ?>
		<?php echo $form->textField($model,'goodname',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodphone'); ?>
		<?php echo $form->textField($model,'goodphone',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodfax'); ?>
		<?php echo $form->textField($model,'goodfax',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodemail'); ?>
		<?php echo $form->textField($model,'goodemail',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodcitypic'); ?>
		<?php echo $form->textField($model,'goodcitypic',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodsix'); ?>
		<?php echo $form->textField($model,'goodsix',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gooddouze'); ?>
		<?php echo $form->textField($model,'gooddouze',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goodnote'); ?>
		<?php echo $form->textArea($model,'goodnote',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->