<?php
$this->breadcrumbs=array(
	'Tarifs'=>array('index'),
	$model->tarifkey=>array('view','id'=>$model->tarifkey),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tarif', 'url'=>array('index')),
	array('label'=>'Create Tarif', 'url'=>array('create')),
	array('label'=>'View Tarif', 'url'=>array('view', 'id'=>$model->tarifkey)),
	array('label'=>'Manage Tarif', 'url'=>array('admin')),
);
?>

<h1>Update Tarif <?php echo $model->tarifkey; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>