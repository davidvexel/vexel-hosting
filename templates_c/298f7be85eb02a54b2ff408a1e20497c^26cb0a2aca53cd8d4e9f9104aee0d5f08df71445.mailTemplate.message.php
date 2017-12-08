<?php /* Smarty version Smarty-3.1.21, created on 2016-08-02 21:58:43
         compiled from "mailTemplate:message" */ ?>
<?php /*%%SmartyHeaderCode:2986298157a14b873277b9-03508431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cb0a2aca53cd8d4e9f9104aee0d5f08df71445' => 
    array (
      0 => 'mailTemplate:message',
      1 => 1470189523,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '2986298157a14b873277b9-03508431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a14b87375993_26468004',
  'variables' => 
  array (
    'charset' => 0,
    'company_domain' => 0,
    'company_logo_url' => 0,
    'company_name' => 0,
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
    'whmcs_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a14b87375993_26468004')) {function content_57a14b87375993_26468004($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <style type="text/css">
            [EmailCSS]
        </style>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
                                        <tr>
                                            <td valign="top" class="headerContent">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['company_domain']->value;?>
">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['company_logo_url']->value;?>
" style="max-width:600px;padding:20px" id="headerImage" alt="<?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
" />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContent">
<p>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
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
</p>
</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
                                        <tr>
                                            <td valign="top" class="footerContent">
                                                 <a href="<?php echo $_smarty_tpl->tpl_vars['company_domain']->value;?>
">visit our website</a>
                                                <span class="hide-mobile"> | </span>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
">log in to your account</a>
                                                <span class="hide-mobile"> | </span>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
submitticket.php">get support</a> <br />
                                                Copyright © <?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
, All rights reserved.
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html><?php }} ?>
