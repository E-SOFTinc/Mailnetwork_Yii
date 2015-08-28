<?php
$this->breadcrumbs=array(
	'Tarifs',
);

$this->menu=array(
	array('label'=>'Create Tarif', 'url'=>array('create')),
	array('label'=>'Manage Tarif', 'url'=>array('admin')),
);
?>

<h1>Tarifs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
