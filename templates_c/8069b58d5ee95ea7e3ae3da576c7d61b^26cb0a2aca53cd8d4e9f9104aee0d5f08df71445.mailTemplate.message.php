<?php /* Smarty version Smarty-3.1.21, created on 2017-12-04 17:36:51
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:19990095225877c7d1e951f4-42913973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1512427011,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '19990095225877c7d1e951f4-42913973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5877c7d1edb4b2_40547117',
  'variables' => 
  array (
    'charset' => 0,
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
    'client_name' => 0,
    'service_product_name' => 0,
    'service_domain' => 0,
    'service_first_payment_amount' => 0,
    'service_recurring_amount' => 0,
    'service_billing_cycle' => 0,
    'service_next_due_date' => 0,
    'service_username' => 0,
    'service_password' => 0,
    'service_server_ip' => 0,
    'service_server_name' => 0,
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
<?php if ($_valid && !is_callable('content_5877c7d1edb4b2_40547117')) {function content_5877c7d1edb4b2_40547117($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<p align="center"><strong>POR FAVOR LEA ATENTAMENTE ESTE MAIL Y CONSERVELO PARA FUTURAS REFERENCIAS<br /></strong></p>
<p>Muchas gracias por elegirnos. Su cuenta de hosting ha sido dada de alta y este mail contiene toda la informaci&oacute;n que usted necesita para comenzar a utilizarla</p>
<p>Si usted a pedido registrar un dominio durante su alta, por favor tenga en cuenta que no ser&aacute; visible en internet de manera inmediata. Este proceso se llama propagaci&oacute;n y puede demorar hasta 48 horas. Hasta que su dominio no se haya propagado su web y su email no funcionar&aacute;n, pero le proporcionamos una url temporaria que podra utilizar mientras tanto para poder subir archivos y ver su p&aacute;gina.</p>
<p><strong>Informaci�n de la nueva cuenta<br /></strong></p>
<p>Servicio de Hosting: <?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>
<br />Dominio: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />Importe del primer pago: <?php echo $_smarty_tpl->tpl_vars['service_first_payment_amount']->value;?>
<br />Importe del servicio: <?php echo $_smarty_tpl->tpl_vars['service_recurring_amount']->value;?>
<br />Ciclo de facturaci&oacute;n: <?php echo $_smarty_tpl->tpl_vars['service_billing_cycle']->value;?>
<br />Pr&oacute;ximo vencimiento: <?php echo $_smarty_tpl->tpl_vars['service_next_due_date']->value;?>
</p>
<p><strong>Detalles de acceso<br /></strong></p>
<p>Usuario: <?php echo $_smarty_tpl->tpl_vars['service_username']->value;?>
<br />Contrase&ntilde;a: <?php echo $_smarty_tpl->tpl_vars['service_password']->value;?>
</p>
<p>URL Panel de control: <a href="http://<?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
:2082/">https://<?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
:81/</a><br />Una vez que su dominio se propague, quiz�s quiera utilizar <a href="http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
:2082/">https://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
:81/</a></p>
<p><strong>Informaci&oacute;n del servidor<br /></strong></p>
<p>Nombre del servidor: <?php echo $_smarty_tpl->tpl_vars['service_server_name']->value;?>
<br />IP: <?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
</p>
<p>Si usted esta usando un nombre ya existente con su nueva cuenta de hosting, va a necesitar actualizar los DNS y apuntarlos a:</p>
<p>DNS 1: <?php echo $_smarty_tpl->tpl_vars['service_ns1']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns1_ip']->value;?>
)<br />DNS 2: <?php echo $_smarty_tpl->tpl_vars['service_ns2']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns2_ip']->value;?>
)<?php if ($_smarty_tpl->tpl_vars['service_ns3']->value) {?><br />DNS 3: <?php echo $_smarty_tpl->tpl_vars['service_ns3']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns3_ip']->value;?>
)<?php }
if ($_smarty_tpl->tpl_vars['service_ns4']->value) {?><br />DNS 4: <?php echo $_smarty_tpl->tpl_vars['service_ns4']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns4_ip']->value;?>
)<?php }?></p>
<p><strong>Para subir su sitio<br /></strong></p>
<p>Termporalmente usted puede utilizar la siguiente direcci&oacute;n para subir su sitio:</p>
<p>Host temporario de FTP: <?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
</p>
<p>Una vez que su dominio se haya propagado, puede acceder</p>
<p>Host de FTP: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
</p>
<p>Web URL: <a href="http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
">http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
</a></p>
<p><strong>Email Settings Configuraci�n de email</strong></p>
<p>Para las cuentas de mail que usted configure, deber&iacute;a utilizar los siguientes datos en su programa de mail:</p>
<p>POP3 Host Address: mail.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />SMTP Host Address: mail.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />Username: La direcci&oacute;n de mail que usted est&aacute; configurando<br />Password: Aquella que estableci&oacute; en el panel de control</p>
<p>Recuerde que el Servidor de salida requiere autenticaci&oacute;n.</p>
<p>Muchas gracias por elegirnos</p>
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
