<?php /* Smarty version Smarty-3.1.21, created on 2016-09-28 13:24:47
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:150625250157a26d044d97e5-25625082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1475083487,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '150625250157a26d044d97e5-25625082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a26d04522805_67167174',
  'variables' => 
  array (
    'charset' => 0,
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
    'client_name' => 0,
    'service_product_name' => 0,
    'service_domain' => 0,
    'service_recurring_amount' => 0,
    'service_billing_cycle' => 0,
    'service_next_due_date' => 0,
    'service_username' => 0,
    'service_password' => 0,
    'service_server_ip' => 0,
    'service_ns1' => 0,
    'service_ns1_ip' => 0,
    'service_ns2' => 0,
    'service_ns2_ip' => 0,
    'service_ns3' => 0,
    'service_ns3_ip' => 0,
    'service_ns4' => 0,
    'service_ns4_ip' => 0,
    'signature' => 0,
    'whmcs_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a26d04522805_67167174')) {function content_57a26d04522805_67167174($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<p align="center"><strong>POR FAVOR LEA ESTA INFORMACIÓN Y CONSERVELA</strong></p>
<p>Gracis por comprar con nosotros. Su cuenta de hosting ha sido configurada y este correo contiene toda la información necesaria para comenzar a utilizar su servicio.</p>
<p>Si usted ha comprado un dominio tambien, considere que no estara visible en internet inmediatamente. Este proceso es llamado propagación y puede tomar hasta 48 horas. Mientras su dominio es propagado, su sitio web e email no estaran disponibles, le enviamos una URL temporal que puede usar para visualizar su sitio asi como cargar archivos.</p>
<p><strong>Información de la Cuenta<br /><br /></strong>Paquete de hosting: <?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>
</p>
<p>Dominio: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />Costo: <?php echo $_smarty_tpl->tpl_vars['service_recurring_amount']->value;?>
<br />Ciclo de facturación: <?php echo $_smarty_tpl->tpl_vars['service_billing_cycle']->value;?>
<br />Vencimiento: <?php echo $_smarty_tpl->tpl_vars['service_next_due_date']->value;?>
</p>
<p><strong>Datos de Acceso</strong></p>
<p>Usuario: <?php echo $_smarty_tpl->tpl_vars['service_username']->value;?>
<br />Contraseña: <?php echo $_smarty_tpl->tpl_vars['service_password']->value;?>
</p>
<p>Panel de control: <a href="http://<?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
:2082/">http://<?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
:2082/</a><br />Una vez que su dominio sea propagado podra utilizar <a href="http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
:2082/">http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
:2082/</a></p>
<p><strong>Información del Servidor</strong></p>
<p>Server IP: <?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
</p>
<p>Si usted esta utilizando un dominio existente con su nueva cuenta de hosting, necesita actualizar los DNS de su dominio para apuntar a nuestro servidor.</p>
<p>Nameserver 1: <?php echo $_smarty_tpl->tpl_vars['service_ns1']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns1_ip']->value;?>
)<br />Nameserver 2: <?php echo $_smarty_tpl->tpl_vars['service_ns2']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns2_ip']->value;?>
)<?php if ($_smarty_tpl->tpl_vars['service_ns3']->value) {?><br />Nameserver 3: <?php echo $_smarty_tpl->tpl_vars['service_ns3']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns3_ip']->value;?>
)<?php }
if ($_smarty_tpl->tpl_vars['service_ns4']->value) {?><br />Nameserver 4: <?php echo $_smarty_tpl->tpl_vars['service_ns4']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns4_ip']->value;?>
)<?php }?></p>
<p><strong>Subir archivos a su sitio web</strong></p>
<p>FTP Temporal <?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
</p>
<p>URL Temporal: <a href="http://<?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
/~<?php echo $_smarty_tpl->tpl_vars['service_username']->value;?>
/">http://<?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
/~<?php echo $_smarty_tpl->tpl_vars['service_username']->value;?>
/</a></p>
<p>Una vez que su dominio sea propagado podra utilizar:<br /><br />FTP: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />Sitio web: <a href="http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
">http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
</a></p>
<p><strong>Configuración de Correo</strong></p>
<p>Para configurar sus cuentas de correo, utilice los siguientes datos en su programa:</p>
<p>Servidor de Correo POP3: mail.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />Servidor de Correo SMTP: mail.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />Usuario: La dirección de correo que desea configurar<br />Contraseña: La que ha especificado en el panel de control</p>
<p>¡Gracias por elegirnos!</p>
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
