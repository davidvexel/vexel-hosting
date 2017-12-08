<?php /* Smarty version Smarty-3.1.21, created on 2017-11-27 12:17:51
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:2064232052586a89735e9de2-08605212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2064232052586a89735e9de2-08605212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586a897362af63_70116178',
  'variables' => 
  array (
    'order_id' => 0,
    'order_number' => 0,
    'order_date' => 0,
    'invoice_id' => 0,
    'order_payment_method' => 0,
    'client_id' => 0,
    'client_first_name' => 0,
    'client_last_name' => 0,
    'client_email' => 0,
    'client_company_name' => 0,
    'client_address1' => 0,
    'client_address2' => 0,
    'client_city' => 0,
    'client_state' => 0,
    'client_postcode' => 0,
    'client_country' => 0,
    'client_phonenumber' => 0,
    'order_items' => 0,
    'order_notes' => 0,
    'client_ip' => 0,
    'client_hostname' => 0,
    'whmcs_admin_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a897362af63_70116178')) {function content_586a897362af63_70116178($_smarty_tpl) {?><p><strong>Informaci&oacute;n de la orden<br /></strong></p>
<p>ID de Orden: <?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
<br /> N&uacute;mero de Orden: <?php echo $_smarty_tpl->tpl_vars['order_number']->value;?>
<br /> Fecha/Hora: <?php echo $_smarty_tpl->tpl_vars['order_date']->value;?>
<br /> N&uacute;mero de Factura: <?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>
<br /> M&eacute;todo de pago: <?php echo $_smarty_tpl->tpl_vars['order_payment_method']->value;?>
</p>
<p><strong>Informaci&oacute;n de cliente<br /></strong></p>
<p>ID de Cliente: <?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
<br /> nombre: <?php echo $_smarty_tpl->tpl_vars['client_first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['client_last_name']->value;?>
<br /> Email: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
<br /> Compa&ntilde;ia: <?php echo $_smarty_tpl->tpl_vars['client_company_name']->value;?>
<br /> Direcci&oacute;n 1: <?php echo $_smarty_tpl->tpl_vars['client_address1']->value;?>
<br /> Direcci&oacute;n 2: <?php echo $_smarty_tpl->tpl_vars['client_address2']->value;?>
<br /> Ciudad: <?php echo $_smarty_tpl->tpl_vars['client_city']->value;?>
<br /> Estado: <?php echo $_smarty_tpl->tpl_vars['client_state']->value;?>
<br /> Cod. Postal: <?php echo $_smarty_tpl->tpl_vars['client_postcode']->value;?>
<br /> Pa&iacute;s: <?php echo $_smarty_tpl->tpl_vars['client_country']->value;?>
<br />Tel&eacute;fono: <?php echo $_smarty_tpl->tpl_vars['client_phonenumber']->value;?>
</p>
<p><strong>Items de la orden<br /></strong></p>
<p><?php echo $_smarty_tpl->tpl_vars['order_items']->value;?>
</p>
<?php if ($_smarty_tpl->tpl_vars['order_notes']->value) {?>
<p><strong>Notas de la orden<br /></strong></p>
<p><?php echo $_smarty_tpl->tpl_vars['order_notes']->value;?>
</p>
<?php }?>
<p><strong>Informaci&oacute;n ISP<br /></strong></p>
<p>IP: <?php echo $_smarty_tpl->tpl_vars['client_ip']->value;?>
<br /> Host: <?php echo $_smarty_tpl->tpl_vars['client_hostname']->value;?>
</p>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
orders.php?action=view&amp;id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
orders.php?action=view&amp;id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
</a></p><?php }} ?>
