<?php
$this->breadcrumbs=array(
	'Goodcities'=>array('index'),
	$model->goodcitykey,
);

$this->menu=array(
	array('label'=>'List Goodcity', 'url'=>array('index')),
	array('label'=>'Create Goodcity', 'url'=>array('create')),
	array('label'=>'Update Goodcity', 'url'=>array('update', 'id'=>$model->goodcitykey)),
	array('label'=>'Delete Goodcity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->goodcitykey),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Goodcity', 'url'=>array('admin')),
);
?>

<h1>View Goodcity #<?php echo $model->goodcitykey; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'goodcitykey',
		'goodaddress',
		'goodcenter',
		'goodcity',
		'goodstate',
		'goodcountry',
		'goodzip',
		'goodcategory',
		'goodname',
		'goodphone',
		'goodfax',
		'goodemail',
		'goodcitypic',
		'goodsix',
		'gooddouze',
		'goodnote',
	),
)); ?>
