<?php /* Smarty version Smarty-3.1.21, created on 2017-11-14 11:14:30
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:9235237215a0b1666403600-73955392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1510676070,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '9235237215a0b1666403600-73955392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charset' => 0,
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
    'client_name' => 0,
    'service_product_name' => 0,
    'service_dedicated_ip' => 0,
    'service_password' => 0,
    'service_assigned_ips' => 0,
    'service_domain' => 0,
    'service_ns1' => 0,
    'service_ns2' => 0,
    'whmcs_url' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a0b1666423078_88792173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b1666423078_88792173')) {function content_5a0b1666423078_88792173($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
,<br /> <br /> <strong>POR FAVOR IMPRIMA ESTE EMAIL COMO REGISTRO Y L&Eacute;ALO COMPLETAMENTE</strong></p>
<p>Estamos complacidos de informarle que el servidor que usted solicit&oacute; ha sido dado de alta y se encuentra funcional.</p>
<p><strong>Detalles del servidor<br /> </strong>=============================</p>
<p><?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>
</p>
<p>IP Principal: <?php echo $_smarty_tpl->tpl_vars['service_dedicated_ip']->value;?>
<br /> Root password: <?php echo $_smarty_tpl->tpl_vars['service_password']->value;?>
</p>
<p>Direcciones IP: <br /> <?php echo $_smarty_tpl->tpl_vars['service_assigned_ips']->value;?>
</p>
<p>Nombre del servidor: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
</p>
<p><strong>Acceso WHM <br /> </strong>=============================<br /> <a href="http://xxxxx:2086/">http://xxxxx:2086</a><br /> Usuario: root<br /> Contrase&ntilde;a: <?php echo $_smarty_tpl->tpl_vars['service_password']->value;?>
</p>
<p><strong>Direcciones de Servidores DNS</strong><br /> =============================<br /> Las direcciones DNS que usted deber� utilizar son: <br /> DNS primario: <?php echo $_smarty_tpl->tpl_vars['service_ns1']->value;?>
<br /> DNS secundario: <?php echo $_smarty_tpl->tpl_vars['service_ns2']->value;?>
</p>
<p>Usted deber&iacute;a ingresar a la p&aacute;gina donde registro su dominio y especificar ambos servidores dns.</p>
<p>Una vez realizado, tomar&aacute; entre 34 y 48 horas la delegaci&oacute;n de su dominio a los DNS.</p>
<p><strong>Acceso SSH</strong></p>
<p>=============================<br /> Direccion IP principal: xxxxxxxx<br /> Nombre del servidor: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br /> Root Password: xxxxxxxx</p>
<p>Usted puede ingresar a su servidor utilizando una herramienta simple y gratuita llamada Putty, que puede descargar de <a href="http://www.securitytools.net/mirrors/putty/">http://www.securitytools.net/mirrors/putty/</a></p>
<p><strong>Soporte</strong><br /> =============================</p>
<p>Por cualquier soporte que necesite, por favor abra un ticket en <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
</p>
<p>Por favor incluya cualquier informaci&oacute;n necesaria para proveerle un servicio r&aacute;pido, como puede ser el password de root, nombres de dominio y una descripcion del problema o la asistencia que necesita. Esto ayudar&aacute; a que nuestro equipo de soporte puedan comenzar el diagn&oacute;stico de manera inmediata.</p>
<p>=============================</p>
<p>Muchas gracias por elegirnos. Quedamos a su disposici&oacute;n para lo que necesite.</p>
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
