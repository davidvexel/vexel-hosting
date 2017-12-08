<?php /* Smarty version Smarty-3.1.21, created on 2017-12-04 17:36:51
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:11720245975877c7d1edf484-44682768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1512427011,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '11720245975877c7d1edf484-44682768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5877c7d1f10dd2_88024291',
  'variables' => 
  array (
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877c7d1f10dd2_88024291')) {function content_5877c7d1f10dd2_88024291($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
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
</p><?php }} ?>
