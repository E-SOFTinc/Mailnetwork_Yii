<?php
$this->breadcrumbs=array(
	'Testimonials'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Testimonial', 'url'=>array('index')),
	array('label'=>'Create Testimonial', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('testimonial-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Testimonials <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/admin">[back]</a></h1>
<a href="<?php echo $this->createUrl('testimonials/create'); ?>" class="formslinks"><strong>[ Add a New Testimonial ]</strong></a>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'testimonial-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'last_name',
		'content',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
