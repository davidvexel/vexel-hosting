<?php /* Smarty version Smarty-3.1.21, created on 2017-11-28 08:00:15
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:1494238367586cf202943161-46735584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1511874015,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '1494238367586cf202943161-46735584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586cf202952a90_37218006',
  'variables' => 
  array (
    'client_name' => 0,
    'service_product_name' => 0,
    'service_domain' => 0,
    'service_recurring_amount' => 0,
    'service_next_due_date' => 0,
    'service_suspension_reason' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586cf202952a90_37218006')) {function content_586cf202952a90_37218006($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>Este es un aviso de que su servicio ha sido suspendido. Los detalles de la suspensi&oacute;n son:</p>
<p>Producto/Servicio: <?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>
<br /><?php if ($_smarty_tpl->tpl_vars['service_domain']->value) {?>Dominio: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br /><?php }?>Importe: <?php echo $_smarty_tpl->tpl_vars['service_recurring_amount']->value;?>
<br />Pr&oacute;ximo vencimiento: <?php echo $_smarty_tpl->tpl_vars['service_next_due_date']->value;?>
<br />Razon de la suspensi&oacute;n: <strong><?php echo $_smarty_tpl->tpl_vars['service_suspension_reason']->value;?>
<br /><br /></strong></p>
<p>Por favor, cont&aacute;ctese con nosotros lo m&aacute;s pronto posible para que sus servicios sean reactivados.</p>
<p>Muchas gracias</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
