<?php /* Smarty version Smarty-3.1.21, created on 2016-08-02 21:18:57
         compiled from "/var/www/html/templates/six/includes/alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166947367057a146819e2fc2-38003282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f8c90a201c2039fbb58abd9db70f5c7371db1ef' => 
    array (
      0 => '/var/www/html/templates/six/includes/alert.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166947367057a146819e2fc2-38003282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'textcenter' => 0,
    'hide' => 0,
    'additionalClasses' => 0,
    'idname' => 0,
    'errorshtml' => 0,
    'LANG' => 0,
    'title' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a14681a03230_50482824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a14681a03230_50482824')) {function content_57a14681a03230_50482824($_smarty_tpl) {?><div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['type']->value=="error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['type']->value) {
echo $_smarty_tpl->tpl_vars['type']->value;
} else { ?>info<?php }
if ($_smarty_tpl->tpl_vars['textcenter']->value) {?> text-center<?php }
if ($_smarty_tpl->tpl_vars['hide']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['additionalClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['additionalClasses']->value;
}?>"<?php if ($_smarty_tpl->tpl_vars['idname']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['errorshtml']->value) {?>
    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaerrors'];?>
</strong>
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['errorshtml']->value;?>

    </ul>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
        <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

<?php }?>
</div>
<?php }} ?>
