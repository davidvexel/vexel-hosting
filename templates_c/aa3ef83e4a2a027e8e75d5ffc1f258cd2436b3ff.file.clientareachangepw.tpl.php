<?php /* Smarty version Smarty-3.1.21, created on 2016-10-11 14:06:31
         compiled from "/var/www/html/templates/six/clientareachangepw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111405952957fd2a27d25968-07326583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa3ef83e4a2a027e8e75d5ffc1f258cd2436b3ff' => 
    array (
      0 => '/var/www/html/templates/six/clientareachangepw.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111405952957fd2a27d25968-07326583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'successful' => 0,
    'LANG' => 0,
    'errormessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57fd2a27d55242_05160748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fd2a27d55242_05160748')) {function content_57fd2a27d55242_05160748($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['successful']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['changessavedsuccessfully'],'textcenter'=>true), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0);?>

<?php }?>

<form class="form-horizontal using-password-strength" method="post" action="clientarea.php?action=changepw" role="form">
    <input type="hidden" name="submit" value="true" />
    <div class="form-group">
        <label for="inputExistingPassword" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['existingpassword'];?>
</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="existingpw" id="inputExistingPassword" autocomplete="off" />
        </div>
    </div>
    <div id="newPassword1" class="form-group has-feedback">
        <label for="inputNewPassword1" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newpassword'];?>
</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="newpw" id="inputNewPassword1" autocomplete="off" />
            <span class="form-control-feedback glyphicon"></span>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
    <div id="newPassword2" class="form-group has-feedback">
        <label for="inputNewPassword2" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['confirmnewpassword'];?>
</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="confirmpw" id="inputNewPassword2" autocomplete="off" />
            <span class="form-control-feedback glyphicon"></span>
            <div id="inputNewPassword2Msg"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="text-center">
            <input class="btn btn-primary" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasavechanges'];?>
" />
            <input class="btn btn-default" type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
" />
        </div>
    </div>
</form>
<?php }} ?>
