<?php /* Smarty version Smarty-3.1.21, created on 2017-11-27 12:18:00
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:13783065455877b665ecbe51-79848315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1511803080,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '13783065455877b665ecbe51-79848315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5877b665ee6ef9_94388708',
  'variables' => 
  array (
    'charset' => 0,
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
    'client_name' => 0,
    'order_number' => 0,
    'order_details' => 0,
    'signature' => 0,
    'whmcs_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877b665ee6ef9_94388708')) {function content_5877b665ee6ef9_94388708($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<p>Hemos recibido su orden y ser&aacute; procesada en breve. Los detalles de la misma son:</p>
<p>N&uacute;mero de orden: <strong><?php echo $_smarty_tpl->tpl_vars['order_number']->value;?>
</strong></p>
<p><?php echo $_smarty_tpl->tpl_vars['order_details']->value;?>
</p>
<p>Usted recibir&aacute; un email nuestro en breve, una vez que su cuenta haya sido dada de alta. Por favor conserve su n&uacute;mero de orden en caso de que necesite contactarse con nosotros acerca de ella.</p>
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
