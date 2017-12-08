<?php /* Smarty version Smarty-3.1.21, created on 2016-08-04 11:39:45
         compiled from "/var/www/html/templates/six/supportticketsubmit-stepone.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94325246457a361c1bc1220-14724356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e245c78357330487f582c596395378c5b13ea4' => 
    array (
      0 => '/var/www/html/templates/six/supportticketsubmit-stepone.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94325246457a361c1bc1220-14724356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'departments' => 0,
    'department' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a361c1bfd646_61710039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a361c1bfd646_61710039')) {function content_57a361c1bfd646_61710039($_smarty_tpl) {?>
<br />

<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsheader'];?>
</p>

<br />

<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['department'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['department']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['departments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['department']->key => $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['department']->key;
?>
                <div class="col-md-6 margin-bottom">
                    <p>
                        <strong>
                            <a href="<?php echo $_SERVER['PHP_SELF'];?>
?step=2&amp;deptid=<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
">
                                <i class="fa fa-envelope"></i>
                                &nbsp;<?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>

                            </a>
                        </strong>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['department']->value['description']) {?>
                        <p><?php echo $_smarty_tpl->tpl_vars['department']->value['description'];?>
</p>
                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['num']->value%2==true) {?>
                    <div class="clearfix"></div>
                <?php }?>
            <?php }
if (!$_smarty_tpl->tpl_vars['department']->_loop) {
?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['nosupportdepartments'],'textcenter'=>true), 0);?>

            <?php } ?>
        </div>
    </div>
</div>
<?php }} ?>
