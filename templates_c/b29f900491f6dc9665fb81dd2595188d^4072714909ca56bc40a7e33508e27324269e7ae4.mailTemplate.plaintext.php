<?php /* Smarty version Smarty-3.1.21, created on 2016-09-15 09:57:26
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:197376385057cdabff221c99-00345905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1473947846,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '197376385057cdabff221c99-00345905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57cdabff235ca3_69240930',
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
<?php if ($_valid && !is_callable('content_57cdabff235ca3_69240930')) {function content_57cdabff235ca3_69240930($_smarty_tpl) {?><p>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>This is a payment receipt for Invoice <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
 sent on <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['invoice_html_contents']->value;?>
</p>
<p>Amount: <?php echo $_smarty_tpl->tpl_vars['invoice_last_payment_amount']->value;?>
<br />Transaction #: <?php echo $_smarty_tpl->tpl_vars['invoice_last_payment_transid']->value;?>
<br />Total Paid: <?php echo $_smarty_tpl->tpl_vars['invoice_amount_paid']->value;?>
<br />Remaining Balance: <?php echo $_smarty_tpl->tpl_vars['invoice_balance']->value;?>
<br />Status: <?php echo $_smarty_tpl->tpl_vars['invoice_status']->value;?>
</p>
<p>You may review your invoice history at any time by logging in to your client area.</p>
<p>Note: This email will serve as an official receipt for this payment.</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>