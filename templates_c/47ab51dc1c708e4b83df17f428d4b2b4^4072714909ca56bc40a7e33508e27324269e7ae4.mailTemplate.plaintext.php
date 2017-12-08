<?php /* Smarty version Smarty-3.1.21, created on 2017-10-04 08:00:32
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:130289980958738951ccc296-64199503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1507118432,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '130289980958738951ccc296-64199503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58738951cec0e4_81690200',
  'variables' => 
  array (
    'client_name' => 0,
    'days_until_expiry' => 0,
    'domain_days_until_expiry' => 0,
    'expiring_domains' => 0,
    'domain' => 0,
    'domain_name' => 0,
    'domain_next_due_date' => 0,
    'domain_days_until_nextdue' => 0,
    'whmcs_link' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58738951cec0e4_81690200')) {function content_58738951cec0e4_81690200($_smarty_tpl) {?><p>Estimado <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p><?php if ($_smarty_tpl->tpl_vars['days_until_expiry']->value) {?>El/Los dominio(s) listados debajo van a expirar en los pr&oacute;ximos <?php echo $_smarty_tpl->tpl_vars['days_until_expiry']->value;?>
 d&iacute;as.<?php } else { ?>El/Los dominio(s) listados debajo van a expiran en <?php echo $_smarty_tpl->tpl_vars['domain_days_until_expiry']->value;?>
 d&iacute;as. Renueve ahora antes que sea demasiado tarde...<?php }?></p>
<p><?php if ($_smarty_tpl->tpl_vars['expiring_domains']->value) {
$_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['expiring_domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['domain']->value['nextduedate'];?>
 <strong>(<?php echo $_smarty_tpl->tpl_vars['domain']->value['days'];?>
 D&iacute;as)</strong><br /><?php }
} else {
echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['domain_next_due_date']->value;?>
 <strong>(<?php echo $_smarty_tpl->tpl_vars['domain_days_until_nextdue']->value;?>
 D&iacute;as)</strong><?php }?></p>
<p>Para asegurarse de que el dominio no expire, deber&iacute;a renovar ahora. Puede hacer esto desde la administraci&oacute;n de dominios en nuestra &aacute;rea de clientes: <?php echo $_smarty_tpl->tpl_vars['whmcs_link']->value;?>
</p>
<p>Si dejara que su dominio expire, usted va a poder renovarlo hasta 30 d&iacute;as posteriores a la fecha de vencimiento. Durante este tiempo, el dominio no estar&iacute;a accesible as&iacute; que ningun servicio web ni de email asociado al mismo funcionar&iacute;a.</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><?php }} ?>
