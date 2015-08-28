<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Create Customer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('customer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Customer List <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/admin">[back]</a></h1>

<br />

<form method="get" action="<?php echo Yii::app()->request->baseUrl; ?>/customer/admin">
<strong>Global Search: </strong>
<input size="40" maxlength="20" name="Customer[metasearch]" id="Customer_metasearch" type="text" value="">
<input type="submit">

</form>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customer-grid',
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
			'name'=>'bilstatus',
			'htmlOptions'=>array('style'=>'width:50px;'),
		),		
		array(
			'name'=>'bilkey',
			'htmlOptions'=>array('style'=>'width:50px;'),
		),
		'bilnom',
		'bilprenom',
		'bilcompany',
		array(
//			'name'=>'biladdress1',
			'header'=>'Mailing City',
			'value'=>'$data->getMailingCities($data->bilkey)',
			'htmlOptions'=>array('style'=>'width:180px;'),
			'type'=>'raw',			
		),
		array(
		    
			'header'=>'Ending Date',
			'value'=>'$data->getServiceEndingDates($data->bilkey)',
//			'value'=>'$data->services[0]',
			'type'=>'raw',			
			'htmlOptions'=>array('style'=>'width:80px;'),		
		),
		array(
			'name'=>'bilbalance',
			'value'=>'"$".number_format($data->bilbalance,2)',
			'type'=>'raw',			
			'htmlOptions'=>array('style'=>'width:30px; text-align:right;'),		
		),		
		/*
		'bilcity',		
		'billogin',
		'bilpass',
		'bilbuztype',
		'biladdress1',
		'biladdress2',
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
		*/
		array(
			'label'=>'XX',
			'class'=>'CLinkColumn',
			'urlExpression'=>'Yii::app()->createUrl("customer/delete",array("id"=>$data->bilkey))',
			'htmlOptions'=>array('style'=>'width:10px; text-align:center;', 'class'=>'delete'),		
		),			
	),
)); ?>
