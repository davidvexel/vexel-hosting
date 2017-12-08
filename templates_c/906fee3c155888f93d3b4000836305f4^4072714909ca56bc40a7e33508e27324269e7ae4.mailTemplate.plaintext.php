<?php /* Smarty version Smarty-3.1.21, created on 2016-10-18 09:09:04
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:134186115957cdb1fce079b1-30987014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1476796144,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '134186115957cdb1fce079b1-30987014',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57cdb1fce10384_53919610',
  'variables' => 
  array (
    'client_id' => 0,
    'service_id' => 0,
    'service_product' => 0,
    'service_domain' => 0,
    'whmcs_admin_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cdb1fce10384_53919610')) {function content_57cdb1fce10384_53919610($_smarty_tpl) {?><p>This product/service has received its next payment and has been reactivated successfully.</p>
<p>Client ID: <?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
<br />Service ID: <?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>
<br />Product/Service: <?php echo $_smarty_tpl->tpl_vars['service_product']->value;?>
<br />Domain: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['whmcs_admin_link']->value;?>
</p><?php }} ?>
