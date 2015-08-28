<?php
   		$title = "International Mail Forwarding Network";
   		$meta_keywords = "mail forwarding, mailbox, mail, mail box, USA, mailing address, FedEx, forwarding, privacy, postal, USPS, security, confidentiality, couriers, express service, street address, Canada, business, voice mail, rental, mailing, world";
   		$meta_description = "Mailing address rental in USA & Canada and mail forwarding services around the world.";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Get A Mailbox In <?php echo $model[0]->goodcity ?> - Mailnetwork.com</title>
<meta name="description" content="<?php echo $meta_description; ?>" />
<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" />
<link rel="SHORTCUT ICON" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
</head>
<body>

<div id="main_wrapper">
<?php if(($model[0]->goodstate != "") && $model[0]->goodcountry == "USA"): ?>
<?php $location = $model[0]->goodcity . ', ' . $model[0]->goodstate; ?>
<?php else: ?>
<?php $location = $model[0]->goodcity . ', ' . $model[0]->goodcountry; ?>
<?php endif; ?>
  <div class="main_wrapper_sub">
    <div class="main_wrapper_sub_main">
      <div id="inner_hed_band_mailforward">
        <table width="100%" height="34px" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="209" height="34px" align="right" valign="top" style="background:url(<?php echo Yii::app()->request->baseUrl; ?>/images/inner_left_redbg.png) repeat-x;"><div class="inner_hed_band_txt"> <?php echo $location; ?> </div></td>
            <td width="19" height="34px" valign="top"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/inner_left_redarrowbg.png" width="19" height="34" /></td>
          </tr>
        </table>
      </div>
      <div id="wrapper">
		<div id="top">
			<div class="header">
    			<?php $this->render('//shared/_nav'); ?>
			</div>
		</div>
        <!--Banner starts -->
        <div class="innerpage_bg">
          <div id="innnerpage_main">
            <div class="citypage_top_bg">
              <div class="citypage_top_bg_lft">
                <a href="<?php echo Yii::app()->homeUrl; ?>"><div class="innerpage_hed"></div></a>
                <div class="citypage_hed2"> Mailing Address Rental Worldwide <span class="innerpage_hed2_s">&amp;</span> Mail Forwarding Services <span class="innerpage_hed2_sm">since 1996</span> </div>
                <div class="citypage_sub1">
                  <div class="innerpage_txt"> Benefit from a Mailing Address - Mailbox: A real street address (not simply a P.O. Box) with a mail forwarding services: </div>
                </div>

<form action="" method="post">
<?php $count = 0; ?>
<?php foreach($model as $c): ?>
<div class="citypage_sub2">
<div class="citypage_bg_lft">
<span class="citypages_txt2">
YOUR NAME OR BUSINESS NAME
</span><br />
<b><?php echo $c->goodaddress; ?></b> (your box number)<br />
<b><?php echo $c->goodcity.', '.$c->goodstate.' '.$c->goodzip; ?></b><br />
<b><?php echo $c->goodcountry ?></b><br /><br />
<b>Select this location: </b><input type="radio" name="city_selection" value="<?php echo $c['goodcitykey']; ?>" <?php if($count == 0): ?>checked<?php endif; ?> />
</div>
<div class="citypage_bg_rgt">
Rates (by period rental)
<br />
<?php
	// We have to read the rates all hacky-like
	$cat6 = 'cat_'.strtolower($c['goodcategory']).'_6';
	$cat12 = 'cat_'.strtolower($c['goodcategory']).'_12';

	$sql = "SELECT $cat6, $cat12 FROM tarif";
	$connection = Yii::app()->db->createCommand($sql);
	$rates = $connection->queryAll();
	$rates = $rates[0];
?>

6 months: <b>$<?php echo $rates[$cat6]; ?></b><br />
12 months: <b>$<?php echo $rates[$cat12]; ?></b><br />

</div>
</div>
<?php $count++; ?>
<?php endforeach; ?>


              </div>
              <div class="citypage_top_bg_rgt">
                <div id="citypage_gall">
                  <div id="">
                  <?php if($c->goodcitypic != null): ?>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/city/<?php echo $c->goodcitypic ?>" alt="1" width="340" height="238" border="0">
                  <?php else: ?>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/city/new_york.jpg" alt="1" width="340" height="238" border="0">
                  <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="citypage_bot_bg">
              <div class="innerpage_2txt"> Receive letters and parcels from national postal services and courier companies such as FedEx, U.P.S. and D.H.L.<br />
                You will be able to receive mail under 3 different names, including personal or business name.<br />
                Have your mail forwarded (letters & parcels up to 99 pounds) by <b>FedEx</b> or <b>Air Mail</b> anywhere in the world,<br />
                according to the frequency you choose.<br />
                Remailing Service available from this location.<br />
                Use our online <b>CUSTOMER INFO CENTER</b> to get up-to-date mail forwarding status from your mailing address.<br />
                Our total <b>Security &amp; Confidentiality</b> guarantee ensure your peace of mind.<br />
                Get your mailing address within one working day!<br />
                Allocation of an account manager to answer any request within a minimum delay. </div>
              <input type="submit" class="citypage_bg_bot" value="Set-up a Mailing Address in <?php echo $location; ?>" />
            </div>
          </div>
        </div>
		</form>
        <div class="citypage_partsec">
          <form action="" method="post">
          <input type="hidden" name="one_time" value="one_time" />
          <div class="citypage_bot_bg">
            <div class="innerpage_2txt"> One-time use service (to receive one shipment) - available from: <br />
            <table style="width:500px; padding-left:30px">
            <tr>
            	<td style="width:30px"><input type="radio" name="city_selection" value="584" checked /></td>
            	<td><strong>
            		511 Sixth Avenue, # (your box number) <br />
            		New York, NY 10011<br />
            		USA
            		</strong>
            	</td>
            </tr>
            <tr>
            	<td style="width:30px"><input type="radio" name="city_selection" value="339" /></td>
            	<td><strong>
            		3000 boul des Laurentides, Suite 12 - (your box number) <br />
            		Laval (Montreal area), QC H7K 3G5<br />
            		Canada
            		</strong>
            	</td>
            </tr>
            </table>

              (Rate: $50 + Shipping by <b>Air Mail</b> or <b>FedEx</b>). </div>
            <input type="submit" class="citypage_bg_bot2" value="Set-up One-time use service" />
          </div>
          </form>

        </div>
        <!--Bottom starts -->
        <div id="footer_part">
          <div class="footer_part_main"> Toll Free Number in the US & Canada: 1 888 248-6245 • Direct Call: 1 514 824-7678 • <a href="mailto:info@mailnetwork.com">info@mailnetwork.com</a><br />
            © International Mail Forwarding Network 1996-<?php echo date('Y'); ?> • All rights reserved. </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="ga.js" type="text/javascript"></script>
</body>
</html>
