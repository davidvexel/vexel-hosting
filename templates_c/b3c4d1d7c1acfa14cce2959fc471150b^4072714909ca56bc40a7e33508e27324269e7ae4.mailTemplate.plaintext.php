<?php /* Smarty version Smarty-3.1.21, created on 2017-11-06 10:45:12
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:16738246545821dec8362949-15438513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1509983112,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '16738246545821dec8362949-15438513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5821dec83724e0_14453531',
  'variables' => 
  array (
    'client_name' => 0,
    'invoice_num' => 0,
    'invoice_date_created' => 0,
    'invoice_date_due' => 0,
    'invoice_payment_method' => 0,
    'invoice_balance' => 0,
    'invoice_link' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5821dec83724e0_14453531')) {function content_5821dec83724e0_14453531($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>Este es un recordatorio de que su factura n&uacute;mero <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
, que ha sido generada el <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
 vence el <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
.</p>
<p>Su forma de pago es: <?php echo $_smarty_tpl->tpl_vars['invoice_payment_method']->value;?>
</p>
<p>Factura: <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
<br />Monto: <?php echo $_smarty_tpl->tpl_vars['invoice_balance']->value;?>
<br />Vencimiento: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
</p>
<p>Usted puede ingresar en nuestra &aacute;rea de clientes para ver y pagar su factura en <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
</p>
<p>Muchas gracias</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
