<?php /* Smarty version Smarty-3.1.21, created on 2016-09-28 13:24:47
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:90826499657a26d04525737-05719419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1475083487,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '90826499657a26d04525737-05719419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a26d0455a669_72024428',
  'variables' => 
  array (
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a26d0455a669_72024428')) {function content_57a26d0455a669_72024428($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
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
</p><?php }} ?>
