<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'comkey'); ?>
		<?php echo $form->textField($model,'comkey',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bilkey'); ?>
		<?php echo $form->textField($model,'bilkey',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comstatus'); ?>
		<?php echo $form->textField($model,'comstatus',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comgoodcitykey'); ?>
		<?php echo $form->textField($model,'comgoodcitykey',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comfrequency'); ?>
		<?php echo $form->textField($model,'comfrequency',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comsetup'); ?>
		<?php echo $form->textField($model,'comsetup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comdeposit'); ?>
		<?php echo $form->textField($model,'comdeposit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comperiod'); ?>
		<?php echo $form->textField($model,'comperiod',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comdebut'); ?>
		<?php echo $form->textField($model,'comdebut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comfin'); ?>
		<?php echo $form->textField($model,'comfin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comgroup'); ?>
		<?php echo $form->textField($model,'comgroup',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'commfgp'); ?>
		<?php echo $form->textField($model,'commfgp',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comnodesuite'); ?>
		<?php echo $form->textField($model,'comnodesuite',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_first'); ?>
		<?php echo $form->textField($model,'dest_first',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_last'); ?>
		<?php echo $form->textField($model,'dest_last',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_company'); ?>
		<?php echo $form->textField($model,'dest_company',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_address1'); ?>
		<?php echo $form->textField($model,'dest_address1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_address2'); ?>
		<?php echo $form->textField($model,'dest_address2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_city'); ?>
		<?php echo $form->textField($model,'dest_city',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_state'); ?>
		<?php echo $form->textField($model,'dest_state',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_zip'); ?>
		<?php echo $form->textField($model,'dest_zip',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_country'); ?>
		<?php echo $form->textField($model,'dest_country',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comnote'); ?>
		<?php echo $form->textArea($model,'comnote',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_mailco'); ?>
		<?php echo $form->textField($model,'dest_mailco',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_mailname1'); ?>
		<?php echo $form->textField($model,'dest_mailname1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idtype11'); ?>
		<?php echo $form->textField($model,'dest_idtype11',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idnumber11'); ?>
		<?php echo $form->textField($model,'dest_idnumber11',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idpicture11'); ?>
		<?php echo $form->textField($model,'dest_idpicture11',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idtype12'); ?>
		<?php echo $form->textField($model,'dest_idtype12',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idnumber12'); ?>
		<?php echo $form->textField($model,'dest_idnumber12',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idpicture12'); ?>
		<?php echo $form->textField($model,'dest_idpicture12',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idpsform1'); ?>
		<?php echo $form->textField($model,'dest_idpsform1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_mailname2'); ?>
		<?php echo $form->textField($model,'dest_mailname2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idtype21'); ?>
		<?php echo $form->textField($model,'dest_idtype21',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idnumber21'); ?>
		<?php echo $form->textField($model,'dest_idnumber21',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idpicture21'); ?>
		<?php echo $form->textField($model,'dest_idpicture21',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idtype22'); ?>
		<?php echo $form->textField($model,'dest_idtype22',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idnumber22'); ?>
		<?php echo $form->textField($model,'dest_idnumber22',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idpicture22'); ?>
		<?php echo $form->textField($model,'dest_idpicture22',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idpsform2'); ?>
		<?php echo $form->textField($model,'dest_idpsform2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_mailname3'); ?>
		<?php echo $form->textField($model,'dest_mailname3',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idtype31'); ?>
		<?php echo $form->textField($model,'dest_idtype31',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idnumber31'); ?>
		<?php echo $form->textField($model,'dest_idnumber31',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idpicture31'); ?>
		<?php echo $form->textField($model,'dest_idpicture31',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idtype32'); ?>
		<?php echo $form->textField($model,'dest_idtype32',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idnumber32'); ?>
		<?php echo $form->textField($model,'dest_idnumber32',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idpicture32'); ?>
		<?php echo $form->textField($model,'dest_idpicture32',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dest_idpsform3'); ?>
		<?php echo $form->textField($model,'dest_idpsform3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->