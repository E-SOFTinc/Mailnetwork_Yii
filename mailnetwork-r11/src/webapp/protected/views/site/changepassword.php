<div class="innerpages_sub">
  <table width="772" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="300" align="center" valign="middle">
      <form id="form1" name="form1" method="post" action="">     
        <table width="394" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="2" align="center">
              <?php echo CHtml::link('[Back]', array('site/admin')); ?>
            </td>
          </tr>
          <tr><td colspan="2">&nbsp;</td></tr>        
          <tr>
            <td width="10" height="25" align="left" valign="middle" class="innerpage_txt2">&nbsp;</td>
            <td width="384" align="left" valign="middle" class="innerpage_txt2">Change Admin Password:</td>
          </tr>
          <tr>
            <td height="95" colspan="2" align="left" valign="top" background="images/forgotbg.jpg"><table width="394" border="0" cellspacing="0" cellpadding="0">
            <?php if ($message != ""): ?>
              <tr>
                <td width="10" height="30">&nbsp;</td>
                <td width="127" height="50" align="left" valign="middle"><?php echo $message; ?></td>
              </tr>
            <?php endif; ?>
              <tr>
                <td width="127" height="50" align="left" valign="middle">Current password:</td>
                <td width="257" height="50" align="left" valign="middle"><input type="password" name="currPass" id="currPassId" /></td>
              </tr>
              <tr>
                <td width="127" height="50" align="left" valign="middle">New password:</td>
                <td width="257" height="50" align="left" valign="middle"><input type="password" name="priPass" id="priPassId" /></td>
              </tr>
              <tr>
                <td width="127" height="50" align="left" valign="middle">Repeat password:</td>
                <td width="257" height="50" align="left" valign="middle"><input type="password" name="priPassRepeat" id="priPassRepeatId" /></td>
              </tr>              
              <tr>
                <td height="35" align="left" valign="middle">&nbsp;</td>
                <td height="35" align="left" valign="middle"><input type="submit" name="submit" /></td>
              </tr>
              </table></td>
          </tr>
        </table>
      </form></td>
    </tr>
  </table>
</div>







