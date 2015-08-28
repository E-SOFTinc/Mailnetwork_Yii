<script language="javascript">
function detail(selection)
{
	//get index # of selection
	tempIndex=selection.selectedIndex
	//get the text .text ou get the value .value
	selectedState=selection.options[tempIndex].value
	elem = document.getElementById('Shipment_shipdetail')
	elem.value=selectedState
}

function display(selection)
{
	//get index # of selection
	tempIndex=selection.selectedIndex
	//get the text .text ou get the value .value
	selectedState=selection.options[tempIndex].value
	elem = document.getElementById('Customer_bilstate')
	elem.value=selectedState
}	
</script>


<table width="780" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center">
        <h2>Customer #<?php echo $customer_model->bilkey ?></h2>
        </td>
    </tr>
    <tr>
        <td align="center">
        <h2><?php echo $customer_model->bilprenom . ' ' . $customer_model->bilnom; ?></h2>
        </td>
    </tr>
    <tr>
        <td align="center">
        <h2><?php echo $customer_model->bilcompany ?></h2>
        </td>
    </tr>
    <?php if(isset($admin)): ?>
    <tr>
        <td align="center">
        <h2 style="color: red">Total Account Balance: <?php echo '$'.number_format($customer_model->bilbalance, 2) ?></h2>
        </td>
    </tr>
    <tr>
        <td align="center" style="padding-top: 5px;"><a
            href="<?php echo Yii::app()->request->baseUrl; ?>/customer/admin">[Back
        to List]</a></td>
    </tr>
    <?php else: ?>
    <tr>
        <td align="center" style="padding-top: 5px;"><a
            href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">[Logout]</a></td>
    </tr>
    <?php endif; ?>
    <?php if(isset($admin)): ?>
    <tr>
        <td align="center">
        <table width="620" border="0" cellspacing="0" cellpadding="0">
            <!-- <tr><td align="right"><a href="#" class="formslinks">[ Add service ]</a></td></tr> -->
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
        </td>
    </tr>
    <?php else: ?>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <?php endif; ?>
    <tr>
        <td align="center" valign="top">
        <form id="form1" name="form1" method="post" action="">
        <table width="760" border="0" cellspacing="0" cellpadding="0">

        <?php foreach($commande as $c): ?>
            <tr>
                <td align="center" valign="top">
                <table width="620" border="0" cellspacing="0"
                    cellpadding="0">
                    <tr class="form-bg">
                        <td width="387" height="38" align="left"
                            valign="middle" class="forms_hed1">Services
                        (<?php echo $c->comstatus ?>)</td>
                        <td width="253" align="right" valign="middle"
                            class="forms_hed1"
                            style="font-weight: normal; font-size: 12px;">
                            <?php if(isset($admin)): ?> <a
                            href="<?php echo $this->createUrl('customer/editService', array('id'=>$c->comkey)); ?>"
                            class="formslinks"><strong>[ Modify service
                        ]</strong></a> &nbsp; &nbsp; <a
                            href="<?php echo $this->createUrl('commande/delete', array('id'=>$c->comkey)); ?>?returnUrl=<?php echo $this->createUrl('customer/update', array('id'=>$c->bilkey)); ?>"
                            class="formslinks delete">[ del ]</a></td>
                            <?php else: ?>
                        <a
                            href="<?php echo $this->createUrl('user/editService', array('id'=>$c->comkey)); ?>"
                            class="formslinks"><strong>[ Modify service
                        ]</strong></a>
                        </td>
                        <?php endif; ?>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" valign="top">
                        <div class="forms_headerbg">
                        <table width="600" border="0" cellspacing="0"
                            cellpadding="0">
                            <tr>
                                <td colspan="2" align="left"
                                    valign="top">
                                <table width="600" border="0"
                                    cellspacing="2" cellpadding="2">
                                    <tr>
                                        <td width="150" align="left"
                                            valign="top"
                                            style="line-height: 14px; background: #FFFCA8;"><b>
                                        Forwarding address:</b><br />
                                        <?php echo $c->dest_first . ' ' . $c->dest_last; ?><br />
                                        <?php if(!empty($c->dest_company)) echo $c->dest_company . '<br />' ?>
                                        <?php echo $c->dest_address1 ?><br />
                                        <?php if(!empty($c->dest_address2)) echo $c->dest_address2 . '<br />' ?>
                                        <?php echo $c->dest_city . ', ' . $c->dest_state . ' ' . $c->dest_zip ?><br />
                                        <?php echo $c->dest_country ?></td>
                                        <td width="1" bgcolor="#F9F9F7">&nbsp;</td>
                                        <td width="210" align="left"
                                            valign="top"
                                            style="line-height: 14px"><b>Mailing
                                        address</b> (<?php echo $c->box->goodcitykey ?>)<br>
                                        <?php echo $c->dest_mailname1; ?><br />
                                        <?php if(!empty($c->dest_mailco)) echo $c->dest_mailco . '<br />' ?>
                                        <?php echo $c->box->goodaddress . ' ' . $c->comnodesuite ?>
                                        <br />
                                        <?php echo $c->box->goodcity . ', ' . $c->box->goodstate . ' ' . $c->box->goodzip ?><br />
                                        <?php echo $c->box->goodcountry ?><br />
                                        <?php if(isset($admin)): ?> <b>Contact</b>:
                                        <?php echo $c->box->goodname ?><br />
                                        Phone: <?php echo $c->box->goodphone ?><br />
                                        Fax: <?php echo $c->box->goodfax ?><br />
                                        <a
                                            href="mailto:<?php echo $c->box->goodemail ?>"><?php echo $c->box->goodemail ?></a>
                                            <?php endif; ?></td>
                                        <td width="1" bgcolor="#F9F9F7">&nbsp;</td>
                                        <td width="240" align="left"
                                            valign="top"
                                            style="line-height: 14px"><br />
                                            <?php echo $c->comfrequency ?><br />
                                        Start: <?php echo $c->comdebut ?><br />
                                        End: <?php echo $c->comfin ?><br />
                                        Period: <?php echo $c->comperiod ?>
                                        months<br />
                                        <br />
                                        City Category: <?php echo $c->box->goodcategory ?></td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                            <!--							<tr>-->
                            <!--								<td colspan="2" align="left" valign="middle">&nbsp;</td>-->
                            <!--							</tr>-->

                        </table>

                        </div>
                        </td>
                    </tr>
                </table>
                </td>
            </tr>
            <tr>
                <td height="20"></td>
            </tr>            
            
            <?php endforeach; ?>
            
            
            <!-- List of Billing Activity -->
            
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'billing-form',
                'enableAjaxValidation'=>false,
            )); ?>

            <tr>
                <td align="center" valign="top">
                <table width="620" border="0" cellspacing="0"
                    cellpadding="0" id="billing">
                    <tr>
                    <?php if(isset($admin)): ?>
                        <td height="20" align="left" valign="middle"
                            class="forms_subhed1">Billing Activity <span
                            style="color: black; padding-left: 350px;">Balance:
                            <?php echo '$'.number_format($customer_model->bilbalance, 2) ?></span></td>
                            <?php else: ?>
                        <td height="20" align="left" valign="middle"
                            class="forms_subhed1">Shipping Information</td>
                            <?php endif; ?>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                        <div class="forms_headerbg"><?php if(isset($admin)): ?>

                        <table width="610" border="0" cellspacing="0"
                            cellpadding="0">
                            <tr>
                                <td align="left" valign="top">
                                <table id="shipping">
                                    <tbody>
                                        <tr>
                                            <th width="19%"
                                                align="center">Date</th>
                                            <th width="53%">Description<br />
                                            <?php echo CHtml::dropDownList('shipdetail', 'shipdetail', Shipment::getDescriptionOptions(), array('onchange'=>'detail(this)'))?></th>
                                            <th width="8%">Debit</th>
                                            <th width="8%">Credit</th>
                                            <th width="12%">&nbsp;</th>
                                        </tr>
                                        <tr>
