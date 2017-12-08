<?php /* Smarty version Smarty-3.1.21, created on 2016-10-11 14:04:36
         compiled from "/var/www/html/templates/six/viewinvoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193385840357fd29b4eb21a6-58783310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c3efbee1fec617d4450f2c92715132b1776a908' => 
    array (
      0 => '/var/www/html/templates/six/viewinvoice.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193385840357fd29b4eb21a6-58783310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charset' => 0,
    'companyname' => 0,
    'pagetitle' => 0,
    'BASE_PATH_CSS' => 0,
    'template' => 0,
    'invalidInvoiceIdRequested' => 0,
    'LANG' => 0,
    'logo' => 0,
    'status' => 0,
    'datedue' => 0,
    'paymentbutton' => 0,
    'paymentSuccess' => 0,
    'pendingReview' => 0,
    'paymentFailed' => 0,
    'offlineReview' => 0,
    'payto' => 0,
    'clientsdetails' => 0,
    'customfields' => 0,
    'customfield' => 0,
    'allowchangegateway' => 0,
    'invoiceid' => 0,
    'gatewaydropdown' => 0,
    'paymentmethod' => 0,
    'date' => 0,
    'manualapplycredit' => 0,
    'totalcredit' => 0,
    'creditamount' => 0,
    'notes' => 0,
    'invoiceitems' => 0,
    'item' => 0,
    'subtotal' => 0,
    'taxrate' => 0,
    'taxname' => 0,
    'tax' => 0,
    'taxrate2' => 0,
    'taxname2' => 0,
    'tax2' => 0,
    'credit' => 0,
    'total' => 0,
    'transactions' => 0,
    'transaction' => 0,
    'balance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57fd29b50b0829_59303364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fd29b50b0829_59303364')) {function content_57fd29b50b0829_59303364($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>

    <!-- Bootstrap -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/font-awesome.min.css" rel="stylesheet">

    <!-- Styling -->
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/overrides.css" rel="stylesheet">
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/styles.css" rel="stylesheet">
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/invoice.css" rel="stylesheet">

</head>
<body>

    <div class="container-fluid invoice-container">

        <?php if ($_smarty_tpl->tpl_vars['invalidInvoiceIdRequested']->value) {?>

            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"danger",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['error'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoiceserror'],'bodyTextCenter'=>true), 0);?>


        <?php } else { ?>

            <div class="row">
                <div class="col-sm-7">

                    <?php if ($_smarty_tpl->tpl_vars['logo']->value) {?>
                        <p><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" /></p>
                    <?php } else { ?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</h2>
                    <?php }?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h3>

                </div>
                <div class="col-sm-5 text-center">

                    <div class="invoice-status">
                        <?php if ($_smarty_tpl->tpl_vars['status']->value=="Draft") {?>
                            <span class="draft"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdraft'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="Unpaid") {?>
                            <span class="unpaid"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesunpaid'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="Paid") {?>
                            <span class="paid"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicespaid'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="Refunded") {?>
                            <span class="refunded"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesrefunded'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="Cancelled") {?>
                            <span class="cancelled"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicescancelled'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="Collections") {?>
                            <span class="collections"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicescollections'];?>
</span>
                        <?php }?>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['status']->value=="Unpaid"||$_smarty_tpl->tpl_vars['status']->value=="Draft") {?>
                        <div class="small-text">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatedue'];?>
: <?php echo $_smarty_tpl->tpl_vars['datedue']->value;?>

                        </div>
                        <div class="payment-btn-container" align="center">
                            <?php echo $_smarty_tpl->tpl_vars['paymentbutton']->value;?>

                        </div>
                    <?php }?>

                </div>
            </div>

            <hr>

            <?php if ($_smarty_tpl->tpl_vars['paymentSuccess']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"success",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['success'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicepaymentsuccessconfirmation'],'bodyTextCenter'=>true), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['pendingReview']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['success'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicepaymentpendingreview'],'bodyTextCenter'=>true), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['paymentFailed']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"danger",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['error'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicepaymentfailedconfirmation'],'bodyTextCenter'=>true), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['offlineReview']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['success'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoiceofflinepaid'],'bodyTextCenter'=>true), 0);?>

            <?php }?>

            <div class="row">
                <div class="col-sm-6 pull-sm-right text-right-sm">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicespayto'];?>
:</strong>
                    <address class="small-text">
                        <?php echo $_smarty_tpl->tpl_vars['payto']->value;?>

                    </address>
                </div>
                <div class="col-sm-6">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesinvoicedto'];?>
:</strong>
                    <address class="small-text">
                        <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['companyname']) {
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
<br /><?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>
<br />
                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address1'];?>
, <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address2'];?>
<br />
                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>
, <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['postcode'];?>
<br />
                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['country'];?>

                        <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                        <br /><br />
                        <?php  $_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customfield']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->key => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
?>
                        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['fieldname'];?>
: <?php echo $_smarty_tpl->tpl_vars['customfield']->value['value'];?>
<br />
                        <?php } ?>
                        <?php }?>
                    </address>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentmethod'];?>
:</strong><br>
                    <span class="small-text">
                        <?php if ($_smarty_tpl->tpl_vars['status']->value=="Unpaid"&&$_smarty_tpl->tpl_vars['allowchangegateway']->value) {?>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
" class="form-inline">
                                <?php echo $_smarty_tpl->tpl_vars['gatewaydropdown']->value;?>

                            </form>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;?>

                        <?php }?>
                    </span>
                    <br /><br />
                </div>
                <div class="col-sm-6 text-right-sm">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatecreated'];?>
:</strong><br>
                    <span class="small-text">
                        <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
<br><br>
                    </span>
                </div>
            </div>

            <br />

            <?php if ($_smarty_tpl->tpl_vars['manualapplycredit']->value) {?>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditapply'];?>
</strong></h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
">
                            <input type="hidden" name="applycredit" value="true" />
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditdesc1'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['totalcredit']->value;?>
</strong>. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditdesc2'];?>
. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditamount'];?>
:
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">
                                    <div class="input-group">
                                        <input type="text" name="creditamount" value="<?php echo $_smarty_tpl->tpl_vars['creditamount']->value;?>
" class="form-control" />
                                        <span class="input-group-btn">
                                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditapply'];?>
" class="btn btn-success" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicesnotes'],'bodyContent'=>$_smarty_tpl->tpl_vars['notes']->value), 0);?>

            <?php }?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicelineitems'];?>
</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdescription'];?>
</strong></td>
                                    <td width="20%" class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesamount'];?>
</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invoiceitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];
if ($_smarty_tpl->tpl_vars['item']->value['taxed']=="true") {?> *<?php }?></td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td class="total-row text-right"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicessubtotal'];?>
</strong></td>
                                    <td class="total-row text-center"><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
                                </tr>
                                <?php if ($_smarty_tpl->tpl_vars['taxrate']->value) {?>
                                    <tr>
                                        <td class="total-row text-right"><strong><?php echo $_smarty_tpl->tpl_vars['taxrate']->value;?>
% <?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
</strong></td>
                                        <td class="total-row text-center"><?php echo $_smarty_tpl->tpl_vars['tax']->value;?>
</td>
                                    </tr>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['taxrate2']->value) {?>
                                    <tr>
                                        <td class="total-row text-right"><strong><?php echo $_smarty_tpl->tpl_vars['taxrate2']->value;?>
% <?php echo $_smarty_tpl->tpl_vars['taxname2']->value;?>
</strong></td>
                                        <td class="total-row text-center"><?php echo $_smarty_tpl->tpl_vars['tax2']->value;?>
</td>
                                    </tr>
                                <?php }?>
                                <tr>
                                    <td class="total-row text-right"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicescredit'];?>
</strong></td>
                                    <td class="total-row text-center"><?php echo $_smarty_tpl->tpl_vars['credit']->value;?>
</td>
                                </tr>
                                <tr>
                                    <td class="total-row text-right"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestotal'];?>
</strong></td>
                                    <td class="total-row text-center"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['taxrate']->value) {?>
                <p>* <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestaxindicator'];?>
</p>
            <?php }?>

            <div class="transactions-container small-text">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransdate'];?>
</strong></td>
                                <td class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransgateway'];?>
</strong></td>
                                <td class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransid'];?>
</strong></td>
                                <td class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransamount'];?>
</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['transaction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['transaction']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transactions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->key => $_smarty_tpl->tpl_vars['transaction']->value) {
$_smarty_tpl->tpl_vars['transaction']->_loop = true;
?>
                                <tr>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['date'];?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['gateway'];?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['transid'];?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['amount'];?>
</td>
                                </tr>
                            <?php }
if (!$_smarty_tpl->tpl_vars['transaction']->_loop) {
?>
                                <tr>
                                    <td class="text-center" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransnonefound'];?>
</td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td class="text-right" colspan="3"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesbalance'];?>
</strong></td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="pull-right btn-group btn-group-sm hidden-print">
                <a href="javascript:window.print()" class="btn btn-default"><i class="fa fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['print'];?>
</a>
                <a href="dl.php?type=i&amp;id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
" class="btn btn-default"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdownload'];?>
</a>
            </div>

        <?php }?>

    </div>

    <p class="text-center hidden-print"><a href="clientarea.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesbacktoclientarea'];?>
</a></a></p>

</body>
</html>
<?php }} ?>
