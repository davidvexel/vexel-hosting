<?php /* Smarty version Smarty-3.1.21, created on 2016-08-02 21:58:43
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:108682942757a14b87379849-78525766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1470189523,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '108682942757a14b87379849-78525766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a14b873b1829_77277585',
  'variables' => 
  array (
    'client_name' => 0,
    'service_product_name' => 0,
    'service_domain' => 0,
    'service_first_payment_amount' => 0,
    'service_recurring_amount' => 0,
    'service_billing_cycle' => 0,
    'service_next_due_date' => 0,
    'service_username' => 0,
    'service_password' => 0,
    'service_server_ip' => 0,
    'service_server_name' => 0,
    'service_ns1' => 0,
    'service_ns1_ip' => 0,
    'service_ns2' => 0,
    'service_ns2_ip' => 0,
    'service_ns3' => 0,
    'service_ns3_ip' => 0,
    'service_ns4' => 0,
    'service_ns4_ip' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a14b873b1829_77277585')) {function content_57a14b873b1829_77277585($_smarty_tpl) {?><p>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p><p align="center"><strong>PLEASE READ THIS EMAIL IN FULL AND PRINT IT FOR YOUR RECORDS</strong></p><p>Thank you for your order from us! Your hosting account has now been setup and this email contains all the information you will need in order to begin using your account.</p><p>If you have requested a domain name during sign up, please keep in mind that your domain name will not be visible on the internet instantly. This process is called propagation and can take up to 48 hours. Until your domain has propagated, your website and email will not function, we have provided a temporary url which you may use to view your website and upload files in the meantime.</p><p><strong>New Account Information</strong></p><p>Hosting Package: <?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>
<br />Domain: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />First Payment Amount: <?php echo $_smarty_tpl->tpl_vars['service_first_payment_amount']->value;?>
<br />Recurring Amount: <?php echo $_smarty_tpl->tpl_vars['service_recurring_amount']->value;?>
<br />Billing Cycle: <?php echo $_smarty_tpl->tpl_vars['service_billing_cycle']->value;?>
<br />Next Due Date: <?php echo $_smarty_tpl->tpl_vars['service_next_due_date']->value;?>
</p><p><strong>Login Details</strong></p><p>Username: <?php echo $_smarty_tpl->tpl_vars['service_username']->value;?>
<br />Password: <?php echo $_smarty_tpl->tpl_vars['service_password']->value;?>
</p><p>Control Panel URL: <a href="http://<?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
:2082/">http://<?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
:2082/</a><br />Once your domain has propogated, you may also use <a href="http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
:2082/">http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
:2082/</a></p><p><strong>Server Information</strong></p><p>Server Name: <?php echo $_smarty_tpl->tpl_vars['service_server_name']->value;?>
<br />Server IP: <?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
</p><p>If you are using an existing domain with your new hosting account, you will need to update the nameservers to point to the nameservers listed below.</p><p>Nameserver 1: <?php echo $_smarty_tpl->tpl_vars['service_ns1']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns1_ip']->value;?>
)<br />Nameserver 2: <?php echo $_smarty_tpl->tpl_vars['service_ns2']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns2_ip']->value;?>
)<?php if ($_smarty_tpl->tpl_vars['service_ns3']->value) {?><br />Nameserver 3: <?php echo $_smarty_tpl->tpl_vars['service_ns3']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns3_ip']->value;?>
)<?php }
if ($_smarty_tpl->tpl_vars['service_ns4']->value) {?><br />Nameserver 4: <?php echo $_smarty_tpl->tpl_vars['service_ns4']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['service_ns4_ip']->value;?>
)<?php }?></p><p><strong>Uploading Your Website</strong></p><p>Temporarily you may use one of the addresses given below to manage your web site:</p><p>Temporary FTP Hostname: <?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
<br />Temporary Webpage URL: <a href="http://<?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
/~<?php echo $_smarty_tpl->tpl_vars['service_username']->value;?>
/">http://<?php echo $_smarty_tpl->tpl_vars['service_server_ip']->value;?>
/~<?php echo $_smarty_tpl->tpl_vars['service_username']->value;?>
/</a></p><p>And once your domain has propagated you may use the details below:</p><p>FTP Hostname: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />Webpage URL: <a href="http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
">http://www.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
</a></p><p><strong>Email Settings</strong></p><p>For email accounts that you setup, you should use the following connection details in your email program:</p><p>POP3 Host Address: mail.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />SMTP Host Address: mail.<?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>
<br />Username: The email address you are checking email for<br />Password: As specified in your control panel</p><p>Thank you for choosing us.</p><p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
