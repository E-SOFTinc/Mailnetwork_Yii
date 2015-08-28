<?php
$toolbar = array(
    array(
        'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat',
    ),
    array(
        'Link', 'Unlink', 'Anchor',
    ),
    array(
        'TextColor', 'BGColor',
    ),
);
?>
<div class="innerpages_sub">
  <table width="772" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="300" align="center" valign="middle">
      <form id="form1" name="form1" method="post" action="">
        <table width="694" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="3" align="center">
              <?php echo CHtml::link('[Back]', array('site/admin')); ?>
            </td>
          </tr>
          <tr><td colspan="2">&nbsp;</td></tr>
          <tr>
            <td width="10" height="25" align="left" valign="middle" class="innerpage_txt2">&nbsp;</td>
            <td width="384" align="left" valign="middle" class="innerpage_txt2">Front Page Editor:</td>
          </tr>
          <tr>
            <td height="95" colspan="3" align="left" valign="top" background="images/forgotbg.jpg"><table width="694" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="550" height="50" align="left" valign="middle">
                    <?php
                    $this->widget('ext.editMe.ExtEditMe', array(
                        'name'=>'value',
                        'value'=>$value,
                        'toolbar'=>$toolbar,
                    ));
                    ?>
                    </td>
              </tr>
              <tr>
                <td height="35" align="left" valign="middle"><input type="submit" name="submit" /></td>
              </tr>
              </table></td>

          </tr>
        </table>
      </form></td>
    </tr>
  </table>
</div>







