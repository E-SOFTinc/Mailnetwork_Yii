<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tarifkey'); ?>
		<?php echo $form->textField($model,'tarifkey',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_ny_6_4'); ?>
		<?php echo $form->textField($model,'group_ny_6_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_ny_6_50'); ?>
		<?php echo $form->textField($model,'group_ny_6_50'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_ny_6_100'); ?>
		<?php echo $form->textField($model,'group_ny_6_100'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_ny_12_4'); ?>
		<?php echo $form->textField($model,'group_ny_12_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_ny_12_50'); ?>
		<?php echo $form->textField($model,'group_ny_12_50'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_ny_12_100'); ?>
		<?php echo $form->textField($model,'group_ny_12_100'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_laval_6_4'); ?>
		<?php echo $form->textField($model,'group_laval_6_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_laval_6_50'); ?>
		<?php echo $form->textField($model,'group_laval_6_50'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_laval_6_100'); ?>
		<?php echo $form->textField($model,'group_laval_6_100'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_laval_12_4'); ?>
		<?php echo $form->textField($model,'group_laval_12_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_laval_12_50'); ?>
		<?php echo $form->textField($model,'group_laval_12_50'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_laval_12_100'); ?>
		<?php echo $form->textField($model,'group_laval_12_100'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_setup'); ?>
		<?php echo $form->textField($model,'group_setup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_renewal'); ?>
		<?php echo $form->textField($model,'group_renewal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_a_6'); ?>
		<?php echo $form->textField($model,'cat_a_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_b_6'); ?>
		<?php echo $form->textField($model,'cat_b_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_c_6'); ?>
		<?php echo $form->textField($model,'cat_c_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_d_6'); ?>
		<?php echo $form->textField($model,'cat_d_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_e_6'); ?>
		<?php echo $form->textField($model,'cat_e_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_f_6'); ?>
		<?php echo $form->textField($model,'cat_f_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_g_6'); ?>
		<?php echo $form->textField($model,'cat_g_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_h_6'); ?>
		<?php echo $form->textField($model,'cat_h_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_a_12'); ?>
		<?php echo $form->textField($model,'cat_a_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_b_12'); ?>
		<?php echo $form->textField($model,'cat_b_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_c_12'); ?>
		<?php echo $form->textField($model,'cat_c_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_d_12'); ?>
		<?php echo $form->textField($model,'cat_d_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_e_12'); ?>
		<?php echo $form->textField($model,'cat_e_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_f_12'); ?>
		<?php echo $form->textField($model,'cat_f_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_g_12'); ?>
		<?php echo $form->textField($model,'cat_g_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_h_12'); ?>
		<?php echo $form->textField($model,'cat_h_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_setup_us'); ?>
		<?php echo $form->textField($model,'reg_setup_us'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_renewal_us'); ?>
		<?php echo $form->textField($model,'reg_renewal_us'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_setup_world'); ?>
		<?php echo $form->textField($model,'reg_setup_world'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_renewal_world'); ?>
		<?php echo $form->textField($model,'reg_renewal_world'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_depositexp_now'); ?>
		<?php echo $form->textField($model,'reg_depositexp_now'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_depositexp_week'); ?>
		<?php echo $form->textField($model,'reg_depositexp_week'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_depositexp_month'); ?>
		<?php echo $form->textField($model,'reg_depositexp_month'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_depositexp_bimonth'); ?>
		<?php echo $form->textField($model,'reg_depositexp_bimonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_depositair_week'); ?>
		<?php echo $form->textField($model,'reg_depositair_week'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_depositair_month'); ?>
		<?php echo $form->textField($model,'reg_depositair_month'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_depositair_bimonth'); ?>
		<?php echo $form->textField($model,'reg_depositair_bimonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taxtps'); ?>
		<?php echo $form->textField($model,'taxtps'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taxtvq'); ?>
		<?php echo $form->textField($model,'taxtvq'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taxtvh'); ?>
		<?php echo $form->textField($model,'taxtvh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_i_6'); ?>
		<?php echo $form->textField($model,'cat_i_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_i_12'); ?>
		<?php echo $form->textField($model,'cat_i_12'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->