<!--                                            <td><span class="row"> <input name="Shipment_shipdate" type="text" border="none" style="width:100%" value="<?php echo date('Y-m-d'); ?>" /></span></td>-->
<!--                                            <td><span class="row"><input maxlength="100" name="Shipment_shipdetail" type="text" border="none" style="width:100%" /> </span></td>-->
<!--                                            <td><span class="row"> <input name="Shipment_shipdebit" type="text" border="none" style="width:100%" /> </span></td>-->
<!--                                            <td><span class="row"> <input name="Shipment_shipcredit" type="text" border="none" style="width:100%" /> </span></td>-->
<!--                                            <td><span class="row buttons"> <input name="yt0" value="Create" type="submit" /> </span></td>-->

                                            <td><span class="row"><?php echo $form->textField($shipment_model,'shipdate',array('style'=>'width:100%', 'value'=>date('Y-m-d'))); ?></span></td>
                                            <td><span class="row"><?php echo $form->textField($shipment_model,'shipdetail',array('style'=>'width:100%')); ?></span></td>
                                            <td><span class="row"><?php echo $form->textField($shipment_model,'shipdebit',array('style'=>'width:100%')); ?></span></td>
                                            <td><span class="row"><?php echo $form->textField($shipment_model,'shipcredit',array('style'=>'width:100%')); ?></span></td>
                                            <td><span
                                                class="row buttons"> <input
                                                name="yt0"
                                                value="Create"
                                                type="submit" /> </span></td>

                                        </tr>
                                    </tbody>
                                </table>
                                </td>
                            </tr>
                        </table>

                        <?php endif; ?> 
                        
                        <?php if(!isset($admin)): ?> <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'shipment-grid',
                        'summaryText'=>'',
                        'dataProvider'=>$shipment_model->searchClient($customer->bilkey),
                        'filter'=>$shipment_model,
                        'columns'=>array(
                        'shipdate',
                        'shipdetail',
                        /*
                         'shipkey',
                         'comkey',
                         'bilkey',
                         'shipdebit',
                         'shipcredit',

                         array(
                         'class'=>'CButtonColumn',
                         'template'=>'{update} {delete}'
                         ),
                         */
                        ),
                        )); ?>
                         <?php else: ?> <?php  $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'shipment-grid',
                        'summaryText'=>'',
                        'dataProvider'=>$shipment_model->search($customer->bilkey),
                        //                      'filter'=>$shipment_model,
                        'columns'=>array(
                        'shipdate',
                        array(
                            'label'=>'[m]',
                            'class'=>'CLinkColumn',
                            'urlExpression'=>'Yii::app()->createUrl("shipment/update",array("id"=>$data->shipkey))',
                            'htmlOptions'=>array('style'=>'width:10px; text-align:center;', 'class'=>'shipment_modify'),
                        ),
                        'shipdetail',
                        //'shipdebit',
                        array(
                            'name'=>'shipdebit',
                            'value'=>'$data->shipdebit != 0 ? number_format($data->shipdebit, 2) : ""',
                            'htmlOptions'=>array('style'=>'text-align:right;'),
                        ),                      
                        //'shipcredit',
                        array(
                            'name'=>'shipcredit',
                            'value'=>'$data->shipcredit != 0 ? number_format($data->shipcredit, 2) : ""',
                            'htmlOptions'=>array('style'=>'text-align:right;'),
                        ),                                              
                         
                        /*
                         'shipkey',
                         'comkey',
                         'bilkey',
                         */
                        array(
                            'label'=>'[del]',
                            'class'=>'CLinkColumn',
                            'urlExpression'=>'Yii::app()->createUrl("shipment/delete",array("id"=>$data->shipkey))',
                            'htmlOptions'=>array('style'=>'width:10px; text-align:center;', 'class'=>'delete'),     
                        ),
                        ),
                        )); ?> <?php endif; ?></div>
                        </td>
                    </tr>
                </table>
                </td>
            </tr>
            <?php $this->endWidget(); ?>

            <tr>
                <td height="20"></td>
            </tr>            
            
            
            <tr>

            <?php $form=$this->beginWidget('CActiveForm', array(
            	'id'=>'customer-form',
            	'enableAjaxValidation'=>false,
            )); ?>

                <td height="30">
                <table width="620" border="0" align="center"
                    cellpadding="0" cellspacing="0" id="info">
                    <tr>
                        <td height="38" align="left" valign="middle"
                            background="<?php echo Yii::app()->request->baseUrl; ?>/images/form_hedbg.jpg"
                            class="forms_hed1">Customer Information
                        (Billing)</td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                        <div class="forms_headerbg">
                        <table width="600" border="0" cellspacing="0"
                            cellpadding="0">
                            <tr>
                                <td align="left" valign="top"></td>
                            </tr>
                            <?php if($form->errorSummary($customer_model)): ?>
                            <tr>
                                <td height="30" align="left"
                                    valign="middle"><strong><?php echo $form->errorSummary($customer_model); ?></strong></td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                                <td height="25" align="left"
                                    valign="top">
                                <table width="100%" border="0"
                                    cellspacing="3" cellpadding="3">
                                    <tbody>
                                        <tr>
                                            <td width="152" align="left"
                                                valign="middle">Login:</td>
                                                <?php if(isset($admin)): ?>
                                            <td width="195" align="left"
                                                valign="middle"><?php echo $form->textField($customer,'billogin',array('size'=>20,'maxlength'=>20)); ?></td>
                                                <?php else: ?>
                                            <td width="195" align="left"
                                                valign="middle"><?php echo $form->textField($customer,'billogin',array('size'=>20,'maxlength'=>20,'disabled'=>true)); ?></td>
                                                <?php endif; ?>
                                            <td width="136" align="left"
                                                valign="middle">Password:</td>
                                            <td width="78" align="left"
                                                valign="middle"><b><?php echo $form->textField($customer,'bilpass',array('size'=>20,'maxlength'=>20)); ?></b></td>
                                                <?php if(isset($admin)): ?>
                                            <td width="136" align="left"
                                                valign="middle">Status:</td>
                                            <td width="78" align="left"
                                                valign="middle"><b><?php echo $form->dropDownList($customer,'bilstatus',$customer->getBilStatusOptions()); ?></b></td>
                                                <?php endif; ?>
                                        </tr>
                                        <!--
					                      <tr>
					                        <td align="left" valign="middle">Company:</td>
					                        <td align="left" valign="middle"><b><?php echo $customer->bilcompany ?></b></td>
					                        <td align="left" valign="middle">Type of Business:</td>
					                        <td align="left" valign="middle"><b><?php echo $customer->bilbuztype ?></b></td>
					                      </tr>
					                    -->
                                    </tbody>
                                </table>
                                </td>
                            </tr>

                            <tr>
                                <td height="25" align="left"
                                    valign="top">
                                <table width="100%" border="0"
                                    cellspacing="3" cellpadding="3">
                                    <tbody>
                                        <tr align="center">
                                            <td height="1"
                                                align="center"
                                                valign="middle"
                                                colspan="6"
                                                style="border-bottom: 1px solid #000000;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6"></td>
                                        </tr>
                                        <tr>
                                            <td width="80" align="left"
                                                valign="middle">Company:</td>
                                            <td width="195" align="left"
                                                valign="middle"><?php echo $form->textField($customer_model,'bilcompany',array('size'=>20,'maxlength'=>100)); ?></td>
                                            <td width="80" align="left"
                                                valign="middle">Type of
                                            Business:</td>
                                            <td width="78" align="left"
                                                valign="middle"><?php echo $form->textField($customer_model,'bilbuztype',array('size'=>40,'maxlength'=>100)); ?></td>
                                        </tr>
                                        <!--
					                      <tr>
					                        <td align="left" valign="middle">Company:</td>
					                        <td align="left" valign="middle"><b><?php echo $customer->bilcompany ?></b></td>
					                        <td align="left" valign="middle">Type of Business:</td>
					                        <td align="left" valign="middle"><b><?php echo $customer->bilbuztype ?></b></td>
					                      </tr>
					                    -->
                                    </tbody>
                                </table>
                                </td>
                            </tr>

                            <tr>
                                <td align="left" valign="top">
                                <table width="100%" border="0"
                                    cellspacing="3" cellpadding="3">

                                    <tr align="center">
                                        <td height="1" align="center"
                                            valign="middle" colspan="3"
                                            style="border-bottom: 1px solid #000000;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <?php if(isset($admin)): ?>
                                    <tr>
                                        <td width="152" align="left"
                                            valign="middle">First Name<span
                                            class="start_txt">*</span></td>
                                        <td colspan="2" align="left"
                                            valign="middle"><?php echo $form->textField($customer_model,'bilprenom',array('size'=>40,'maxlength'=>50)); ?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle">Last
                                        Name<span class="start_txt">*</span></td>
                                        <td colspan="2" align="left"
                                            valign="middle"><?php echo $form->textField($customer_model,'bilnom',array('size'=>40,'maxlength'=>50)); ?></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" align="left"
                                            valign="top">Address<span
                                            class="start_txt">*</span></td>
                                        <td colspan="2" align="left"
                                            valign="middle"><?php echo $form->textField($customer_model,'biladdress1',array('size'=>40,'maxlength'=>100)); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="left"
                                            valign="middle"><?php echo $form->textField($customer_model,'biladdress2',array('size'=>40,'maxlength'=>100)); ?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle">City<span
                                            class="start_txt">*</span></td>
                                        <td colspan="2" align="left"
                                            valign="middle"><?php echo $form->textField($customer_model,'bilcity',array('size'=>40,'maxlength'=>100)); ?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle">State/Prov<span
                                            class="start_txt">*</span></td>

                                        <td width="394" align="left"
                                            valign="middle"><?php echo $form->textField($customer_model,'bilstate',array('size'=>10,'maxlength'=>4)); ?></td>
                                        <td width="164" align="left"
                                            valign="middle"><?php echo CHtml::dropDownList('', '', Customer::getStateOptions(), array('onchange'=>'display(this)'))?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle">Country<span
                                            class="start_txt">*</span></td>
                                        <td colspan="2" align="left"
                                            valign="middle"><?php echo $form->textField($customer_model,'bilcountry',array('size'=>40,'maxlength'=>100)); ?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle">Zip/Postal
                                        Code</td>
                                        <td colspan="2" align="left"
                                            valign="middle"><?php echo $form->textField($customer_model,'bilzip',array('size'=>10,'maxlength'=>100)); ?></td>
                                    </tr>
                                    <tr align="center">
                                        <td height="5" align="center"
                                            valign="middle" colspan="3"
                                            style="border-bottom: 1px solid #000000;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <td width="155" align="left"
                                            valign="middle">Phone 1<span
                                            class="start_txt">*</span></td>
                                        <td width="152" align="left"
                                            valign="middle"><?php echo $form->textField($customer_model,'bilphone1',array('size'=>40,'maxlength'=>50)); ?></td>
                                        <td width="403" align="left"
                                            valign="middle"><?php echo $form->dropDownList($customer_model,'bilphone1opt',$customer_model->getPhoneOptions()); ?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle">Phone
                                        2</td>
                                        <td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilphone2',array('size'=>40,'maxlength'=>50)); ?></td>
                                        <td align="left" valign="middle"><?php echo $form->dropDownList($customer_model,'bilphone2opt',$customer_model->getPhoneOptions()); ?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle">Phone
                                        3</td>
                                        <td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilphone3',array('size'=>40,'maxlength'=>50)); ?></td>
                                        <td align="left" valign="middle"><?php echo $form->dropDownList($customer_model,'bilphone3opt',$customer_model->getPhoneOptions()); ?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle">Fax</td>
                                        <td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilfax',array('size'=>40,'maxlength'=>50)); ?></td>
                                        <td align="left" valign="middle">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle"><b><?php if(isset($admin)): ?><a
                                            href="mailto:<?php echo $customer_model->bilemail ?>"><?php endif; ?>E-mail
                                        1<?php if(isset($admin)): ?></a><?php endif; ?></b><span
                                            class="start_txt">*</span></td>
                                        <td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilemail',array('size'=>40,'maxlength'=>50)); ?></td>
                                        <td align="left" valign="middle"><?php if(isset($admin)): ?><a
                                            href="<?php echo $this->createUrl('customer/sendStatement', array('id'=>$customer_model->bilkey)); ?>">[
                                        Send statement ]</a><?php endif; ?></td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle"><b><?php if(isset($admin)): ?><a
                                            href="mailto:<?php echo $customer_model->bilemail2 ?>"><?php endif; ?>E-mail
                                        2<?php if(isset($admin)): ?></a><?php endif; ?></b></td>
                                        <td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilemail2',array('size'=>40,'maxlength'=>50)); ?></td>
                                        <td align="left" valign="middle">&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td height="5" align="center"
                                            valign="middle" colspan="3"
                                            style="border-bottom: 1px solid #000000;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                    <?php if(isset($admin)): ?>
                                    <tr>
                                        <?php if(isset($admin)): ?>
                                        <td align="left" valign="middle">How
                                        they heard about Mailnetwork</td>
                                        <?php else: ?>
                                        <td align="left" valign="middle">How
                                        you heard about Mailnetwork</td>
                                        <?php endif; ?>
                                        <td align="left" valign="middle"><?php echo $form->textField($customer_model,'bilhow',array('size'=>40,'maxlength'=>50)); ?></td>
                                        <td align="left" valign="middle">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="middle">Additional
                                        Information</td>
                                        <td colspan="2" align="left"
                                            valign="middle"><?php echo $form->textArea($customer_model,'bilnote',array('rows'=>6, 'cols'=>50)); ?></td>
                                    </tr>

                                    <tr>
                                        <td align="left" valign="middle">&nbsp;</td>
                                        <td align="left" valign="middle">&nbsp;</td>
                                        <td colspan="2" align="left"
                                            valign="middle">&nbsp;</td>
                                    </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <td colspan="4" align="center"
                                            valign="middle"><input
                                            name="action2"
                                            value=" Modify Customer Information"
                                            type="submit" /></td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                        </table>
                        </div>
                        </td>
                    </tr>
                </table>
                </td>
            </tr>
            <tr>
                <td height="30"></td>
            </tr>

            <?php $this->endWidget(); ?>

            <tr>
                <td height="30"></td>
            </tr>
            <tr>
                <td align="center">&nbsp;</td>
            </tr>

        </table>
        </form>
        </td>
    </tr>
</table>
