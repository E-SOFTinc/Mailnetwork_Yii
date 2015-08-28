<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('comkey')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->comkey), array('view', 'id'=>$data->comkey)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bilkey')); ?>:</b>
	<?php echo CHtml::encode($data->bilkey); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comstatus')); ?>:</b>
	<?php echo CHtml::encode($data->comstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comgoodcitykey')); ?>:</b>
	<?php echo CHtml::encode($data->comgoodcitykey); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comfrequency')); ?>:</b>
	<?php echo CHtml::encode($data->comfrequency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comsetup')); ?>:</b>
	<?php echo CHtml::encode($data->comsetup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comdeposit')); ?>:</b>
	<?php echo CHtml::encode($data->comdeposit); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('comperiod')); ?>:</b>
	<?php echo CHtml::encode($data->comperiod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comdebut')); ?>:</b>
	<?php echo CHtml::encode($data->comdebut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comfin')); ?>:</b>
	<?php echo CHtml::encode($data->comfin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comgroup')); ?>:</b>
	<?php echo CHtml::encode($data->comgroup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commfgp')); ?>:</b>
	<?php echo CHtml::encode($data->commfgp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comnodesuite')); ?>:</b>
	<?php echo CHtml::encode($data->comnodesuite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_first')); ?>:</b>
	<?php echo CHtml::encode($data->dest_first); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_last')); ?>:</b>
	<?php echo CHtml::encode($data->dest_last); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_company')); ?>:</b>
	<?php echo CHtml::encode($data->dest_company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_address1')); ?>:</b>
	<?php echo CHtml::encode($data->dest_address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_address2')); ?>:</b>
	<?php echo CHtml::encode($data->dest_address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_city')); ?>:</b>
	<?php echo CHtml::encode($data->dest_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_state')); ?>:</b>
	<?php echo CHtml::encode($data->dest_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_zip')); ?>:</b>
	<?php echo CHtml::encode($data->dest_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_country')); ?>:</b>
	<?php echo CHtml::encode($data->dest_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comnote')); ?>:</b>
	<?php echo CHtml::encode($data->comnote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_mailco')); ?>:</b>
	<?php echo CHtml::encode($data->dest_mailco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_mailname1')); ?>:</b>
	<?php echo CHtml::encode($data->dest_mailname1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idtype11')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idtype11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idnumber11')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idnumber11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idpicture11')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idpicture11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idtype12')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idtype12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idnumber12')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idnumber12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idpicture12')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idpicture12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idpsform1')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idpsform1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_mailname2')); ?>:</b>
	<?php echo CHtml::encode($data->dest_mailname2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idtype21')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idtype21); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idnumber21')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idnumber21); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idpicture21')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idpicture21); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idtype22')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idtype22); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idnumber22')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idnumber22); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idpicture22')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idpicture22); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idpsform2')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idpsform2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_mailname3')); ?>:</b>
	<?php echo CHtml::encode($data->dest_mailname3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idtype31')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idtype31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idnumber31')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idnumber31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idpicture31')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idpicture31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idtype32')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idtype32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idnumber32')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idnumber32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idpicture32')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idpicture32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dest_idpsform3')); ?>:</b>
	<?php echo CHtml::encode($data->dest_idpsform3); ?>
	<br />

	*/ ?>

</div>