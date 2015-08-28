<?php $column_height = 12; ?>

<?php if(isset($data->goodorder)): ?>
<?php if((($data->goodorder - 1) % $column_height) == 0): ?>
    <ul style="float:left; width:130px; padding:0">
<?php endif; ?>
<?php endif; ?>

<?php if($widget->dataProvider->itemCount == 1): ?>
<li class="single">
<?php else: ?>
<li style="float:left">
<?php endif; ?>

<?php $goodcity = strtolower(str_replace(' ','_',$data->goodcity)); ?>
<a href="<?php echo $this->createUrl("city/$goodcity"); ?>">
<?php

// For cities in the US, pair with state.
//   Otherwise, pair with country.
if ($data->goodcountry == "USA") {
	echo trim($data->goodcity) . ', ' . trim($data->goodstate);
}
else {
	// Special case for Singapore, as per pdf specs...
	if ($data->goodcity == "Singapore")
		echo trim($data->goodcity);
	else
		echo trim($data->goodcity) . ', ' . trim($data->goodcountry);
}

?>
</a>
</li>

<?php if(isset($data->goodorder)): ?>
<?php if(($data->goodorder % $column_height) == 0): ?>
</ul>
<div style="clear:right"></div>
<?php endif; ?>
<?php endif; ?>
