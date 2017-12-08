<?php /* Smarty version Smarty-3.1.21, created on 2016-10-11 13:27:10
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:107060298157a272f773a2f9-05027809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1476206830,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '107060298157a272f773a2f9-05027809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a272f7742782_53058814',
  'variables' => 
  array (
    'client_name' => 0,
    'client_email' => 0,
    'client_password' => 0,
    'whmcs_url' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a272f7742782_53058814')) {function content_57a272f7742782_53058814($_smarty_tpl) {?><p>
Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 
</p>
<p>
Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below. 
</p>
<p>
Email Address: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
<br />
Password: <?php echo $_smarty_tpl->tpl_vars['client_password']->value;?>
 
</p>
<p>
To login, visit <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
 
</p>
<p>
<?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
 
</p>
<?php }} ?>
