<?php /* Smarty version Smarty-3.1.21, created on 2017-11-27 12:18:00
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:13539777295877b665ee95c2-27439631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1511803080,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '13539777295877b665ee95c2-27439631',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5877b665ef3e42_11912327',
  'variables' => 
  array (
    'client_name' => 0,
    'order_number' => 0,
    'order_details' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877b665ef3e42_11912327')) {function content_5877b665ef3e42_11912327($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>Hemos recibido su orden y ser&aacute; procesada en breve. Los detalles de la misma son:</p>
<p>N&uacute;mero de orden: <strong><?php echo $_smarty_tpl->tpl_vars['order_number']->value;?>
</strong></p>
<p><?php echo $_smarty_tpl->tpl_vars['order_details']->value;?>
</p>
<p>Usted recibir&aacute; un email nuestro en breve, una vez que su cuenta haya sido dada de alta. Por favor conserve su n&uacute;mero de orden en caso de que necesite contactarse con nosotros acerca de ella.</p>
<p>Muchas Gracias</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
