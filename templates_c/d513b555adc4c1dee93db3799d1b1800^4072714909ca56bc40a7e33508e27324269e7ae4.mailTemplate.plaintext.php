<?php /* Smarty version Smarty-3.1.21, created on 2016-10-31 14:57:39
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:104551877657cb0c6f5e69a4-79292957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1477940259,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '104551877657cb0c6f5e69a4-79292957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57cb0c6f5f2ea5_83435037',
  'variables' => 
  array (
    'client_name' => 0,
    'domain_reg_date' => 0,
    'domain_name' => 0,
    'domain_reg_period' => 0,
    'domain_first_payment_amount' => 0,
    'domain_next_due_date' => 0,
    'whmcs_url' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cb0c6f5f2ea5_83435037')) {function content_57cb0c6f5f2ea5_83435037($_smarty_tpl) {?><p>
Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 
</p>
<p>
This message is to confirm that your domain purchase has been successful. The details of the domain purchase are below: 
</p>
<p>
Registration Date: <?php echo $_smarty_tpl->tpl_vars['domain_reg_date']->value;?>
<br />
Domain: <?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
<br />
Registration Period: <?php echo $_smarty_tpl->tpl_vars['domain_reg_period']->value;?>
<br />
Amount: <?php echo $_smarty_tpl->tpl_vars['domain_first_payment_amount']->value;?>
<br />
Next Due Date: <?php echo $_smarty_tpl->tpl_vars['domain_next_due_date']->value;?>
 
</p>
<p>
You may login to your client area at <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
 to manage your new domain. 
</p>
<p>
<?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
 
</p>
<?php }} ?>
