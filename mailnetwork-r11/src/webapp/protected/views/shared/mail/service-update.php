<center>
	<h3 class="h3">International Mail Forwarding Network</h3>
	<strong>Account Modification</strong><br />
</center>
<strong><?php echo $customer->bilprenom . ' ' . $customer->bilnom ?></strong><br />	
<strong>Customer <a href="http://www.mailnetwork.com/customer/update/id/<?php echo $customer->bilkey ?>">#<?php echo $customer->bilkey ?></a></strong><br />
<br />
<?php if($type == 'customer'): ?>

<h3>Customer Information</h3>
<strong>Login: </strong><?php echo $model->billogin ?><br />
<strong>Password: </strong><?php echo $model->bilpass ?><br />
<strong>Company: </strong><?php echo $model->bilcompany ?><br />
<strong>Type of Business: </strong><?php echo $model->bilbuztype ?><br />
<strong>Phone 1: </strong><?php echo $model->bilphone1 ?><br />
<strong>Phone 2: </strong><?php echo $model->bilphone2 ?><br />
<strong>Phone 3: </strong><?php echo $model->bilphone3 ?><br />
<strong>Fax: </strong><?php echo $model->bilfax ?><br />
<strong>Email-1: </strong><?php echo $model->bilemail ?><br />
<strong>Email-2: </strong><?php echo $model->bilemail2 ?><br />
<strong>URL: </strong><?php echo $model->bilurl ?><br />

<?php elseif($type == 'commande'): ?>

<h3>Service Information</h3>
<strong>First Name: </strong><?php echo $model->dest_first ?><br />
<strong>Last Name: </strong><?php echo $model->dest_last ?><br />
<strong>Company Name: </strong><?php echo $model->dest_company ?><br />
<strong>Address 1: </strong><?php echo $model->dest_address1 ?><br />
<strong>Address 2: </strong><?php echo $model->dest_address2 ?><br />
<strong>City: </strong><?php echo $model->dest_city ?><br />
<strong>State: </strong><?php echo $model->dest_state ?><br />
<strong>Country: </strong><?php echo $model->dest_country ?><br />
<strong>Zip/Postal Code: </strong><?php echo $model->dest_zip ?><br />
<strong>Mail Forwarding Option: </strong><?php echo $model->comfrequency ?><br />


<?php endif; ?>