<?php
$this->breadcrumbs=array(
	'Commandes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Commande', 'url'=>array('index')),
	array('label'=>'Manage Commande', 'url'=>array('admin')),
);
?>

<h1>Create Commande</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>