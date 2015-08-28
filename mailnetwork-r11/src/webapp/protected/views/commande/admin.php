<?php
$this->breadcrumbs=array(
	'Commandes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Commande', 'url'=>array('index')),
	array('label'=>'Create Commande', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('commande-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Customer Billing Manager <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/admin">[back]</a></h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'commande-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'label'=>'View',
			'class'=>'CLinkColumn',
			'labelExpression'=>'$data->bilkey',
			'urlExpression'=>'Yii::app()->createUrl("customer/update",array("id"=>$data->bilkey))',
			'htmlOptions'=>array('style'=>'width:10px; text-align:center;'),
		),			

		array(
			'name'=>'customer.bilstatus',
			'htmlOptions'=>array('style'=>'width:50px;'),
		),		
		array(
			'name'=>'customer.bilkey',
			'htmlOptions'=>array('style'=>'width:50px;'),
		),
		'customer.bilnom',
		'customer.bilprenom',
		'customer.bilcompany',

		array(
			'name'=>'box2',
			'header'=>'Mailing City',
			'value'=>'$data->getMailingAddress($data)',
//            'value'=>'$data->box->goodcity',
			'htmlOptions'=>array('style'=>'width:180px;'),
			'type'=>'raw',			
		),

		array(
			'name'=>'comfin',
			'header'=>'Ending Data',
			'value'=>'$data->comfin',
			'htmlOptions'=>array('style'=>'width:80px;'),
			'type'=>'raw',			
		),
		
		

		array(
			'name'=>'customer.bilbalance',
			'value'=>'"$".number_format($data->getBalance($data),2)',
			'type'=>'raw',			
			'htmlOptions'=>array('style'=>'width:30px; text-align:right;'),		
		),		
		
		
//		array(
//			'name'=>'customer.biladdress1',
//			'header'=>'Mailing City',
//			'value'=>'$data->getMailingCities($data->bilkey)',
//			'htmlOptions'=>array('style'=>'width:180px;'),
//			'type'=>'raw',			
//		),
//		array(
//		    
//			'header'=>'Ending Date',
//			'value'=>'$data->getServiceEndingDates($data->bilkey)',
//			'type'=>'raw',			
//			'htmlOptions'=>array('style'=>'width:80px;'),		
//		),
//		array(
//			'name'=>'customer.bilbalance',
//			'value'=>'"$".number_format($data->bilbalance,2)',
//			'type'=>'raw',			
//			'htmlOptions'=>array('style'=>'width:30px; text-align:right;'),		
//		),				
		
		/*
		'bilkey',

		'comkey',
		'comstatus',
		'comgoodcitykey',
		'comfrequency',
		'comsetup',
		'customer.bilnom',
		'customer.bilprenom',
		'comfin',
		
		'comdeposit',
		'comperiod',
		'comdebut',		
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
		*/
		array(
			'label'=>'XX',
			'class'=>'CLinkColumn',
			'urlExpression'=>'Yii::app()->createUrl("customer/delete",array("id"=>$data->bilkey))',
			'htmlOptions'=>array('style'=>'width:10px; text-align:center;', 'class'=>'delete'),		
		),			
		
	),
)); ?>
