<div class="nav">
<ul>
<li><a href="<?php echo Yii::app()->homeUrl; ?>" class="">Home</a></li>
<li class="span"></li>

<?php 

if (!isset($pageTitle))
	$pageTitle = "";
	
function is_active($page, $pageTitle) {
	if (isset($pageTitle)) {
		if ($page == $pageTitle) {
			echo "class='activate'";
		}
	}
	else 
		echo "class='activate'";
}

?>
<li><a href="<?php echo $this->createUrl('site/page',array('view'=>'about-us')); ?>" <?php is_active('about-us', $pageTitle); ?>>About Us</a></li>
<li class="span"></li>
<li><a href="<?php echo $this->createUrl('site/page',array('view'=>'rates')); ?>" <?php is_active('rates', $pageTitle); ?>>Rates</a></li>
<li class="span"></li>
<li><a href="<?php echo $this->createUrl('site/page',array('view'=>'mail-forwarding')); ?>" <?php is_active('mail-forwarding', $pageTitle); ?>>Mail Forwarding</a></li>
<li class="span"></li>
<li><a href="<?php echo $this->createUrl('site/page',array('view'=>'privacy')); ?>" <?php is_active('privacy', $pageTitle); ?>>Security &amp; Privacy</a></li>
<li class="span"></li>
<li><a href="<?php echo $this->createUrl('site/page',array('view'=>'join-mailnetwork')); ?>" <?php is_active('join-mailnetwork', $pageTitle); ?>>Join Mailnetwork.com</a></li>
<li class="span"></li>
<li><a href="http://www.mailnetwork.com/testimonials" <?php is_active('testimonials', $pageTitle); ?>>Testimonials</a></li>
<li class="span"></li>
<li><a href="<?php echo $this->createUrl('site/page',array('view'=>'faq')); ?>" <?php is_active('faq', $pageTitle); ?>>FAQ</a></li>
<li class="span"></li>
<?php if (Yii::app()->user->isGuest): ?>
<li><a href="<?php echo $this->createUrl('site/login'); ?>">Login</a></li>
<?php else: ?>
<li><a href="<?php echo $this->createUrl('user/info'); ?>">Account</a></li>
<li class="span"></li>
<li><a href="<?php echo $this->createUrl('site/logout'); ?>">Logout</a></li>
<?php endif; ?>

</ul>
</div>