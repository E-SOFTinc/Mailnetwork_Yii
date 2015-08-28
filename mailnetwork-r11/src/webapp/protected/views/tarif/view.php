<?php
$this->breadcrumbs=array(
	'Tarifs'=>array('index'),
	$model->tarifkey,
);

$this->menu=array(
	array('label'=>'List Tarif', 'url'=>array('index')),
	array('label'=>'Create Tarif', 'url'=>array('create')),
	array('label'=>'Update Tarif', 'url'=>array('update', 'id'=>$model->tarifkey)),
	array('label'=>'Delete Tarif', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tarifkey),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tarif', 'url'=>array('admin')),
);
?>

<h1>View Tarif #<?php echo $model->tarifkey; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tarifkey',
		'group_ny_6_4',
		'group_ny_6_50',
		'group_ny_6_100',
		'group_ny_12_4',
		'group_ny_12_50',
		'group_ny_12_100',
		'group_laval_6_4',
		'group_laval_6_50',
		'group_laval_6_100',
		'group_laval_12_4',
		'group_laval_12_50',
		'group_laval_12_100',
		'group_setup',
		'group_renewal',
		'cat_a_6',
		'cat_b_6',
		'cat_c_6',
		'cat_d_6',
		'cat_e_6',
		'cat_f_6',
		'cat_g_6',
		'cat_h_6',
		'cat_a_12',
		'cat_b_12',
		'cat_c_12',
		'cat_d_12',
		'cat_e_12',
		'cat_f_12',
		'cat_g_12',
		'cat_h_12',
		'reg_setup_us',
		'reg_renewal_us',
		'reg_setup_world',
		'reg_renewal_world',
		'reg_depositexp_now',
		'reg_depositexp_week',
		'reg_depositexp_month',
		'reg_depositexp_bimonth',
		'reg_depositair_week',
		'reg_depositair_month',
		'reg_depositair_bimonth',
		'taxtps',
		'taxtvq',
		'taxtvh',
		'cat_i_6',
		'cat_i_12',
	),
)); ?>
