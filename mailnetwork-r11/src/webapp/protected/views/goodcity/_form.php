	<div id="cityinfo">
		<form name="goodcity" method="POST" action="goodcityform.php" enctype="multipart/form-data">		
			<table border="0" cellspacing="0" cellpadding="2" style="width: 50%; margin:0 auto;">
				<tr><td COLSPAN="2"><hr size=1 noshade></td></tr>
				<tr><td>Address</td><td><input type="text" size=50 name="goodaddress" fType="string" id="goodaddress" value="<?php echo $goodcity_model->goodaddress ?>"/></td></tr>
				<tr><td>Center</td><td><input type="text" size=50 name="goodcenter" fType="string" id="goodcenter" value="<?php echo $goodcity_model->goodcenter ?>"/></td></tr>
				<tr><td>City</td><td><input type="text" size=50 name="goodcity" fType="string" id="goodcity" value="<?php echo $goodcity_model->goodcity ?>"/></td></tr>	
				<tr><td>State/Prov</td>
					<td>
						<input type=TEXT size=50 name="goodstate" value="NF" size=20>&nbsp;&nbsp;
						<select name="goodstateRef" id="goodstateRef" onchange="document.getElementById('goodstate').value=this.options[this.selectedIndex].value;">
			<?php	
//			    $goodstateOptions = _STATE_OPTIONS_;
//			    $optionValueString = 'value="'.$goodcity_model->goodstate.'"';
//			    $selecedOptionValue = 'value="'.$goodcity_model->goodstate.'" selected ';
//			    echo str_replace($optionValueString, $selecedOptionValue, $goodstateOptions);
			  ?>
						</select>
					</td>
				</tr>
				<tr><td>Country</td><td><input type="text" size=50 name="goodcountry" fType="string" id="goodcountry" value="<?php echo $goodcity_model->goodcountry ?>"/></td></tr>
				<tr><td>Zip/Postal Code</td><td><input type="text" name="goodzip" fType="string" id="goodzip" value="<?php echo $goodcity_model->goodzip ?>"/></td></tr>
				<tr><td>Category</td><td><input type="text" name="goodcategory" fType="string" id="goodcategory" value="<?php echo $goodcity_model->goodcategory ?>"/></td></tr>
				<tr><td COLSPAN="2"><hr size=1 noshade></td></tr>
				<tr><td>Contact name</td><td><input type="text" name="goodname" fType="string" id="goodname" value="<?php echo $goodcity_model->goodname ?>"/></td></tr>
				<tr><td>Phone</td><td><input type="text" name="goodphone" fType="string" id="goodphone" value="<?php echo $goodcity_model->goodphone ?>"/></tr>
				<tr><td>Fax</td><td><input type="text" name="goodfax" fType="string" id="goodfax" value="<?php echo $goodcity_model->goodfax ?>"/></td></tr>
				<tr><td>E-mail</td><td><input type="text" size=50 name="goodemail" fType="string" id="goodemail" value="<?php echo $goodcity_model->goodemail ?>"/></td></tr>
				<tr><td>City Picture</td>
					<td>
					<?php 
						if($goodcity_model->goodcitypic == ""){
								echo '<input type="file" name="cityPicture" fType="file" id="cityPicture" value=""/>'; 
						}else{
							echo '<span id="span_cityPicture"><span class="anchorlink" onclick="downloadFile(\'cityPicture\')">'.basename($goodcity_model->goodcitypic).'</span>							 	
								  <image src ="../style/images/delete1.gif" onclick="deleteAttachment(\'cityPicture\', \'goodcity\', '.$goodcity_model->goodcitykey.', \'goodcitypic\' )"></image></span>												
								 <input type="file" name="cityPicture" fType="file" id="cityPicture" value=""/>';
						}
					?>
					<input type="hidden" name="hide_cityPicture" fType="hiddenfile" id="hide_cityPicture" value="<?php echo $goodcity_model->goodcitypic ?>"/><br/>
					</td>
				</tr>
				<tr><td COLSPAN="2"><hr size=1 noshade></td></tr>
			</table>
			<table BORDER="0" CELLSPACING="0" CELLPADDING="2" style="width: 40%;margin-left: 30%;">
				<TR>
					<TD bgcolor="#e0e0e0">Fee 6 months<BR><input type="text" name="goodsix" fType="string" id="goodsix" value="<?php echo $goodcity_model->goodsix ?>"/></TD>
					<TD bgcolor="#e0e0e0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</TD>
					<TD bgcolor="#e0e0e0">Fee 12 months <BR><input type="text" name="gooddouze" fType="string" id="gooddouze" value="<?php echo $goodcity_model->gooddouze ?>"/></TD>
				</TR>
				<tr><td COLSPAN="3">Note<br><textarea name="goodnote" id="goodnote" rows="5" cols="40"><?php echo $goodcity_model->goodnote ?></textarea></td></tr>
			</table>
			<div style="width: 40%;margin-left: 30%;"> 
				<input	TYPE=SUBMIT NAME=action VALUE="Update"><br><br>
				<A href="" onClick="history.go(-1); return false"><B>[ Go Back ]</B></a>
			</div>
			<iframe name="downloadFrame" id="downloadFrame" src="" width="0px" height="0px" style="display:none;"></iframe>
			<input type="hidden" id="hidden_goodcitykey" name="hidden_goodcitykey" value="<?php echo $goodcity_model->goodcitykey ?>" />
			
		</form>
	</div>