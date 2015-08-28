<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipkey')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->shipkey), array('view', 'id'=>$data->shipkey)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comkey')); ?>:</b>
	<?php echo CHtml::encode($data->comkey); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bilkey')); ?>:</b>
	<?php echo CHtml::encode($data->bilkey); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipdate')); ?>:</b>
	<?php echo CHtml::encode($data->shipdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipdetail')); ?>:</b>
	<?php echo CHtml::encode($data->shipdetail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipdebit')); ?>:</b>
	<?php echo CHtml::encode($data->shipdebit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipcredit')); ?>:</b>
	<?php echo CHtml::encode($data->shipcredit); ?>
	<br />


</div>