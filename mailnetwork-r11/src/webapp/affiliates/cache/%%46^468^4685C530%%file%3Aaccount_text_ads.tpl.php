<?php /* Smarty version 2.6.14, created on 2015-08-12 16:32:45
         compiled from file:account_text_ads.tpl */ ?>

<?php if (isset ( $this->_tpl_vars['one_click_delivery'] )): ?>
<legend style="color:<?php echo $this->_tpl_vars['legend']; ?>
;"><?php echo $this->_tpl_vars['menu_text_ads']; ?>
</legend>
<?php unset($this->_sections['nr']);
$this->_sections['nr']['name'] = 'nr';
$this->_sections['nr']['loop'] = is_array($_loop=$this->_tpl_vars['textad_link_results']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nr']['show'] = true;
$this->_sections['nr']['max'] = $this->_sections['nr']['loop'];
$this->_sections['nr']['step'] = 1;
$this->_sections['nr']['start'] = $this->_sections['nr']['step'] > 0 ? 0 : $this->_sections['nr']['loop']-1;
if ($this->_sections['nr']['show']) {
    $this->_sections['nr']['total'] = $this->_sections['nr']['loop'];
    if ($this->_sections['nr']['total'] == 0)
        $this->_sections['nr']['show'] = false;
} else
    $this->_sections['nr']['total'] = 0;
if ($this->_sections['nr']['show']):

            for ($this->_sections['nr']['index'] = $this->_sections['nr']['start'], $this->_sections['nr']['iteration'] = 1;
                 $this->_sections['nr']['iteration'] <= $this->_sections['nr']['total'];
                 $this->_sections['nr']['index'] += $this->_sections['nr']['step'], $this->_sections['nr']['iteration']++):
$this->_sections['nr']['rownum'] = $this->_sections['nr']['iteration'];
$this->_sections['nr']['index_prev'] = $this->_sections['nr']['index'] - $this->_sections['nr']['step'];
$this->_sections['nr']['index_next'] = $this->_sections['nr']['index'] + $this->_sections['nr']['step'];
$this->_sections['nr']['first']      = ($this->_sections['nr']['iteration'] == 1);
$this->_sections['nr']['last']       = ($this->_sections['nr']['iteration'] == $this->_sections['nr']['total']);
?>
<p>
<strong><?php echo $this->_tpl_vars['marketing_group']; ?>
:</strong> <?php echo $this->_tpl_vars['textad_link_results'][$this->_sections['nr']['index']]['textad_group_name']; ?>
<BR />
<b><?php echo $this->_tpl_vars['marketing_target_url']; ?>
</b>: <a href="<?php echo $this->_tpl_vars['textad_link_results'][$this->_sections['nr']['index']]['textad_target_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['textad_link_results'][$this->_sections['nr']['index']]['textad_target_url']; ?>
</a><BR />
<script type="text/javascript"><!--
iDevAffiliate_BoxWidth = "<?php echo $this->_tpl_vars['BoxWidth']; ?>
";
iDevAffiliate_OutlineColor = "#<?php echo $this->_tpl_vars['OutlineColor']; ?>
";
iDevAffiliate_TitleTextColor = "#<?php echo $this->_tpl_vars['TitleTextColor']; ?>
";
iDevAffiliate_TitleTextBackgroundColor = "#<?php echo $this->_tpl_vars['TitleTextBackgroundColor']; ?>
";
iDevAffiliate_LinkColor = "#<?php echo $this->_tpl_vars['LinkColor']; ?>
";
iDevAffiliate_TextColor = "#<?php echo $this->_tpl_vars['TextColor']; ?>
";
iDevAffiliate_TextBackgroundColor = "#<?php echo $this->_tpl_vars['TextBackgroundColor']; ?>
";
//-->
</script>
<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['textad_link_results'][$this->_sections['nr']['index']]['textad_full_url']; ?>
"></script>
<BR />
<?php echo $this->_tpl_vars['marketing_source_code']; ?>

<BR />
<textarea rows="10" class="input-block-level" style="background-color:#f2f6ff;">
<script type="text/javascript"><!--
iDevAffiliate_BoxWidth = "<?php echo $this->_tpl_vars['BoxWidth']; ?>
";
iDevAffiliate_OutlineColor = "#<?php echo $this->_tpl_vars['OutlineColor']; ?>
";
iDevAffiliate_TitleTextColor = "#<?php echo $this->_tpl_vars['TitleTextColor']; ?>
";
iDevAffiliate_TitleTextBackgroundColor = "#<?php echo $this->_tpl_vars['TitleTextBackgroundColor']; ?>
";
iDevAffiliate_LinkColor = "#<?php echo $this->_tpl_vars['LinkColor']; ?>
";
iDevAffiliate_TextColor = "#<?php echo $this->_tpl_vars['TextColor']; ?>
";
iDevAffiliate_TextBackgroundColor = "#<?php echo $this->_tpl_vars['TextBackgroundColor']; ?>
";
//-->
</script>
<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['textad_link_results'][$this->_sections['nr']['index']]['textad_full_url']; ?>
"></script></textarea>
<?php echo $this->_tpl_vars['ad_info']; ?>

</p>
<br />
<p style="border-bottom:1px solid #5e5e5e;"></p>
<?php endfor; endif;  else: ?>
<legend style="color:<?php echo $this->_tpl_vars['legend']; ?>
;"><?php echo $this->_tpl_vars['menu_text_ads']; ?>
</legend>
<form method="POST" action="account.php" class="form-horizontal">
<input type="hidden" name="page" value="8">
<div class="row-fluid">
<div class="span9">
    <div class="control-group">
        <label class="control-label" ><?php echo $this->_tpl_vars['marketing_group_title']; ?>
</label>
        <div class="controls">                           
          <select size="1" name="textads_picked">
            <?php unset($this->_sections['nr']);
$this->_sections['nr']['name'] = 'nr';
$this->_sections['nr']['loop'] = is_array($_loop=$this->_tpl_vars['textad_results']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nr']['show'] = true;
$this->_sections['nr']['max'] = $this->_sections['nr']['loop'];
$this->_sections['nr']['step'] = 1;
$this->_sections['nr']['start'] = $this->_sections['nr']['step'] > 0 ? 0 : $this->_sections['nr']['loop']-1;
if ($this->_sections['nr']['show']) {
    $this->_sections['nr']['total'] = $this->_sections['nr']['loop'];
    if ($this->_sections['nr']['total'] == 0)
        $this->_sections['nr']['show'] = false;
} else
    $this->_sections['nr']['total'] = 0;
if ($this->_sections['nr']['show']):

            for ($this->_sections['nr']['index'] = $this->_sections['nr']['start'], $this->_sections['nr']['iteration'] = 1;
                 $this->_sections['nr']['iteration'] <= $this->_sections['nr']['total'];
                 $this->_sections['nr']['index'] += $this->_sections['nr']['step'], $this->_sections['nr']['iteration']++):
$this->_sections['nr']['rownum'] = $this->_sections['nr']['iteration'];
$this->_sections['nr']['index_prev'] = $this->_sections['nr']['index'] - $this->_sections['nr']['step'];
$this->_sections['nr']['index_next'] = $this->_sections['nr']['index'] + $this->_sections['nr']['step'];
$this->_sections['nr']['first']      = ($this->_sections['nr']['iteration'] == 1);
$this->_sections['nr']['last']       = ($this->_sections['nr']['iteration'] == $this->_sections['nr']['total']);
?>
            <option value="<?php echo $this->_tpl_vars['textad_results'][$this->_sections['nr']['index']]['textad_group_id']; ?>
"><?php echo $this->_tpl_vars['textad_results'][$this->_sections['nr']['index']]['textad_group_name']; ?>
</option>
            <?php endfor; endif; ?>
            </select>
        </div>
    </div>
    </div>
    <div class="span3">
        <input class="btn btn-primary" type="submit" value="<?php echo $this->_tpl_vars['marketing_button']; ?>
 <?php echo $this->_tpl_vars['menu_text_ads']; ?>
">
    </div>
</div>
</form>
<?php if (isset ( $this->_tpl_vars['textad_group_chosen'] )): ?>
<h4 style="border-bottom:1px solid #5e5e5e;"><?php echo $this->_tpl_vars['marketing_group_title']; ?>
: <font color="#CC0000"><?php echo $this->_tpl_vars['textad_chosen_group_name']; ?>
</font></h4>
<?php unset($this->_sections['nr']);
$this->_sections['nr']['name'] = 'nr';
$this->_sections['nr']['loop'] = is_array($_loop=$this->_tpl_vars['textad_link_results']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nr']['show'] = true;
$this->_sections['nr']['max'] = $this->_sections['nr']['loop'];
$this->_sections['nr']['step'] = 1;
$this->_sections['nr']['start'] = $this->_sections['nr']['step'] > 0 ? 0 : $this->_sections['nr']['loop']-1;
if ($this->_sections['nr']['show']) {
    $this->_sections['nr']['total'] = $this->_sections['nr']['loop'];
    if ($this->_sections['nr']['total'] == 0)
        $this->_sections['nr']['show'] = false;
} else
    $this->_sections['nr']['total'] = 0;
if ($this->_sections['nr']['show']):

            for ($this->_sections['nr']['index'] = $this->_sections['nr']['start'], $this->_sections['nr']['iteration'] = 1;
                 $this->_sections['nr']['iteration'] <= $this->_sections['nr']['total'];
                 $this->_sections['nr']['index'] += $this->_sections['nr']['step'], $this->_sections['nr']['iteration']++):
$this->_sections['nr']['rownum'] = $this->_sections['nr']['iteration'];
$this->_sections['nr']['index_prev'] = $this->_sections['nr']['index'] - $this->_sections['nr']['step'];
$this->_sections['nr']['index_next'] = $this->_sections['nr']['index'] + $this->_sections['nr']['step'];
$this->_sections['nr']['first']      = ($this->_sections['nr']['iteration'] == 1);
$this->_sections['nr']['last']       = ($this->_sections['nr']['iteration'] == $this->_sections['nr']['total']);
?>
<p>
<b><?php echo $this->_tpl_vars['marketing_target_url']; ?>
:</b> <a href="<?php echo $this->_tpl_vars['textad_link_results'][$this->_sections['nr']['index']]['textad_target_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['textad_link_results'][$this->_sections['nr']['index']]['textad_target_url']; ?>
</a>
<br />
<script type="text/javascript"><!--
iDevAffiliate_BoxWidth = "<?php echo $this->_tpl_vars['BoxWidth']; ?>
";
iDevAffiliate_OutlineColor = "#<?php echo $this->_tpl_vars['OutlineColor']; ?>
";
iDevAffiliate_TitleTextColor = "#<?php echo $this->_tpl_vars['TitleTextColor']; ?>
";
iDevAffiliate_TitleTextBackgroundColor = "#<?php echo $this->_tpl_vars['TitleTextBackgroundColor']; ?>
";
iDevAffiliate_LinkColor = "#<?php echo $this->_tpl_vars['LinkColor']; ?>
";
iDevAffiliate_TextColor = "#<?php echo $this->_tpl_vars['TextColor']; ?>
";
iDevAffiliate_TextBackgroundColor = "#<?php echo $this->_tpl_vars['TextBackgroundColor']; ?>
";
//-->
</script>
<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['textad_link_results'][$this->_sections['nr']['index']]['textad_full_url']; ?>
"></script>
<?php echo $this->_tpl_vars['marketing_source_code']; ?>
<br />
<textarea rows="10" class="input-block-level" style="background-color:#f2f6ff;">
<script type="text/javascript"><!--
iDevAffiliate_BoxWidth = "<?php echo $this->_tpl_vars['BoxWidth']; ?>
";
iDevAffiliate_OutlineColor = "#<?php echo $this->_tpl_vars['OutlineColor']; ?>
";
iDevAffiliate_TitleTextColor = "#<?php echo $this->_tpl_vars['TitleTextColor']; ?>
";
iDevAffiliate_TitleTextBackgroundColor = "#<?php echo $this->_tpl_vars['TitleTextBackgroundColor']; ?>
";
iDevAffiliate_LinkColor = "#<?php echo $this->_tpl_vars['LinkColor']; ?>
";
iDevAffiliate_TextColor = "#<?php echo $this->_tpl_vars['TextColor']; ?>
";
iDevAffiliate_TextBackgroundColor = "#<?php echo $this->_tpl_vars['TextBackgroundColor']; ?>
";
//-->
</script>
<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['textad_link_results'][$this->_sections['nr']['index']]['textad_full_url']; ?>
"></script>
</textarea>
</p>
<br />
<p style="border-bottom:1px solid #5e5e5e;"></p>
<?php endfor; endif;  else:  endif;  endif; ?>