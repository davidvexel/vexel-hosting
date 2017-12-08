<?php /* Smarty version Smarty-3.1.21, created on 2016-08-03 11:27:25
         compiled from "/var/www/html/templates/six/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156214880357a20d5d141820-10989011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f367a22068bf8b21431143ff2353f73357ad7c12' => 
    array (
      0 => '/var/www/html/templates/six/contact.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156214880357a20d5d141820-10989011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sent' => 0,
    'LANG' => 0,
    'errormessage' => 0,
    'name' => 0,
    'email' => 0,
    'subject' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a20d5d192c20_81966896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a20d5d192c20_81966896')) {function content_57a20d5d192c20_81966896($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sent']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['contactsent'],'textcenter'=>true), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['sent']->value) {?>
    <form method="post" action="contact.php" class="form-horizontal" role="form">
        <input type="hidden" name="action" value="send" />

            <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientname'];?>
</label>
                <div class="col-sm-7">
                    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" id="inputName" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientemail'];?>
</label>
                <div class="col-sm-7">
                    <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control" id="inputEmail" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputSubject" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketsubject'];?>
</label>
                <div class="col-sm-7">
                    <input type="subject" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" class="form-control" id="inputSubject" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputMessage" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactmessage'];?>
</label>
                <div class="col-sm-9">
                    <textarea name="message" rows="7" class="form-control" id="inputMessage"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-offset-3 col-sm-9">
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactsend'];?>
</button>
                </div>
            </div>

    </form>

<?php }?>
<?php }} ?>
