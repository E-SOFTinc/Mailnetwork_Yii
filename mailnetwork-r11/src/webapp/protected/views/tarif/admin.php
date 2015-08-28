<center>&nbsp;&nbsp;&nbsp;<font class="titre2">City
Category Fees</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
	href="masterdata.php"><b>[Back to control panel ]</b></a> <br>
<br>
<br>
<a href="javascript:void(0);"
	onclick="javascript:loadDivision('taxesDiv');"><b><font
	class="noclass" id="taxesDivHeader">[ Taxes ]</font></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="javascript:void(0);"
	onclick="javascript:loadDivision('catDiv');"><b><font
	class="titre2" id="catDivHeader">[ City Category Fees ]</font></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="javascript:void(0);"
	onclick="javascript:loadDivision('regularFeeDiv');"><b><font
	class="noclass" id="regularFeeDivHeader">[Regular Program ]</font></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="javascript:void(0);"
	onclick="javascript:loadDivision('groupProgramFeeListDiv');"><b><font
	class="noclass" id="groupProgramFeeListDivHeader">[Group Program
Fee List]</font></b></a> <br>
<br>
<div id="catDiv">
<table width=500 border=0 cellpadding=0 bordercolor="#FFFFFF">
	<tr>
		<td align=center><font>Rental Period</font></td>
		<td align=center><font><b>A</b></font></td>
		<td align=center><font><b>B</b></font></td>
		<td align=center><font><b>C</b></font></td>
		<td align=center><font><b>D</b></font></td>
		<td align=center><font><b>E</b></font></td>
	</tr>
	<tr>
		<td align=center><b>6 months</b></td>
		<td align=center id="cat_a_6">$ <?php echo $tarif_model->cat_a_6 ?></td>
		<td align=center id="cat_b_6">$ <?php echo $tarif_model->cat_b_6 ?></td>
		<td align=center id="cat_c_6">$ <?php echo $tarif_model->cat_c_6 ?></td>
		<td align=center id="cat_d_6">$ <?php echo $tarif_model->cat_d_6 ?></td>
		<td align=center id="cat_e_6">$ <?php echo $tarif_model->cat_e_6 ?></td>
	</tr>
	<tr>
		<td align=center><b>12 months</b></td>
		<td align=center id="cat_a_12">$ <?php echo $tarif_model->cat_a_12 ?></td>
		<td align=center id="cat_b_12">$ <?php echo $tarif_model->cat_b_12 ?></td>
		<td align=center id="cat_c_12">$ <?php echo $tarif_model->cat_c_12 ?></td>
		<td align=center id="cat_d_12">$ <?php echo $tarif_model->cat_d_12 ?></td>
		<td align=center id="cat_e_12">$ <?php echo $tarif_model->cat_e_12 ?></td>
	</tr>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td align=center></td>
		<td align=center><font><b>F</b></font></td>
		<td align=center><font><b>G</b></font></td>
		<td align=center><font><b>H</b></font></td>
		<td align=center><font><b>I</b></font></td>
		<td align=center>&nbsp;</td>
	</tr>
	<tr>
		<td align=center><b>6 months</b></td>
		<td align=center id="cat_f_6">$ <?php echo $tarif_model->cat_f_6 ?></td>
		<td align=center id="cat_g_6">$ <?php echo $tarif_model->cat_g_6 ?></td>
		<td align=center id="cat_h_6">$ <?php echo $tarif_model->cat_h_6 ?></td>
		<td align=center id="cat_i_6">$ <?php echo $tarif_model->cat_i_6 ?></td>
		<td align=center>&nbsp;</td>
	</tr>
	<tr>
		<td align=center><b>12 months</b></td>
		<td align=center id="cat_f_12">$ <?php echo $tarif_model->cat_f_12 ?></td>
		<td align=center id="cat_g_12">$ <?php echo $tarif_model->cat_g_12 ?></td>
		<td align=center id="cat_h_12">$ <?php echo $tarif_model->cat_h_12 ?></td>
		<td align=center id="cat_i_12">$ <?php echo $tarif_model->cat_i_12 ?></td>
		<td align=center>&nbsp;</td>
	</tr>
