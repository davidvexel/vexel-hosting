<?php /* Smarty version Smarty-3.1.21, created on 2017-08-23 01:03:00
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:4706852185956b31bf3b377-73985126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1503464580,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '4706852185956b31bf3b377-73985126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5956b31c001165_03003049',
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
<?php if ($_valid && !is_callable('content_5956b31c001165_03003049')) {function content_5956b31c001165_03003049($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>Gracias por confiar en nosotros. Su cuenta ha sido creada y puede ingresar en nuestra &aacute;rea de clientes usando los siguientes datos:</p>
<p>Email: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
<br /> Contrase&ntilde;a: <?php echo $_smarty_tpl->tpl_vars['client_password']->value;?>
</p>
<p>Para ingresar, visite <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
</p>
<p>&nbsp;</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
