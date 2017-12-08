<?php /* Smarty version Smarty-3.1.21, created on 2016-10-11 14:06:20
         compiled from "/var/www/html/templates/orderforms/standard_cart/adddomain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62768354457fd2a1c6fc298-38309374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '988b3dbe39df30e7d3c877d3c0013e9a829d5b0d' => 
    array (
      0 => '/var/www/html/templates/orderforms/standard_cart/adddomain.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62768354457fd2a1c6fc298-38309374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'domain' => 0,
    'LANG' => 0,
    'sld' => 0,
    'registertlds' => 0,
    'listtld' => 0,
    'tld' => 0,
    'transfertlds' => 0,
    'availabilityresults' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57fd2a1c7535f8_41576545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fd2a1c7535f8_41576545')) {function content_57fd2a1c7535f8_41576545($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1>
                    <?php if ($_smarty_tpl->tpl_vars['domain']->value=="register") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['domain']->value=="transfer") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['transferdomain'];?>

                    <?php }?>
                </h1>
            </div>

        </div>

        <div class="col-md-3 pull-md-left sidebar hidden-xs hidden-sm">

            <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        </div>

        <div class="col-md-9 pull-md-right">

            <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php if ($_smarty_tpl->tpl_vars['domain']->value=='register') {?>
                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['findNewDomain'];?>
</p>
            <?php } else { ?>
                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['transferExistingDomain'];?>
</p>
            <?php }?>

            <form method="post" action="cart.php" id="frmDomainSearch">
                <input type="hidden" name="a" value="domainoptions" />
                <input type="hidden" name="checktype" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" />
                <input type="hidden" name="ajax" value="1" />

                <div class="row domain-add-domain">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-1">
                        <div class="row domains-row">
                            <div class="col-xs-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><?php echo WHMCS\Smarty::langFunction(array('key'=>'orderForm.www'),$_smarty_tpl);?>
</span>
                                    <input type="text" name="sld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" id="inputDomain" class="form-control" autocapitalize="none" />
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <select name="tld" class="form-control">
                                    <?php if ($_smarty_tpl->tpl_vars['domain']->value=='register') {?>
                                        <?php  $_smarty_tpl->tpl_vars['listtld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listtld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['registertlds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->key => $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value==$_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>

                                            </option>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php  $_smarty_tpl->tpl_vars['listtld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listtld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transfertlds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->key => $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value==$_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>

                                            </option>
                                        <?php } ?>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block" id="btnCheckAvailability">
                            <?php if ($_smarty_tpl->tpl_vars['domain']->value=="register") {?>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['check'];?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>

                            <?php }?>
                        </button>
                    </div>
                </div>

            </form>

            <div class="domain-loading-spinner" id="domainLoadingSpinner">
                <i class="fa fa-3x fa-spinner fa-spin"></i>
            </div>

            <form method="post" action="cart.php?a=add&domain=<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
                <div class="domain-search-results" id="domainSearchResults"></div>
            </form>

        </div>
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['availabilityresults']->value) {?>
    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            jQuery('#btnCheckAvailability').click();
        });
    <?php echo '</script'; ?>
>
<?php }?>
<?php }} ?>
