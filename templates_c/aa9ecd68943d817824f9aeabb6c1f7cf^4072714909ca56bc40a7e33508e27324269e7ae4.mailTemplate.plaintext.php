<?php /* Smarty version Smarty-3.1.21, created on 2017-11-27 12:17:51
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:1222046279582b467d394807-57879230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1511803071,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '1222046279582b467d394807-57879230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_582b467d3a25b2_87043336',
  'variables' => 
  array (
    'client_name' => 0,
    'invoice_date_created' => 0,
    'invoice_payment_method' => 0,
    'invoice_num' => 0,
    'invoice_total' => 0,
    'invoice_date_due' => 0,
    'invoice_html_contents' => 0,
    'invoice_link' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582b467d3a25b2_87043336')) {function content_582b467d3a25b2_87043336($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>Este es un aviso de que su factura ha sido generada el <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
.</p>
<p>Su forma de pago es: <?php echo $_smarty_tpl->tpl_vars['invoice_payment_method']->value;?>
</p>
<p>Factura #<?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
<br />Monto: <?php echo $_smarty_tpl->tpl_vars['invoice_total']->value;?>
<br />Fecha: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
</p>
<p><strong>Detalle</strong></p>
<p><?php echo $_smarty_tpl->tpl_vars['invoice_html_contents']->value;?>
 <br /> ------------------------------------------------------</p>
<p>Usted puede ingresar en la secci&oacute;n de clientes para ver y abonar su factura en <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
</p>
<p>Muchas Gracias</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
