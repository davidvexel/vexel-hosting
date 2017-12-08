<?php /* Smarty version Smarty-3.1.21, created on 2017-10-04 08:00:32
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:34098105558738951c86502-46475161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1507118432,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '34098105558738951c86502-46475161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58738951cc7a23_07560584',
  'variables' => 
  array (
    'charset' => 0,
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
    'client_name' => 0,
    'days_until_expiry' => 0,
    'domain_days_until_expiry' => 0,
    'expiring_domains' => 0,
    'domain' => 0,
    'domain_name' => 0,
    'domain_next_due_date' => 0,
    'domain_days_until_nextdue' => 0,
    'whmcs_link' => 0,
    'signature' => 0,
    'whmcs_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58738951cc7a23_07560584')) {function content_58738951cc7a23_07560584($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<p><?php if ($_smarty_tpl->tpl_vars['days_until_expiry']->value) {?>El/Los dominio(s) listados debajo van a expirar en los pr&oacute;ximos <?php echo $_smarty_tpl->tpl_vars['days_until_expiry']->value;?>
 d&iacute;as.<?php } else { ?>El/Los dominio(s) listados debajo van a expiran en <?php echo $_smarty_tpl->tpl_vars['domain_days_until_expiry']->value;?>
 d&iacute;as. Renueve ahora antes que sea demasiado tarde...<?php }?></p>
<p><?php if ($_smarty_tpl->tpl_vars['expiring_domains']->value) {
$_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['expiring_domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['domain']->value['nextduedate'];?>
 <strong>(<?php echo $_smarty_tpl->tpl_vars['domain']->value['days'];?>
 D&iacute;as)</strong><br /><?php }
} else {
echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['domain_next_due_date']->value;?>
 <strong>(<?php echo $_smarty_tpl->tpl_vars['domain_days_until_nextdue']->value;?>
 D&iacute;as)</strong><?php }?></p>
<p>Para asegurarse de que el dominio no expire, deber&iacute;a renovar ahora. Puede hacer esto desde la administraci&oacute;n de dominios en nuestra &aacute;rea de clientes: <?php echo $_smarty_tpl->tpl_vars['whmcs_link']->value;?>
</p>
<p>Si dejara que su dominio expire, usted va a poder renovarlo hasta 30 d&iacute;as posteriores a la fecha de vencimiento. Durante este tiempo, el dominio no estar&iacute;a accesible as&iacute; que ningun servicio web ni de email asociado al mismo funcionar&iacute;a.</p>
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
