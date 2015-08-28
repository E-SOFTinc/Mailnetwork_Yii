<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->bilkey,
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'Update Customer', 'url'=>array('update', 'id'=>$model->bilkey)),
	array('label'=>'Delete Customer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bilkey),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
);
?>

<h1>View Customer #<?php echo $model->bilkey; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bilkey',
		'bilstatus',
		'billogin',
		'bilpass',
		'bilbuztype',
		'bilnom',
		'bilprenom',
		'bilcompany',
		'biladdress1',
		'biladdress2',
		'bilcity',
		'bilstate',
		'bilzip',
		'bilcountry',
		'bilphone1',
		'bilphone2',
		'bilphone3',
		'bilphone1opt',
		'bilphone2opt',
		'bilphone3opt',
		'bilfax',
		'bilemail',
		'bilemail2',
		'bilurl',
		'biloldid',
		'bilhow',
		'bilnote',
		'bilbalance',
	),
)); ?>
