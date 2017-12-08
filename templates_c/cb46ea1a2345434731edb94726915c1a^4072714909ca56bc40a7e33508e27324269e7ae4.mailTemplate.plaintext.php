<?php /* Smarty version Smarty-3.1.21, created on 2017-11-14 11:16:08
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:18035830375877c7e9400b52-87276963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1510676168,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '18035830375877c7e9400b52-87276963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5877c7e940ecd1_42214526',
  'variables' => 
  array (
    'client_name' => 0,
    'domain_reg_date' => 0,
    'domain_name' => 0,
    'domain_reg_period' => 0,
    'domain_first_payment_amount' => 0,
    'domain_next_due_date' => 0,
    'whmcs_url' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877c7e940ecd1_42214526')) {function content_5877c7e940ecd1_42214526($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>Este mensaje confirma que la compra de su dominio ha sido realiada con &eacute;xito. Los detalles de la misma son:</p>
<p>Fecha de Registro: <?php echo $_smarty_tpl->tpl_vars['domain_reg_date']->value;?>
<br /> Dominio: <?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
<br /> Per&iacute;odo registrado: <?php echo $_smarty_tpl->tpl_vars['domain_reg_period']->value;?>
<br /> Importe: <?php echo $_smarty_tpl->tpl_vars['domain_first_payment_amount']->value;?>
<br /> Pr&oacute;ximo vencimiento: <?php echo $_smarty_tpl->tpl_vars['domain_next_due_date']->value;?>
</p>
<p>Usted puede ingresar a nuestra &aacute;rea de clientes en <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
 para administrar su nuevo dominio.</p>
<p>Muchas gracias por utilizar nuestros servicios.</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
