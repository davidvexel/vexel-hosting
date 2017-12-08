<?php /* Smarty version Smarty-3.1.21, created on 2017-12-01 10:24:03
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:85980231158262c1cc28fc3-67883323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1512141843,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '85980231158262c1cc28fc3-67883323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58262c1cc4f467_51949030',
  'variables' => 
  array (
    'charset' => 0,
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
    'client_name' => 0,
    'invoice_num' => 0,
    'invoice_date_created' => 0,
    'invoice_html_contents' => 0,
    'invoice_last_payment_amount' => 0,
    'invoice_last_payment_transid' => 0,
    'invoice_amount_paid' => 0,
    'invoice_balance' => 0,
    'invoice_status' => 0,
    'signature' => 0,
    'whmcs_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58262c1cc4f467_51949030')) {function content_58262c1cc4f467_51949030($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <style type="text/css">
            [EmailCSS]
        </style>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
                                        <tr>
                                            <td valign="top" class="headerContent">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['company_domain']->value;?>
">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['company_logo_url']->value;?>
" style="max-width:600px;padding:20px" id="headerImage" alt="<?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
" />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContent">
<p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>Este es un recibo de pago de la factura n&uacute;mero <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
 enviada el <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['invoice_html_contents']->value;?>
</p>
<p>Monto: <?php echo $_smarty_tpl->tpl_vars['invoice_last_payment_amount']->value;?>
<br />Transacci&oacute;n #: <?php echo $_smarty_tpl->tpl_vars['invoice_last_payment_transid']->value;?>
<br />Total abonado: <?php echo $_smarty_tpl->tpl_vars['invoice_amount_paid']->value;?>
<br />Saldo: <?php echo $_smarty_tpl->tpl_vars['invoice_balance']->value;?>
<br />Estado: <?php echo $_smarty_tpl->tpl_vars['invoice_status']->value;?>
</p>
<p>Usted puede revisar su historial de pagos en cualquier momento ingresando en nuestra &aacute;rea de clientes.</p>
<p>Nota: El presente email es un recibo oficial de su pago</p>
<p>Muchas Gracias</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p>
</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
                                        <tr>
                                            <td valign="top" class="footerContent">
                                                 <a href="<?php echo $_smarty_tpl->tpl_vars['company_domain']->value;?>
">visit our website</a>
                                                <span class="hide-mobile"> | </span>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
">log in to your account</a>
                                                <span class="hide-mobile"> | </span>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
submitticket.php">get support</a> <br />
                                                Copyright © <?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
, All rights reserved.
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html><?php }} ?>
