	<?php if(isset($pageTitle)): ?>
    <?php
    // This is hacky, but it needed to be done...
    switch ($pageTitle) {
    	case 'about-us':
    		$title = "Mail Forwarding Services - Postal Mailbox - Virtual Address - US Mailing Address";
    		$shorttitle = "About Us"; $width = 170;
    		$meta_keywords = "mail forwarding services, postal mailbox, virtual address, us mailing address, virtual mailing address, virtual office, mail forwarding usps, international mail forwarding, mailing address rental, postal mail forwarding";
    		$meta_description = "Mailnetwork.com is operated by International Mail Forwarding Network, company was established in 1996. Its mission is to rent mailing addresses in more than 30 countries, including the USA and Canada, allowing them to choose from over 300 locations.";
    		break;
    	case 'rates':
    	    $title = "US Mail Forwarding - International Mail Forwarding - Canada Mailbox - Virtual Office";
    		$shorttitle = "Rates"; $width = 140;
    		$meta_keywords = "us mail forwarding, international mail forwarding, Canada mailbox, virtual office, us mailbox, mail forwarding postal service, usa mail forwarding service, street address in us, temporary mail address, virtual mailing address";
    		$meta_description = "The cost for renting a mailing address differs from one city to the next, depending on the size of the city and the country.";
    		break;
    	case 'mail-forwarding':
    	    $title = "Mail Forwarding Service - Postal Mail Forwarding - US Mail Forwarding - International Mail Forwarding";
    		$shorttitle = "Mail Forwarding"; $width = 220;
    		$meta_keywords = "mail forwarding service, postal mail forwarding, us mail forwarding, international mail forwarding, mail forwarding postal service, mail forwarding service usps, virtual business address, email forwarding services, mail forwarding services Florida, Canada mailbox";
    		$meta_description = "Mailnetwork.com is committed to provide excellence in mail forwarding services. We can redirect your mail anywhere in the world, according to the frequency you choose upon receipt, weekly, bi-monthly or monthly.";
    		break;
    	case 'privacy':
    	    $title = "Privacy Policy - Mail Forwarding Services - Mailing Address Rental Worldwide";
    		$shorttitle = "Security & Privacy"; $width = 235;
    		$meta_keywords = "privacy policy, mail forwarding services, mailing address rental worldwide, us mailing address, us mailbox, Canada mailbox, us street address, temporary mail address, email forwarding services";
    		$meta_description = "The confidentiality of mail processing is our major concern. Your privacy is protected and enforced under strict mail privacy laws. All our Affiliated Centers are specialists in the rental of private mailboxes, packaging and shipping services. As well, each center adheres to the highest standards of confidentiality and security.";
    		break;
    	case 'join-mailnetwork':
    	    $title = "International Mail Forwarding Network - Mail Forwarding Services - Join Mailnetwork.com";
    		$shorttitle = "Authorized Agents Wanted"; $width = 310;
    		$meta_keywords = "join mailnetwork.com, mail forwarding services, international mail forwarding network, mailing address rental worldwide, agents";
    		$meta_description = "International Mail Forwarding Network is a company specializing in the reception and forwarding of mail by messenger throughout the world.";
       		break;
    	case 'testimonials':
    		$title = "Testimonials - Mail Fowarding Services - Postal Mailbox - Virtual Address";
    		$shorttitle = "Testimonials"; $width = 190;
    		$meta_keywords = "testimonials, mail forwarding services, postal mailbox, virtual address, usa mail drop, street address in us, mailing address rental, forwarding your mail, virtual mail address, virtual email address, virtual business address";
    		$meta_description = "Mailnetwork.com Testimonials";
    		break;
    	case 'faq':
    		$title = "Frequently Asked Questions - Canada Mailbox - Mail Forwarding Services";
    		$shorttitle = "FAQ"; $width = 130;
    		$meta_keywords = "faqs, us mailbox, mail forwarding services, canada mailbox, frequently asked question";
    		$meta_description = "Mailnetwork.com FAQs";
    		break;
    	case 'terms':
    		$title = "Terms and Conditions - Mailnetwork.com";
    		$shorttitle = "Terms"; $width = 140;
    		$meta_keywords = "mail forwarding, mailbox, mail, mail box, USA, mailing address, FedEx, forwarding, privacy, postal, USPS, security, confidentiality, couriers, express service, street address, Canada, business, voice mail, rental, mailing, world, terms, terms and conditions";
    		$meta_description = "Terms and Conditions of mail forwarding services";
    		break;
    	default;
    		$width = 220;
    		$title = "International Mail Forwarding Network - Mailnetwork.com";
    		$meta_keywords = "mail forwarding, mailbox, mail, mail box, USA, mailing address, FedEx, forwarding, privacy, postal, USPS, security, confidentiality, couriers, express service, street address, Canada, business, voice mail, rental, mailing, world";
    		$meta_description = "Mailing address rental in USA & Canada and mail forwarding services around the world.";
    		break;
    }?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $meta_description; ?>" />
<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" />
<link rel="SHORTCUT ICON" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
</head>
<body>

