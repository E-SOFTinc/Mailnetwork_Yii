<?php
$this->breadcrumbs=array(
	'Shipments'=>array('index'),
	$model->shipkey,
);

$this->menu=array(
	array('label'=>'List Shipment', 'url'=>array('index')),
	array('label'=>'Create Shipment', 'url'=>array('create')),
	array('label'=>'Update Shipment', 'url'=>array('update', 'id'=>$model->shipkey)),
	array('label'=>'Delete Shipment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->shipkey),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Shipment', 'url'=>array('admin')),
);
?>

<h1>View Shipment #<?php echo $model->shipkey; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'shipkey',
		'comkey',
		'bilkey',
		'shipdate',
		'shipdetail',
		'shipdebit',
		'shipcredit',
	),
)); ?>
