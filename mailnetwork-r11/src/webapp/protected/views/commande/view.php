<?php
$this->breadcrumbs=array(
	'Commandes'=>array('index'),
	$model->comkey,
);

$this->menu=array(
	array('label'=>'List Commande', 'url'=>array('index')),
	array('label'=>'Create Commande', 'url'=>array('create')),
	array('label'=>'Update Commande', 'url'=>array('update', 'id'=>$model->comkey)),
	array('label'=>'Delete Commande', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->comkey),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Commande', 'url'=>array('admin')),
);
?>

<h1>View Commande #<?php echo $model->comkey; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'comkey',
		'bilkey',
		'comstatus',
		'comgoodcitykey',
		'comfrequency',
		'comsetup',
		'comdeposit',
		'comperiod',
		'comdebut',
		'comfin',
		'comgroup',
		'commfgp',
		'comnodesuite',
		'dest_first',
		'dest_last',
		'dest_company',
		'dest_address1',
		'dest_address2',
		'dest_city',
		'dest_state',
		'dest_zip',
		'dest_country',
		'comnote',
		'dest_mailco',
		'dest_mailname1',
		'dest_idtype11',
		'dest_idnumber11',
		'dest_idpicture11',
		'dest_idtype12',
		'dest_idnumber12',
		'dest_idpicture12',
		'dest_idpsform1',
		'dest_mailname2',
		'dest_idtype21',
		'dest_idnumber21',
		'dest_idpicture21',
		'dest_idtype22',
		'dest_idnumber22',
		'dest_idpicture22',
		'dest_idpsform2',
		'dest_mailname3',
		'dest_idtype31',
		'dest_idnumber31',
		'dest_idpicture31',
		'dest_idtype32',
		'dest_idnumber32',
		'dest_idpicture32',
		'dest_idpsform3',
	),
)); ?>