</table>
<br>
<br>
<table border="0" cellspacing="0">
	<tr>
		<td colspan="3"><b>Modify a fee</b></td>
	</tr>
	<tr>
		<td>Category</td>
		<td>Period</td>
		<td>New value</td>
	</tr>
	<tr>
		<td><select name="catTariffType" id="catTariffType">
			<option>Select</option>
			<option value="cat_a_">A</option>
			<option value="cat_b_">B</option>
			<option value="cat_c_">C</option>
			<option value="cat_d_">D</option>
			<option value="cat_e_">E</option>
			<option value="cat_f_">F</option>
			<option value="cat_g_">G</option>
			<option value="cat_h_">H</option>
			<option value="cat_i_">I</option>
		</select></td>
		<td><select name="catTariffPeriod" id="catTariffPeriod">
			<option>Select</option>
			<option value="6">6 months</option>
			<option value="12">12 months</option>
		</select></td>
		<td><input type=TEXT name="catTariff" id="catTariff" value=""
			size=5></td>
	</tr>
</table>
<input type="button" value=" Modify "
	onclick="javascript:updateTarif('catTariffType', 'catTariff');">
</div>
<div id="regularFeeDiv" style="">
<table width=450 border=0>
	<tr>
		<td><b>Set-up Fee</b></td>
		<td><b>Renewal Fee</b></td>
	</tr>
	<tr>
		<td id="reg_setup_us">$ <?php echo $tarif_model->reg_setup_us; ?>
		</td>
		<td id="reg_renewal_us">$ <?php echo $tarif_model->reg_renewal_us; ?>
		</td>
	</tr>
</table>

<table width="450" border="0">
	<tr>
		<td colspan="2"><b>Deposit amount</b></td>
	</tr>
	<tr>
		<td>Express service - On reception</td>
		<td id="reg_depositexp__now">$ <?php echo $tarif_model->reg_depositexp_now; ?>
		</td>
	</tr>
	<tr>
		<td>Express service - Weekly</td>
		<td id="reg_depositexp__week">$ <?php echo $tarif_model->reg_depositexp_week; ?>
		</td>
	</tr>
	<tr>
		<td>Express service - Bimonthly</td>
		<td id="reg_depositexp__bimonth">$ <?php echo $tarif_model->reg_depositexp_bimonth; ?>
		</td>
	</tr>
	<tr>
		<td>Express service - Monthly</td>
		<td id="reg_depositexp__month">$ <?php echo $tarif_model->reg_depositexp_month; ?>
		</td>
	</tr>
	<tr>
		<td>Air-mail service - Weekly</td>
		<td id="reg_depositair_week">$ <?php echo $tarif_model->reg_depositair_week; ?>
		</td>
	</tr>
	<tr>
		<td>Air-mail service - Bimonthly</td>
		<td id="reg_depositair_bimonth">$ <?php echo $tarif_model->reg_depositair_bimonth; ?>
		</td>
	</tr>
	<tr>
		<td>Air-mail service - Monthly</td>
		<td id="reg_depositair_month">$ <?php echo $tarif_model->reg_depositair_month; ?>
		</td>
	</tr>
</table>
<br>
<br>
<table border="0" cellspacing="0">
	<tr>
		<td colspan="3"><b>Modify a fee</b></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>New value</td>
	</tr>
	<tr>
		<td><select name="regularProgramTariffType"
			id="regularProgramTariffType">
			<option value="">Select</option>
			<option value="reg_setup_us">Setup Fee</option>
			<option value="reg_renewal_us">Renewal Fe</option>
			<option value="reg_depositexp__now">Express service - On
			reception</option>
			<option value="reg_depositexp__week">Express service -
			Weekly</option>
			<option value="reg_depositexp__bimonth">Express service -
			Bimonthly</option>
			<option value="reg_depositexp__month">Express service -
			Monthly</option>
			<option value="reg_depositair_week">Air-mail service -
			Weekly</option>
			<option value="reg_depositair_bimonth">Air-mail service -
			Bimonthly</option>
			<option value="reg_depositair_month">Air-mail service -
			Monthly</option>
		</select></td>
		<td><input type=TEXT name="regularProgramTariff"
			id="regularProgramTariff" value="" size=5></td>
	</tr>
</table>
<input type="button" value=" Modify "
	onclick="javascript:updateTarif('regularProgramTariffType', 'regularProgramTariff');">
</div>
<div id="taxesDiv" style=""><font>GST</font> :<span id="taxtps">
<?php echo $tarif_model->taxtps; ?> </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font>PST</font> :<span
	id="taxtvq"> <?php echo $tarif_model->taxtvq; ?> </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font>TVH</font> :<span
	id="taxtvh"> <?php echo $tarif_model->taxtvh; ?> </span> <br>
