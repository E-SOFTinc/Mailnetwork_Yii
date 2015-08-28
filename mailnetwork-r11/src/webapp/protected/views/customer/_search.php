<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'bilkey'); ?>
		<?php echo $form->textField($model,'bilkey',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilstatus'); ?>
		<?php echo $form->textField($model,'bilstatus',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billogin'); ?>
		<?php echo $form->textField($model,'billogin',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilpass'); ?>
		<?php echo $form->textField($model,'bilpass',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilbuztype'); ?>
		<?php echo $form->textField($model,'bilbuztype',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilnom'); ?>
		<?php echo $form->textField($model,'bilnom',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilprenom'); ?>
		<?php echo $form->textField($model,'bilprenom',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilcompany'); ?>
		<?php echo $form->textField($model,'bilcompany',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biladdress1'); ?>
		<?php echo $form->textField($model,'biladdress1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biladdress2'); ?>
		<?php echo $form->textField($model,'biladdress2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilcity'); ?>
		<?php echo $form->textField($model,'bilcity',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilstate'); ?>
		<?php echo $form->textField($model,'bilstate',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilzip'); ?>
		<?php echo $form->textField($model,'bilzip',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilcountry'); ?>
		<?php echo $form->textField($model,'bilcountry',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilphone1'); ?>
		<?php echo $form->textField($model,'bilphone1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilphone2'); ?>
		<?php echo $form->textField($model,'bilphone2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilphone3'); ?>
		<?php echo $form->textField($model,'bilphone3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilphone1opt'); ?>
		<?php echo $form->textField($model,'bilphone1opt',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilphone2opt'); ?>
		<?php echo $form->textField($model,'bilphone2opt',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilphone3opt'); ?>
		<?php echo $form->textField($model,'bilphone3opt',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilfax'); ?>
		<?php echo $form->textField($model,'bilfax',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilemail'); ?>
		<?php echo $form->textField($model,'bilemail',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilemail2'); ?>
		<?php echo $form->textField($model,'bilemail2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilurl'); ?>
		<?php echo $form->textField($model,'bilurl',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biloldid'); ?>
		<?php echo $form->textField($model,'biloldid',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilhow'); ?>
		<?php echo $form->textField($model,'bilhow',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilnote'); ?>
		<?php echo $form->textArea($model,'bilnote',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilbalance'); ?>
		<?php echo $form->textField($model,'bilbalance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->