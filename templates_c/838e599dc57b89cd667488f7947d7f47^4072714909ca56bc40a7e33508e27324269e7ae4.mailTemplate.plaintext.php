<?php /* Smarty version Smarty-3.1.21, created on 2016-10-18 09:06:51
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:108431393058061e6b995166-62259166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1476796011,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '108431393058061e6b995166-62259166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'client_name' => 0,
    'invoice_num' => 0,
    'invoice_date_created' => 0,
    'invoice_payment_method' => 0,
    'invoice_balance' => 0,
    'invoice_date_due' => 0,
    'invoice_link' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58061e6b9a41a9_59254390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58061e6b9a41a9_59254390')) {function content_58061e6b9a41a9_59254390($_smarty_tpl) {?><p> Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, </p> <p> This is a billing notice that your invoice no. <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
 which was generated on <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
 is now overdue. </p> <p> Your payment method is: <?php echo $_smarty_tpl->tpl_vars['invoice_payment_method']->value;?>
 </p> <p> Invoice: <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
<br /> Balance Due: <?php echo $_smarty_tpl->tpl_vars['invoice_balance']->value;?>
<br /> Due Date: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>
 </p> <p> You can login to your client area to view and pay the invoice at <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>
 </p> <p> <?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
 </p><?php }} ?>
