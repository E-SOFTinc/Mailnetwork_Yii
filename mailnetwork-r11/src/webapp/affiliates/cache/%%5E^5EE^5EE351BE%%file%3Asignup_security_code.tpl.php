<?php /* Smarty version 2.6.14, created on 2015-08-11 15:54:52
         compiled from file:signup_security_code.tpl */ ?>
 <legend style="color:<?php echo $this->_tpl_vars['legend']; ?>
;"><?php echo $this->_tpl_vars['signup_security_title']; ?>
</legend>   
 <span class="help-block"><?php echo $this->_tpl_vars['signup_security_info']; ?>
</span>  
 <div class="control-group">
    <label for="<?php echo $this->_tpl_vars['signup_security_code']; ?>
" class="control-label"><?php echo $this->_tpl_vars['signup_security_code']; ?>
</label>
    <div class="controls">      
      <input class="input-xlarge span4" id="security_code" name="security_code" type="text" />
    </div>
    <div class="controls" style="margin-top:20px;">      
      <?php echo $this->_tpl_vars['captcha_image']; ?>

    </div>
  </div>