<?php /* Smarty version Smarty-3.1.21, created on 2016-08-02 21:18:57
         compiled from "/var/www/html/templates/six/includes/pageheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114337031257a14681807328-68439312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12bb152865463a18436ebf250cf952be9ee0a67a' => 
    array (
      0 => '/var/www/html/templates/six/includes/pageheader.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114337031257a14681807328-68439312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'desc' => 0,
    'showbreadcrumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a14681840e10_24220725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a14681840e10_24220725')) {function content_57a14681840e10_24220725($_smarty_tpl) {?><div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
</div>
<?php }} ?>
