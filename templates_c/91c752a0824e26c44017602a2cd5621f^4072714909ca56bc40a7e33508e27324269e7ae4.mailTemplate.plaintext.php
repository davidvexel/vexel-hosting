<?php /* Smarty version Smarty-3.1.21, created on 2016-10-18 09:08:37
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:138018734057cdb1c0c565e5-66190239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1476796117,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '138018734057cdb1c0c565e5-66190239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57cdb1c0c62e26_63155167',
  'variables' => 
  array (
    'client_name' => 0,
    'service_product_name' => 0,
    'service_domain' => 0,
    'service_recurring_amount' => 0,
    'service_next_due_date' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cdb1c0c62e26_63155167')) {function content_57cdb1c0c62e26_63155167($_smarty_tpl) {?><p>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>This is a notification that your service has now been unsuspended. The details of this unsuspension are below:</p>
<p>Product/Service: <?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>
<br /><?php if ($_smarty_tpl->tpl_vars['service_domain']->value) {?>Domain: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br /><?php }?>Amount: <?php echo $_smarty_tpl->tpl_vars['service_recurring_amount']->value;?>
<br />Due Date: <?php echo $_smarty_tpl->tpl_vars['service_next_due_date']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
