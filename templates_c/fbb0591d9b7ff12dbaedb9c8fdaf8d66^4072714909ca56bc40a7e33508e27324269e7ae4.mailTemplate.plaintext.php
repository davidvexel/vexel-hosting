<?php /* Smarty version Smarty-3.1.21, created on 2017-06-08 20:37:47
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:138210806258762d8701b504-13087485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1496968667,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '138210806258762d8701b504-13087485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58762d8702cbd3_88991323',
  'variables' => 
  array (
    'client_name' => 0,
    'invoice_num' => 0,
    'invoice_date_created' => 0,
    'invoice_payment_method' => 0,
    'invoice_balance' => 0,
    'invoice_date_due' => 0,
    'invoice_link' => 0,
    'client_email' => 0,
    'client_password' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58762d8702cbd3_88991323')) {function content_58762d8702cbd3_88991323($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>Este es el tercer y &uacute;ltimo aviso de vencimiento de su factura n&uacute;mero <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
 generada el <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
 est&aacute; vencida. En caso de no recibir su pago, la cuenta ser&aacute; suspendida.</p>
<p>Su forma de pago es: <?php echo $_smarty_tpl->tpl_vars['invoice_payment_method']->value;?>
</p>
<p>Factura: <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
<br /> Monto: <?php echo $_smarty_tpl->tpl_vars['invoice_balance']->value;?>
<br /> Fecha: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
</p>
<p>Usted puede ingresar en nuestra &aacute;rea de clientes para ver y abonar su factura en <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
</p>
<p>Sus datos de ingreso son:</p>
<p>Email: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
<br /> Contrase&ntilde;a: <?php echo $_smarty_tpl->tpl_vars['client_password']->value;?>
</p>
<p>Muchas gracias</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
