<?php /* Smarty version 2.6.14, created on 2015-08-14 12:12:33
         compiled from file:tandc_re-accept.tpl */ ?>

<p style="margin-top:15px">
    <h4><?php echo $this->_tpl_vars['tc_reaccept_title']; ?>
</h4>
    <?php echo $this->_tpl_vars['tc_reaccept_sub_title']; ?>

</p>
<br />
<form method="post" value="account.php">
    <textarea rows="10" name="terms" class="input-block-level" readonly><?php echo $this->_tpl_vars['terms_t']; ?>
</textarea>
    <input type="hidden" name="terms_accepted" value="true">
    <input type="submit" class="btn btn-primary" name="Re-Accept Terms and Conditions" value="<?php echo $this->_tpl_vars['tc_reaccept_button']; ?>
">
</form>