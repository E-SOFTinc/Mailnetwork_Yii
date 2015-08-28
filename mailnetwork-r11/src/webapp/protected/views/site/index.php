    <?php  
        $title = "International Mail Forwarding, USA Mailing Address, USA Mailbox Rentals Canada";
        $meta_keywords = "international mail forwarding network, us mailing address, us mailbox, canada mailbox, mail forwarding, mail box, us street address, USPS, virtual office, virtual address, postal mailbox, forwarding service, us mail forwarding";
        $meta_description = "Mailnetwork.com offers mailing address rental in USA & Canada and mail forwarding services around the world. Our services are available on a reasonable and cost-effective basis.";
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?> - Mailnetwork.com</title>
<meta name="description" content="<?php echo $meta_description; ?>" />
<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" />
<link rel="SHORTCUT ICON" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.2.6.min.js"></script>

</head>

<body>
	<div id="main_wrapper">
	  <div class="main_wrapper_sub">
	    <div class="main_wrapper_sub_main">                
	      <div id="home_left_band">
	        <table width="100%" height="33px" border="0" cellspacing="0" cellpadding="0">
	          <tr>
	            <td width="409" height="26px" align="right" valign="top" style="background:url(/images/smallred_bg.png) repeat-x;"><div class="home_left_band_hed"> Over 300 Locations Available Worldwide </div></td>
	            <td width="12" valign="top"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/arrow_main2.png" width="10" height="26" /></td>
	          </tr>
	        </table>
	      </div>
	      <!--RIGHT BAR-->
	      <div id="home_band">
	        <table width="100%" border="0" cellspacing="0" cellpadding="0">
	          <tr>
	            <td width="15" align="right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bigred_arrow.png" width="25" height="51" align="right" /></td>
	            <td width="556" align="left" valign="top" style="background:url(/images/bigred_bg.png) repeat-x;"><span class="home_band_bg_hed">Get a Mailing Address in</span> <span class="home_band_bg_hed2"><span id="cityname">New York, NY</span></span></td>
	          </tr>
	        </table>
	      </div>
	      <!--RIGHT BAR END-->
	      <div id="wrapper">
	        <div id="top">
	          <div class="header">
				<?php $this->render('//shared/_nav'); ?>
	          </div>
	        </div>
	        <!--Banner starts -->
	        <div id="banner">
	          <div id="hom_ban">
	            <div class="banner_sub">
	            <div id="logo">
					<div class="logo_bg">
						<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width="382" height="55" align="Mail network.com" title="Mail network.com"></a>
					</div>
					<div class="subtitle">
						Mailing Address Rental Worldwide <span class="subtitle_txt">&amp;</span> Mail Forwarding Services <span class="subtitle_txt1">since 1996</span>
					</div>
				</div>

	              <!-- <div id="logo"> <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width="382" height="77" align="Mail network.com" title="Mail network.com" /></a> </div> -->
	              <div id="banner_gallery">
	                <div id="slideshow">
	                  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" alt="1" width="438" height="238" border="0" class="active" cityname="New York, NY"></a>
	                  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg" alt="2" width="438" height="238" border="0" cityname="Los Angeles, LA"></a>
	                  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/3.jpg" alt="3" width="438" height="238" border="0" cityname="Chicago, IL"></a>
	                  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/4.jpg" alt="4" width="438" height="238" border="0" cityname="Houston, TX"></a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div id="home_news">
	            <div class="home_news_hed"> News </div>
	            <div class="home_news_sub_txt"> <?php echo $frontpage ?> </div>
	            <div class="home_band_sub">
	              <div class="home_band_sub_bg1" style="height:43px">
                    <span id="siteseal"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=jpxNdlk7D09lH3XWqhDBHGCKnbm5EK1TEKM6WYSQTRjSmpsl5f6xi82"></script><br/></span>
                  </div>
	            </div>
	          </div>
	        </div>
	        <!--Bottom starts -->
	        <div id="bot">
	          <div class="bot_main">
	            <h2>Rent a Mailbox (Real Street Address) from the Leader in Mail Forwarding Services</h2>                   
	            <form method="post" action="#">
	            <div class="bot_main_searchbg">
	              <div class="home_search">
	                <input type="text" name="location_search" value="Enter City, State or Country" class="home_search_txt" onfocus="if(this.value=='Enter City, State or Country')this.value='';" onblur="if(this.value=='')this.value='Enter City, State or Country';" />
	              </div>
	              <input type="submit" name="search" value="Search" class="home_search_btn" />
	            </div>
	            </form> 
                    <?php if(!empty($_GET['city'])) { ?>
                    <div style=" position: absolute;
                    width: 100%;
                    height:100%;
                    top: 0;
                    left: 0;
                    background: #000;
                    z-index:999;
                    opacity: 0.5;
                    filter: alpha(opacity = 50);">
                    </div>
                    <div id="invalidCity"  style="position:absolute;
                        width:700px;
                        height:150px;
                        margin:60px auto auto -360px;                        
                        left:50%;
                        background-color: grey; z-index: 1000; border:2px solid black;">
                        <h2 style="margin-left:85px;margin-top:45px;"> There is no mailbox available at <strong style="color:#000000;"><?php echo $_GET['city'] ?></strong> at this moment.</br> Please contact 1-888-248-6245 for support.</h2>
                        <p align="right" style="position:absolute; right:0; top:0; margin-right:5px; font-size:15px; cursor:pointer;"><strong>X</strong></p>
                        <p style="position:absolute; right:0; bottom:0; margin-right:15px; margin-bottom:10px; font-size:18px; cursor:pointer;"><strong>Close</strong></p>
                    </div>                  
                    <?php } ?>                    
	            <div class="bot_main_sub">
	              <ul>

	<?php

	$this->widget('zii.widgets.CListView', array(
		'itemView'=>'_cityitem',
		'dataProvider'=>$dataProvider,
		'summaryText'=>'',
		'emptyText'=>'This location is not available at this time.  If you would like a mailing address at this location, please email us at <a href="mailto:info@mailnetwork.com">info@mailnetwork.com</a>'));

	?>

	              </ul>
	            </div>

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableAjaxValidation'=>false,
	));
	?>

	            <div class="search_bot_sub">
	              <div class="search_bot_sub_user"> User Login </div>

				<div class="home_search">
					<?php echo $form->textField($model,'username', array('size'=>20,'class'=>'home_search')); ?>
				</div>
				<div class="home_search">
					<?php echo $form->passwordField($model,'password', array('size'=>27,'class'=>'home_search')); ?>
				</div>

	              <input type="submit" name="search" value="" class="home_search_btn2" />
	              <div class="search_bot_sub2"> <a href="<?php echo $this->createUrl('user/forgot'); ?>">Forgot your User ID or Password</a> </div>
	            </div>

			<?php if ($form->error($model, 'username') || $form->error($model, 'password')): ?>
			<div class="search_bot_sub" style="color:red; text-align:center;">
				<strong>Incorrect username or password.</strong>
			</div>
			<?php endif; ?>


	          </div>

	<?php $this->endWidget(); ?>

	          <div id="footer_part">
	            <div class="footer_part_main"> Toll Free Number in the US & Canada: 1 888 248-6245 • Direct Call: 1 514 824-7678 • <a href="mailto:info@mailnetwork.com">info@mailnetwork.com</a><br>
	              © International Mail Forwarding Network 1996-<?php echo date("Y"); ?> • All rights reserved. </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	

	<script src="ga.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
<script src="ga.js" type="text/javascript"></script>
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('8428-733-10-7409');/*]]>*/</script><noscript><a href="https://www.olark.com/site/8428-733-10-7409/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
<script>    
    <?php if (!empty($_GET['city'])){ ?>
    $(document).click(function(e){
        window.location = "/";                 
    });
    <?php } ?>
</script>
</body>
</html>

