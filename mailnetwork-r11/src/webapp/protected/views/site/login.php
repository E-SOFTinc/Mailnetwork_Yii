<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>false,
)); ?>

 
	<div class="search_bot_sub">
	<div class="search_bot_sub_user">
	User Login
	</div>
	
	<div class="home_search">
		<?php echo $form->textField($model,'username', array('size'=>20,'class'=>'home_search')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	<div class="home_search">		
		<?php echo $form->passwordField($model,'password', array('size'=>27,'class'=>'home_search')); ?>
		<?php echo $form->error($model,'password'); ?>	
	</div>
	<input type="submit" name="search" value="" class="home_search_btn2" />
	<div class="search_bot_sub2">
	<a href="#">Forgot your User ID or Password</a>
	</div>
	</div>
	</div>
	</div>
	 
	
	<!-- 

	<div style="clear:both;"></div>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Hint: You may login with <tt>demo/demo</tt> or <tt>admin/admin</tt>.
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

 -->
<?php $this->endWidget(); ?>

