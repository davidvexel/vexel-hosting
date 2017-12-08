<?php /* Smarty version Smarty-3.1.21, created on 2017-01-17 09:15:11
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:1118039739587e26efb20ed3-40721402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1484662511,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '1118039739587e26efb20ed3-40721402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'client_id' => 0,
    'service_id' => 0,
    'service_product' => 0,
    'service_domain' => 0,
    'whmcs_admin_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_587e26efb29bf3_20903886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587e26efb29bf3_20903886')) {function content_587e26efb29bf3_20903886($_smarty_tpl) {?><p>El pago de su producto/servicio ha sido recibido y la reactivaci&oacute;n ha sido exitosa</p>
<p>ID Cliente: <?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
<br />ID Servicio: <?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>
<br />Producto/Servicio: <?php echo $_smarty_tpl->tpl_vars['service_product']->value;?>
<br />Dominio: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['whmcs_admin_link']->value;?>
</p><?php }} ?>
