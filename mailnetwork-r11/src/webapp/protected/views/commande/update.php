<?php
$this->breadcrumbs=array(
	'Commandes'=>array('index'),
	$model->comkey=>array('view','id'=>$model->comkey),
	'Update',
);

$this->menu=array(
	array('label'=>'List Commande', 'url'=>array('index')),
	array('label'=>'Create Commande', 'url'=>array('create')),
	array('label'=>'View Commande', 'url'=>array('view', 'id'=>$model->comkey)),
	array('label'=>'Manage Commande', 'url'=>array('admin')),
);
?>

<h1>Update Commande <?php echo $model->comkey; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>