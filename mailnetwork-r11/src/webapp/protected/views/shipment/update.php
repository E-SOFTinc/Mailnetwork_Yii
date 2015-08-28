<?php
$this->breadcrumbs=array(
	'Shipments'=>array('index'),
	$model->shipkey=>array('view','id'=>$model->shipkey),
	'Update',
);

$this->menu=array(
	array('label'=>'List Shipment', 'url'=>array('index')),
	array('label'=>'Create Shipment', 'url'=>array('create')),
	array('label'=>'View Shipment', 'url'=>array('view', 'id'=>$model->shipkey)),
	array('label'=>'Manage Shipment', 'url'=>array('admin')),
);
?>

<h1>Update Shipment <?php echo $model->shipkey; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>