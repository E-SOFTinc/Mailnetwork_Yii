<h1>General Fee Table <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/admin">[back]</a></h1>

<table width="780" border="0" cellspacing="0" cellpadding="0">

	<tr>
		<td align="center" valign="top">
		
		<table width="760" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td align="center" valign="top">&nbsp;</td>
			</tr>
			<tr>
				<td align="center" valign="top">
				<table width="700" border="0" align="left" cellpadding="0"
					cellspacing="0">
					<tr>
						<td width="33%" height="30" align="center"><a href="#"
							class="formslinks">[ Taxes ]</a></td>
						<td width="33%" height="30" align="center"><a href="#"
							class="formslinks">[ City Category Fees ]</a></td>
						<td width="33%" height="30" align="center"><a href="#"
							class="formslinks">[ Mail Forwarding Option Fees ]</a></td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td align="center" valign="top">
				<table width="620" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td height="38" align="left" valign="middle"
							background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
							class="forms_hed1">Taxes</td>
					</tr>
					<tr>
						<td>
						<div class="forms_headerbg">
						<table width="45%" border="0" align="center" cellpadding="3"
							cellspacing="3">
							<form action="<?php echo Yii::app()->request->baseUrl; ?>/tarif/save" method="post">
																					
							<tr>
								<td width="33%" align="center" valign="middle">GST: <?php echo $tarif_model->taxtps ?><span
									class="start_txt"></span></td>
								<td width="33%" align="center" valign="middle">PST: <?php echo $tarif_model->taxtvq ?><span
									class="start_txt"></span></td>
								<td width="33%" align="center" valign="middle">TVA: <?php echo $tarif_model->taxtvh ?><span
									class="start_txt"></span></td>
							</tr>
							<tr>
								<td colspan="3" align="center" valign="middle"><strong>Modify Tax Amount</strong></td>
							</tr>
							<tr>
								<td align="center" valign="middle">
									<select name="tarif-tax">
									<option selected="selected">Select</option>
									<option value="taxtps">GST</option>
									<option value="taxtvq">PST</option>
									<option value="taxtvh">TVA</option>
									</select>
								</td>
								<td align="center" valign="middle">New Value</td>
								<td align="center" valign="middle"><input name="tarif-value" size="5" type="text" /></td>
							</tr>
							<tr>
								<td colspan="3" height="30" align="center" valign="middle">
								<p><input type="submit" name="tax-submit" /></p>
								</td>
							</tr>
							
							</form>
						</table>
						</div>
						</td>
					</tr>
					
				</table>
				</td>
			</tr>
			
			</form>
			
			<tr>
				<td height="30" align="center" valign="top">&nbsp;</td>
			</tr>
			<tr>
				<td align="center" valign="top">
				<table width="620" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td height="38" align="left" valign="middle"
							background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
							class="forms_hed1">City Category Fees</td>
					</tr>
					<tr>
						<td>
						<div class="forms_headerbg">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<form action="<?php echo Yii::app()->request->baseUrl; ?>/tarif/save" method="post">
							<tr>
								<td>
								<table width="100%" border="0" cellpadding="1" cellspacing="3">
									<tr>
										<td width="16%" align="center" valign="middle">
										<font>Rental Period</font></td>
										<td align="center" bordercolor="#ffffff"><font><b>A</b></font></td>
										<td align="center" bordercolor="#ffffff"><font><b>B</b></font></td>
										<td align="center" bordercolor="#ffffff"><font><b>C</b></font></td>
										<td align="center" bordercolor="#ffffff"><font><b>D</b></font></td>
										<td align="center" bordercolor="#ffffff"><font><b>E</b></font></td>
									</tr>
									<tr bordercolor="#ffffff">
										<td align="center"><b>6 months</b></td>
										<td align="center">$<?php echo $tarif_model->cat_a_6 ?></td>
										<td align="center">$<?php echo $tarif_model->cat_b_6 ?></td>
										<td align="center">$<?php echo $tarif_model->cat_c_6 ?></td>
										<td align="center">$<?php echo $tarif_model->cat_d_6 ?></td>
										<td align="center">$<?php echo $tarif_model->cat_e_6 ?></td>
									</tr>
									<tr bordercolor="#ffffff">
										<td align="center"><b>12 months</b></td>
										<td align="center">$<?php echo $tarif_model->cat_a_12 ?>
										</td>
										<td align="center">$<?php echo $tarif_model->cat_b_12 ?>
										</td>
										<td align="center">$<?php echo $tarif_model->cat_c_12 ?>
										</td>
										<td align="center">$<?php echo $tarif_model->cat_d_12 ?>
										</td>
										<td align="center">$<?php echo $tarif_model->cat_e_12 ?>
										</td>
									</tr>
									<tr bordercolor="#ffffff">
										<td align="center">&nbsp;</td>
										<td align="center"><font><b>F</b></font></td>
										<td align="center"><font><b>G</b></font></td>
										<td align="center"><font><b>H</b></font></td>
										<td align="center"><font><b>I</b></font></td>
										<td align="center">&nbsp;</td>
									</tr>
									<tr bordercolor="#ffffff">
										<td align="center"><b>6 months</b></td>
										<td align="center">$<?php echo $tarif_model->cat_f_6 ?></td>
										<td align="center">$<?php echo $tarif_model->cat_g_6 ?></td>
										<td align="center">$<?php echo $tarif_model->cat_h_6 ?></td>
										<td align="center">$<?php echo $tarif_model->cat_i_6 ?></td>
										<td align="center">&nbsp;</td>
									</tr>
									<tr bordercolor="#ffffff">
										<td align="center"><b>12 months</b></td>
										<td align="center">$<?php echo $tarif_model->cat_f_12 ?>
										</td>
										<td align="center">$<?php echo $tarif_model->cat_g_12 ?>
										</td>
										<td align="center">$<?php echo $tarif_model->cat_h_12 ?>
										</td>
										<td align="center">$<?php echo $tarif_model->cat_i_12 ?>
										</td>
										<td align="center">&nbsp;</td>
									</tr>
									
								</table>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>
								<table width="45%" border="0" align="center" cellpadding="3"
									cellspacing="3">
									<tr>
										<td height="30" colspan="3" align="center" valign="middle"><strong>Modify
										a fee</strong></td>
									</tr>
									<tr>
										<td width="33%" align="center" valign="middle">Category <span
											class="start_txt">*</span></td>
										<td width="33%" align="center" valign="middle">Period <span
											class="start_txt">*</span></td>
										<td width="33%" align="center" valign="middle">Value <span
											class="start_txt">*</span></td>
									</tr>
									<tr>
										<td align="center" valign="middle"><select name="category">
											<option selected="selected">Select</option>
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
										<td align="center" valign="middle"><select name="period">
											<option selected="selected">Select</option>
											<option value="6">6 months</option>
											<option value="12">12 months</option>
										</select></td>
										<td align="center" valign="middle"><input
											name="value" size="5" type="text" /></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td colspan="3" height="30" align="center" valign="middle">
								<p><input type="submit" name="city-fees" /></p>
								</td>
							</tr>	
						</form>						
						</table>
						</div>
						</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td height="30" align="center" valign="top">&nbsp;</td>
			</tr>
			<tr>
				<td align="center" valign="top">
				<table width="620" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td height="38" align="left" valign="middle"
							background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
							class="forms_hed1">Regular Program</td>
					</tr>
					<tr>
						<td>
						<div class="forms_headerbg">
						<table width="60%" border="0" align="center" cellpadding="3"
							cellspacing="3">
							<form action="<?php echo Yii::app()->request->baseUrl; ?>/tarif/save" method="post">
							
							<tr>
								<td colspan="2" align="center" valign="middle">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
								</table>
								</td>
							</tr>
							<tr>
								<td width="81%" align="left" valign="middle"><strong>Deposit
								amount</strong></td>
								<td width="19%" align="left" valign="middle">&nbsp;</td>
							</tr>
							<tr>
								<td align="left" valign="middle">Express service - On
								reception</td>
								<td align="center" valign="middle">$<?php echo $tarif_model->reg_depositexp_now ?></td>
							</tr>
							<tr>
								<td align="left" valign="middle">Express service - Weekly</td>
								<td align="center" valign="middle">$<?php echo $tarif_model->reg_depositexp_week ?></td>
							</tr>
							<tr>
								<td align="left" valign="middle">Express service -
								Bimonthly</td>
								<td align="center" valign="middle">$<?php echo $tarif_model->reg_depositexp_bimonth ?></td>
							</tr>
							<tr>
								<td align="left" valign="middle">Express service - Monthly</td>
								<td align="center" valign="middle">$<?php echo $tarif_model->reg_depositexp_month ?></td>
							</tr>
							<tr>
								<td align="left" valign="middle">Air-mail service - Weekly</td>
								<td align="center" valign="middle">$<?php echo $tarif_model->reg_depositair_week ?></td>
							</tr>
							<tr>
								<td align="left" valign="middle">Air-mail service -
								Bimonthly</td>
								<td align="center" valign="middle">$<?php echo $tarif_model->reg_depositair_bimonth ?></td>
							</tr>
							<tr>
								<td align="left" valign="middle">Air-mail service - Monthly</td>
								<td align="center" valign="middle">$<?php echo $tarif_model->reg_depositair_month ?></td>
							</tr>
							<tr>
								<td align="left" valign="middle">&nbsp;</td>
								<td align="left" valign="middle">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="2" align="center" valign="middle">
								<table width="100%" border="0" align="center" cellpadding="3"
									cellspacing="3">
									<tr>
										<td colspan="3" align="center" valign="middle"><strong>Modify
										a fee</strong></td>
									</tr>
									<tr>
										<td width="61%" align="center" valign="middle"><select
											name="type">
											<option selected="selected">Select</option>
											<option value="reg_depositexp_now">Express service -
											On reception</option>
											<option value="reg_depositexp_week">Express service
											- Weekly</option>
											<option value="reg_depositexp_bimonth">Express
											service - Bimonthly</option>
											<option value="reg_depositexp_month">Express service
											- Monthly</option>
											<option value="reg_depositair_week">Air-mail service
											- Weekly</option>
											<option value="reg_depositair_bimonth">Air-mail
											service - Bimonthly</option>
											<option value="reg_depositair_month">Air-mail
											service - Monthly</option>
										</select></td>
										<td width="25%" align="center" valign="middle">New Value</td>
										<td width="14%" align="center" valign="middle"><input
											name="value" size="5" type="text" /></td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td colspan="3" height="30" align="center" valign="middle">
								<p><input type="submit" name="reg-program" /></p>
								</td>
							</tr>							
							
							</form>
						</table>
						</div>
						</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
		
		</td>
	</tr>
</table>
