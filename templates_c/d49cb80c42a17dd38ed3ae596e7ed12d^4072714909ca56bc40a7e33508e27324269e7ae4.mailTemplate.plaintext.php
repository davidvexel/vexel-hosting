<?php /* Smarty version Smarty-3.1.21, created on 2017-12-02 08:00:07
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:283641356586ba0525f1589-76737042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1512219607,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '283641356586ba0525f1589-76737042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586ba052602f33_58680975',
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
<?php if ($_valid && !is_callable('content_586ba052602f33_58680975')) {function content_586ba052602f33_58680975($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>Este es un aviso de que su factura n&uacute;mero <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
 generada el <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
 ha vencido.</p>
<p>Su m&eacute;todo de pago es: <?php echo $_smarty_tpl->tpl_vars['invoice_payment_method']->value;?>
</p>
<p>Factura: <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
<br />Monto: <?php echo $_smarty_tpl->tpl_vars['invoice_balance']->value;?>
<br />Fecha: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
</p>
<p>Usted puede ingresar en la secci&oacute;n clientes y ver el detalle de la factura en <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
</p>
<p>Sus datos de acceso son los siguientes:</p>
<p>Email: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
<br />Contrase&ntilde;a: <?php echo $_smarty_tpl->tpl_vars['client_password']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
