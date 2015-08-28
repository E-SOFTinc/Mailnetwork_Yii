<?php
$this->breadcrumbs=array(
	'Commandes',
);

$this->menu=array(
	array('label'=>'Create Commande', 'url'=>array('create')),
	array('label'=>'Manage Commande', 'url'=>array('admin')),
);
?>

<h1>Commandes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
