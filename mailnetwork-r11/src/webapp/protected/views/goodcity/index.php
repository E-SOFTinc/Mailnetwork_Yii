<?php
$this->breadcrumbs=array(
	'Goodcities',
);

$this->menu=array(
	array('label'=>'Create Goodcity', 'url'=>array('create')),
	array('label'=>'Manage Goodcity', 'url'=>array('admin')),
);
?>

<h1>Goodcities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