<div id="main_wrapper">
  <div class="main_wrapper_sub">
    <div class="main_wrapper_sub_main">
      <div id="inner_hed_band_about" style="width:<?php echo $width ?>px">
        <table width="100%" height="34px" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="209" height="34px" align="right" valign="top" style="background:url(<?php echo Yii::app()->request->baseUrl; ?>/images/inner_left_redbg.png) repeat-x;"><div class="inner_hed_band_txt"> <?php echo $shorttitle ?> </div></td>
            <td width="19" height="34px" valign="top"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/inner_left_redarrowbg.png" width="19" height="34" /></td>
          </tr>
        </table>
      </div>
      <?php endif; ?>
      <div id="wrapper">
        <div id="top">
          <div class="header">
			<?php $this->render('//shared/_nav'); ?>
          </div>
        </div>
        <!--Banner starts -->
        <div class="innerpage_bg">
          <div id="innnerpage_main">
            <div class="title_hed_bg">
              <div class="title_hed_bg_left">
                <a href="<?php echo Yii::app()->homeUrl; ?>"><div class="innerpage_hed"></div></a>
                <div class="innerpage_hed2"> Mailing Address Rental Worldwide <span class="innerpage_hed2_s">&amp;</span> Mail Forwarding Services <span class="innerpage_hed2_sm">since 1996</span> </div>
              </div>
            </div>

 			<?php echo $content?>

          </div>
        </div>
        <!--Bottom starts -->
        <div id="footer_part">
          <div class="footer_part_main"> Toll Free Number in the US & Canada: 1 888 248-6245 • Direct Call: 1 514 824-7678 • <a href="mailto:info@mailnetwork.com">info@mailnetwork.com</a><br>
            © International Mail Forwarding Network 1996-<?php echo date("Y"); ?> • All rights reserved. </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
function addEvent ( obj, type, fn ) {
  if ( obj.attachEvent ) {
    obj["e"+type+fn] = fn;
    obj[type+fn] = function() { obj["e"+type+fn]( window.event ); }
    obj.attachEvent( "on"+type, obj[type+fn] );
  } else
    obj.addEventListener( type, fn, false );
}

function removeEvent ( obj, type, fn ) {
      if ( obj.detachEvent ) {
        obj.detachEvent( "on"+type, obj[type+fn] );
		    obj[type+fn] = null;
      } else
        obj.removeEventListener( type, fn, false );
}

Function.prototype.bind = function(obj) {
    var _method = this;
    return function() {
        return _method.apply(obj, arguments);
    };
}


Function.prototype.delay = function(del) {
    var _this = this;
    (function() {
    setTimeout(_this,del);
    })();
}

function getstyle(elem, prop) {
		if(document.defaultView)
		{
			return document.defaultView.getComputedStyle(elem, null).getPropertyValue(prop);
		}
		else if(elem.currentStyle)
		{
			var prop = prop.replace(/-(\w)/gi, function($0,$1)
			{
				//return $0.charAt($0.length - 1).toUpperCase();
				return $1.toUpperCase();
			});
			return elem.currentStyle[prop];
		}
		else return null;
	}
function $f(elms){
var $f = elms;
$f.fadeIn = function(delay,callbk,out) {
        var _this = this;
        for (i = 1; i <= 100; i++) {
          (function(j) {
                setTimeout(function() {
                      if (out==true) j=100-j;
                       Opacityto(_this,j);
                        _this.style.zoom = 1; // for ie, set haslayout
                       if (j==100&&callbk!=undefined) {callbk.call(_this);}
                       else if (out==true&&callbk!=undefined&&j==0) {callbk.call(_this);}
                      },j*delay/100);

            })(i);
        }
    };

    $f.fadeOut = function(delay,callbk) {
        $.fadeIn(delay,callbk,true);
    };

    return $f;
}


function Opacityto(elm,v){
    elm.style.opacity = v/100; /* CSS3 */
    elm.MozOpacity =  v/100; /* FF */
    elm.style.KhtmlOpacity =  v/100; /* Safari */
    elm.style.filter=" alpha(opacity ="+v+")"; /* IE */
}

function slideshow(id){
    this.ul = document.getElementById(id);
    this.lis = this.ul.getElementsByTagName("LI");
    this.len = this.lis.length;
    this.width = parseInt(getstyle(this.ul.parentNode, "width"));
    for(i=1;i<this.len;i++) {
   // this.lis[i].style.width = this.width+"px";
    this.lis[i].style.display = "block";
     Opacityto(this.lis[i],0);
    }
    this.left = this.width;
    this.t=0;
    this.k = 0;
    this.dir = "plus";
    this.delay =500;
    this.zindex = 1;
}

slideshow.prototype = {

repeat: function(fn,del){
    var _this = this;
    (function() {
    _this.t = setInterval(fn,del);
    })();

},



attach:function(){
    _this = this;
    this.ul.onmouseover = function(){
        _stop();
    };

    this.ul.onmouseout = function(){

        if (_this.t!=0) return;
        _stop();
        _go();
    }

},

go: function(){

    _this = this;
    _stop = this.stop.bind(this);
    _go = this.go.bind(this);
    this.attach();
    clearInterval(this.t);

    this.repeat(this.show.bind(this),this.delay+2000);

},

show: function(){
    _this.k = (_this.dir == "plus") ? _this.k+1 : _this.k-1;
    if (_this.k== _this.len) {
        _this.dir = "minus";
        _this.k = _this.len -1;
    }
    else if (_this.k==0) {
        _this.dir = "plus";
        _this.k = _this.k+1;

    }
    _this.zindex +=1;
    if (_this.dir == "plus") {

        _this.lis[_this.k].style.zIndex = _this.zindex;
         $f(_this.lis[_this.k]).fadeIn(1000,function(){
            Opacityto(_this.lis[_this.k-1],0);
         });
    }
    else if (_this.dir == "minus") {

        _this.lis[_this.k-1].style.zIndex = _this.zindex;
         $f(_this.lis[_this.k-1]).fadeIn(1000,function(){
            Opacityto(_this.lis[_this.k],0);
         });

    }

},

stop:function(){
    clearInterval(this.t);
    this.t = 0;
}

}
window.onload=function(){
var ss1 = new slideshow("nt");
ss1.go();
}
</script>
<script src="ga.js" type="text/javascript"></script>
</body>
</html>
