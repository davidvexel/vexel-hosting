<?php /* Smarty version Smarty-3.1.21, created on 2017-12-01 10:24:03
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:123036361258262c1cc53736-69087076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1512141843,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '123036361258262c1cc53736-69087076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58262c1cc63409_82567623',
  'variables' => 
  array (
    'client_name' => 0,
    'invoice_num' => 0,
    'invoice_date_created' => 0,
    'invoice_html_contents' => 0,
    'invoice_last_payment_amount' => 0,
    'invoice_last_payment_transid' => 0,
    'invoice_amount_paid' => 0,
    'invoice_balance' => 0,
    'invoice_status' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58262c1cc63409_82567623')) {function content_58262c1cc63409_82567623($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>Este es un recibo de pago de la factura n&uacute;mero <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
 enviada el <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['invoice_html_contents']->value;?>
</p>
<p>Monto: <?php echo $_smarty_tpl->tpl_vars['invoice_last_payment_amount']->value;?>
<br />Transacci&oacute;n #: <?php echo $_smarty_tpl->tpl_vars['invoice_last_payment_transid']->value;?>
<br />Total abonado: <?php echo $_smarty_tpl->tpl_vars['invoice_amount_paid']->value;?>
<br />Saldo: <?php echo $_smarty_tpl->tpl_vars['invoice_balance']->value;?>
<br />Estado: <?php echo $_smarty_tpl->tpl_vars['invoice_status']->value;?>
</p>
<p>Usted puede revisar su historial de pagos en cualquier momento ingresando en nuestra &aacute;rea de clientes.</p>
<p>Nota: El presente email es un recibo oficial de su pago</p>
<p>Muchas Gracias</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
