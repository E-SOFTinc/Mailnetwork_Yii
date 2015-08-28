<?php
$this->breadcrumbs=array(
	'Goodcities'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Goodcity', 'url'=>array('index')),
	array('label'=>'Create Goodcity', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('goodcity-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Address Database <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/admin">[back]</a></h1>

<br />

<form method="get" action="<?php echo Yii::app()->request->baseUrl; ?>/goodcity/admin">
<strong>Global Search: </strong>
<input size="40" maxlength="20" name="Goodcity[metasearch]" id="Goodcity_metasearch" type="text" value="">
<input type="submit">

<a href="<?php echo $this->createUrl('goodcity/create'); ?>" class="formslinks"><strong>[ Add a New Address ]</strong></a>
</form>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'goodcity-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'label'=>'View',
			'class'=>'CLinkColumn',
			'labelExpression'=>'$data->goodcitykey',
			'urlExpression'=>'Yii::app()->createUrl("goodcity/update",array("id"=>$data->goodcitykey))',
			'htmlOptions'=>array('style'=>'width:10px; text-align:center;'),
		),			
		'goodcitykey',
		'goodcountry',
		'goodstate',
		'goodcity',
		'goodname',
		'goodphone',
		'goodfax',
//		'goodcategory',
		array(
			'name'=>'goodcategory',
			'value'=>'$data->goodcategory',
			'type'=>'raw',			
			'htmlOptions'=>array('style'=>'width:10px;'),		
		),		
		
		
		/*
		'goodcenter',
		'goodaddress',
		'goodzip',
		'goodemail',
		'goodcitypic',
		'goodsix',
		'gooddouze',
		'goodnote',
		*/
		array(
			'label'=>'XX',
			'class'=>'CLinkColumn',
			'urlExpression'=>'Yii::app()->createUrl("goodcity/delete",array("id"=>$data->goodcitykey))',
			'htmlOptions'=>array('style'=>'width:10px; text-align:center;', 'class'=>'delete'),		
		),			
	),
)); ?>
