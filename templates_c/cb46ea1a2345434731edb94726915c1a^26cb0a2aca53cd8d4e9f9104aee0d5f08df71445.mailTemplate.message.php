<?php /* Smarty version Smarty-3.1.21, created on 2017-11-14 11:16:08
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:9378449755877c7e93d61c7-51224048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1510676168,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '9378449755877c7e93d61c7-51224048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5877c7e93fd9a0_75880691',
  'variables' => 
  array (
    'charset' => 0,
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
    'client_name' => 0,
    'domain_reg_date' => 0,
    'domain_name' => 0,
    'domain_reg_period' => 0,
    'domain_first_payment_amount' => 0,
    'domain_next_due_date' => 0,
    'whmcs_url' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877c7e93fd9a0_75880691')) {function content_5877c7e93fd9a0_75880691($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<p>Este mensaje confirma que la compra de su dominio ha sido realiada con &eacute;xito. Los detalles de la misma son:</p>
<p>Fecha de Registro: <?php echo $_smarty_tpl->tpl_vars['domain_reg_date']->value;?>
<br /> Dominio: <?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
<br /> Per&iacute;odo registrado: <?php echo $_smarty_tpl->tpl_vars['domain_reg_period']->value;?>
<br /> Importe: <?php echo $_smarty_tpl->tpl_vars['domain_first_payment_amount']->value;?>
<br /> Pr&oacute;ximo vencimiento: <?php echo $_smarty_tpl->tpl_vars['domain_next_due_date']->value;?>
</p>
<p>Usted puede ingresar a nuestra &aacute;rea de clientes en <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
 para administrar su nuevo dominio.</p>
<p>Muchas gracias por utilizar nuestros servicios.</p>
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
