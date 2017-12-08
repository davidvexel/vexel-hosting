<?php /* Smarty version Smarty-3.1.21, created on 2017-11-24 08:00:02
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:2070504494586e43527564d4-82173353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1511528402,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '2070504494586e43527564d4-82173353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586e4352780804_02746325',
  'variables' => 
  array (
    'charset' => 0,
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
    'client_name' => 0,
    'invoice_num' => 0,
    'invoice_date_created' => 0,
    'invoice_date_due' => 0,
    'invoice_payment_method' => 0,
    'invoice_balance' => 0,
    'invoice_link' => 0,
    'signature' => 0,
    'whmcs_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586e4352780804_02746325')) {function content_586e4352780804_02746325($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<p>Este es un recordatorio de que su factura n&uacute;mero <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
, que ha sido generada el <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
 vence el <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
.</p>
<p>Su forma de pago es: <?php echo $_smarty_tpl->tpl_vars['invoice_payment_method']->value;?>
</p>
<p>Factura: <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
<br />Monto: <?php echo $_smarty_tpl->tpl_vars['invoice_balance']->value;?>
<br />Vencimiento: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
</p>
<p>Usted puede ingresar en nuestra &aacute;rea de clientes para ver y pagar su factura en <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
</p>
<p>Muchas gracias</p>
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