<br>
<table border="0" cellspacing="0">
	<tr>
		<td colspan="2"><b>Modify tax amount</b></td>
	</tr>
	<tr>
		<td><select name="taxTariffType" id="taxTariffType">
			<option value="">Select</option>
			<option value="taxtps">GST</option>
			<option value="taxtvq">PST</option>
			<option value="taxtvh">TVH</option>
		</select>&nbsp;&nbsp;&nbsp;</td>
		<td>New value : <input type=TEXT name="taxTariff" id="taxTariff"
			value="" size=5></td>
	</tr>
</table>
<input type="button" value=" Modify "
	onclick="javascript:updateTarif('taxTariffType', 'taxTariff');">
</div>
<div id="groupProgramFeeListDiv" style="">
<table border="0" cellspacing=1 cellpadding=0 width="410">
	<tr>
		<td><b>Dbase data </b></td>
		<td></td>
		<td colspan="3" align=right><b>New York, NY, USA</b></td>
		<td></td>
		<td colspan="3" align=right><b>Montreal area, Canada</b></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="right">6 months</td>
		<td>&nbsp;</td>
		<td align="right">12 months</td>
		<td>&nbsp;</td>
		<td align="right">6 months</td>
		<td>&nbsp;</td>
		<td align="right">12 months</td>
	</tr>
	<tr>
		<td colspan="9">&nbsp;</td>
	</tr>
	<tr>
		<td>4 to 50 employees</td>
		<td>&nbsp;</td>
		<td align="right" id="ny_6_4"><?php echo $tarif_model->group_ny_6_4; ?></td>
		<td>&nbsp;</td>
		<td align="right" id="ny_12_4"><?php echo $tarif_model->group_ny_12_4; ?></td>
		<td>&nbsp;</td>
		<td align="right" id="laval_6_4"><?php echo $tarif_model->group_laval_6_4; ?></td>
		<td>&nbsp;</td>
		<td align="right" id="laval_12_4"><?php echo $tarif_model->group_laval_12_4; ?></td>
	</tr>
	<tr>
		<td colspan="9">&nbsp;</td>
	</tr>
	<tr>
		<td>51 to 100 employees</td>
		<td>&nbsp;</td>
		<td align="right" id="ny_6_50"><?php echo $tarif_model->group_ny_6_50; ?>
		</td>
		<td>&nbsp;</td>
		<td align="right" id="ny_12_50"><?php echo $tarif_model->group_ny_12_50;?>
		</td>
		<td>&nbsp;</td>
		<td align="right" id="laval_6_50"><?php echo $tarif_model->group_laval_6_50; ?></td>
		<td>&nbsp;</td>
		<td align="right" id="laval_12_50"><?php echo $tarif_model->group_laval_12_50; ?></td>
	</tr>
	<tr>
		<td colspan="9">&nbsp;</td>
	</tr>
	<tr>
		<td>100 employees & more</td>
		<td>&nbsp;</td>
		<td align="right" id="ny_6_100"><?php echo $tarif_model->group_ny_6_100; ?></td>
		<td>&nbsp;</td>
		<td align="right" id="ny_12_100"><?php echo $tarif_model->group_ny_12_100; ?></td>
		<td>&nbsp;</td>
		<td align="right" id="laval_6_100"><?php echo $tarif_model->group_laval_6_100; ?></td>
		<td>&nbsp;</td>
		<td align="right" id="laval_12_100"><?php echo $tarif_model->group_laval_12_100; ?></td>
	</tr>
	<tr>
		<td colspan="9">&nbsp;</td>
	</tr>
</table>
<br>
<br>
<table border="0" cellspacing="0">
	<tr>
		<td colspan="3"><b>Modify a fee</b></td>
	</tr>
	<tr>
		<td>Employees</td>
		<td>City/Period</td>
		<td>New value</td>
	</tr>
	<tr>
		<td><select name="groupProgramSize" id="groupProgramSize">
			<option value="">Select</option>
			<option value="4">4 to 50 employees</option>
			<option value="50">51 to 100 employees</option>
			<option value="100">101 employees & more</option>
		</select></td>
		<td><select name="groupProgramFeeType" id="groupProgramFeeType">
			<option value="">Select</option>
			<option value="ny_6">New York - 6 months</option>
			<option value="ny_12">New York - 12 months</option>
			<option value="laval_6">Montreal area - 6 months</option>
			<option value="laval_12">Montreal area - 12 months</option>
		</select></td>
		<td><input type=TEXT name="groupProgramFee" id="groupProgramFee"
			value="" size=5></td>
	</tr>
</table>
<input type="button" value=" Modify "
	onclick="javascript:updateTarifForgroupProgram('groupProgramFee');">
</div>
</center>