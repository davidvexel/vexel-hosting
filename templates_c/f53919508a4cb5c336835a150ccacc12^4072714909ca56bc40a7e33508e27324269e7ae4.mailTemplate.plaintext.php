<?php /* Smarty version Smarty-3.1.21, created on 2016-10-11 14:01:00
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:197072368857fd28dc0b8c80-65774697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1476208860,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '197072368857fd28dc0b8c80-65774697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'client_name' => 0,
    'whmcs_link' => 0,
    'client_email' => 0,
    'client_password' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57fd28dc0d24f9_60740890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fd28dc0d24f9_60740890')) {function content_57fd28dc0d24f9_60740890($_smarty_tpl) {?><p>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p><p>As you requested, your password for our client area has now been reset.  Your new login details are as follows:</p><p><?php echo $_smarty_tpl->tpl_vars['whmcs_link']->value;?>
<br />Email: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
<br />Password: <?php echo $_smarty_tpl->tpl_vars['client_password']->value;?>
</p><p>To change your password to something more memorable, after logging in go to My Details > Change Password.</p><p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
