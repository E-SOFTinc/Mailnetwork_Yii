<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarifkey')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tarifkey), array('view', 'id'=>$data->tarifkey)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_ny_6_4')); ?>:</b>
	<?php echo CHtml::encode($data->group_ny_6_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_ny_6_50')); ?>:</b>
	<?php echo CHtml::encode($data->group_ny_6_50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_ny_6_100')); ?>:</b>
	<?php echo CHtml::encode($data->group_ny_6_100); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_ny_12_4')); ?>:</b>
	<?php echo CHtml::encode($data->group_ny_12_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_ny_12_50')); ?>:</b>
	<?php echo CHtml::encode($data->group_ny_12_50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_ny_12_100')); ?>:</b>
	<?php echo CHtml::encode($data->group_ny_12_100); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('group_laval_6_4')); ?>:</b>
	<?php echo CHtml::encode($data->group_laval_6_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_laval_6_50')); ?>:</b>
	<?php echo CHtml::encode($data->group_laval_6_50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_laval_6_100')); ?>:</b>
	<?php echo CHtml::encode($data->group_laval_6_100); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_laval_12_4')); ?>:</b>
	<?php echo CHtml::encode($data->group_laval_12_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_laval_12_50')); ?>:</b>
	<?php echo CHtml::encode($data->group_laval_12_50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_laval_12_100')); ?>:</b>
	<?php echo CHtml::encode($data->group_laval_12_100); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_setup')); ?>:</b>
	<?php echo CHtml::encode($data->group_setup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_renewal')); ?>:</b>
	<?php echo CHtml::encode($data->group_renewal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_a_6')); ?>:</b>
	<?php echo CHtml::encode($data->cat_a_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_b_6')); ?>:</b>
	<?php echo CHtml::encode($data->cat_b_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_c_6')); ?>:</b>
	<?php echo CHtml::encode($data->cat_c_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_d_6')); ?>:</b>
	<?php echo CHtml::encode($data->cat_d_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_e_6')); ?>:</b>
	<?php echo CHtml::encode($data->cat_e_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_f_6')); ?>:</b>
	<?php echo CHtml::encode($data->cat_f_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_g_6')); ?>:</b>
	<?php echo CHtml::encode($data->cat_g_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_h_6')); ?>:</b>
	<?php echo CHtml::encode($data->cat_h_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_a_12')); ?>:</b>
	<?php echo CHtml::encode($data->cat_a_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_b_12')); ?>:</b>
	<?php echo CHtml::encode($data->cat_b_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_c_12')); ?>:</b>
	<?php echo CHtml::encode($data->cat_c_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_d_12')); ?>:</b>
	<?php echo CHtml::encode($data->cat_d_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_e_12')); ?>:</b>
	<?php echo CHtml::encode($data->cat_e_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_f_12')); ?>:</b>
	<?php echo CHtml::encode($data->cat_f_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_g_12')); ?>:</b>
	<?php echo CHtml::encode($data->cat_g_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_h_12')); ?>:</b>
	<?php echo CHtml::encode($data->cat_h_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_setup_us')); ?>:</b>
	<?php echo CHtml::encode($data->reg_setup_us); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_renewal_us')); ?>:</b>
	<?php echo CHtml::encode($data->reg_renewal_us); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_setup_world')); ?>:</b>
	<?php echo CHtml::encode($data->reg_setup_world); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_renewal_world')); ?>:</b>
	<?php echo CHtml::encode($data->reg_renewal_world); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_depositexp_now')); ?>:</b>
	<?php echo CHtml::encode($data->reg_depositexp_now); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_depositexp_week')); ?>:</b>
	<?php echo CHtml::encode($data->reg_depositexp_week); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_depositexp_month')); ?>:</b>
	<?php echo CHtml::encode($data->reg_depositexp_month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_depositexp_bimonth')); ?>:</b>
	<?php echo CHtml::encode($data->reg_depositexp_bimonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_depositair_week')); ?>:</b>
	<?php echo CHtml::encode($data->reg_depositair_week); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_depositair_month')); ?>:</b>
	<?php echo CHtml::encode($data->reg_depositair_month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_depositair_bimonth')); ?>:</b>
	<?php echo CHtml::encode($data->reg_depositair_bimonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxtps')); ?>:</b>
	<?php echo CHtml::encode($data->taxtps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxtvq')); ?>:</b>
	<?php echo CHtml::encode($data->taxtvq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxtvh')); ?>:</b>
	<?php echo CHtml::encode($data->taxtvh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_i_6')); ?>:</b>
	<?php echo CHtml::encode($data->cat_i_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_i_12')); ?>:</b>
	<?php echo CHtml::encode($data->cat_i_12); ?>
	<br />

	*/ ?>

</div>