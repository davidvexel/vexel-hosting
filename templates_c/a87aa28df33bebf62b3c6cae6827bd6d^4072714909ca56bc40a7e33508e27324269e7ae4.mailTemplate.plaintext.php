<?php /* Smarty version Smarty-3.1.21, created on 2017-11-27 12:20:47
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:16668251225a1c496f341911-11928754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1511803247,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '16668251225a1c496f341911-11928754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'client_name' => 0,
    'ssl_configuration_link' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a1c496f346029_85543535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c496f346029_85543535')) {function content_5a1c496f346029_85543535($_smarty_tpl) {?><p>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p><p>Thank you for your order for an SSL Certificate. Before you can use your certificate, it requires configuration which can be done at the URL below.</p><p><?php echo $_smarty_tpl->tpl_vars['ssl_configuration_link']->value;?>
</p><p>Instructions are provided throughout the process but if you experience any problems or have any questions, please open a ticket for assistance.</p><p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
