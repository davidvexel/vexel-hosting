<?php /* Smarty version Smarty-3.1.21, created on 2017-11-14 11:14:30
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:16308308645a0b1666426065-06596003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1510676070,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '16308308645a0b1666426065-06596003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
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
  'unifunc' => 'content_5a0b1666437cc4_57505092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b1666437cc4_57505092')) {function content_5a0b1666437cc4_57505092($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
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
</p><?php }} ?>
