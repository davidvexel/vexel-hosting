<?php /* Smarty version Smarty-3.1.21, created on 2016-08-03 11:27:40
         compiled from "/var/www/html/templates/orderforms/standard_cart/configureproductdomain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140469710757a20d6cc1df79-95492789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f15aa11f433f1f95c28b04014b54ef9d8e3f03f' => 
    array (
      0 => '/var/www/html/templates/orderforms/standard_cart/configureproductdomain.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140469710757a20d6cc1df79-95492789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'incartdomains' => 0,
    'incartdomain' => 0,
    'registerdomainenabled' => 0,
    'companyname' => 0,
    'sld' => 0,
    'registertlds' => 0,
    'listtld' => 0,
    'tld' => 0,
    'transferdomainenabled' => 0,
    'transfertlds' => 0,
    'owndomainenabled' => 0,
    'subdomains' => 0,
    'subid' => 0,
    'subdomain' => 0,
    'freedomaintlds' => 0,
    'pid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a20d6ccaa040_88482678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a20d6ccaa040_88482678')) {function content_57a20d6ccaa040_88482678($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerchoosedomain'];?>
</h1>
            </div>

        </div>

        <div class="col-md-3 pull-md-left sidebar hidden-xs hidden-sm">

            <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        </div>

        <div class="col-md-9 pull-md-right">

            <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <form id="frmProductDomain" onsubmit="checkdomain();return false">

                <div class="domain-selection-options">
                    <?php if ($_smarty_tpl->tpl_vars['incartdomains']->value) {?>
                        <div class="option">
                            <label>
                                <input type="radio" name="domainoption" value="incart" id="selincart" /><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductdomainuseincart'];?>

                            </label>
                            <div class="domain-input-group clearfix" id="domainincart">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-1 col-md-6 col-md-offset-2">
                                        <div class="domains-row">
                                            <select id="incartsld" name="incartdomain" class="form-control">
                                                <?php  $_smarty_tpl->tpl_vars['incartdomain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['incartdomain']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['incartdomains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['incartdomain']->key => $_smarty_tpl->tpl_vars['incartdomain']->value) {
$_smarty_tpl->tpl_vars['incartdomain']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['incartdomain']->key;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['incartdomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['incartdomain']->value;?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['use'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                        <div class="option">
                            <label>
                                <input type="radio" name="domainoption" value="register" id="selregister" /><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cartregisterdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value);?>

                            </label>
                            <div class="domain-input-group clearfix" id="domainregister">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-1">
                                        <div class="row domains-row">
                                            <div class="col-xs-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['www'];?>
</span>
                                                    <input type="text" id="registersld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" />
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <select id="registertld" class="form-control">
                                                    <?php  $_smarty_tpl->tpl_vars['listtld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listtld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['registertlds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->key => $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->_loop = true;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value==$_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['check'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                        <div class="option">
                            <label>
                                <input type="radio" name="domainoption" value="transfer" id="seltransfer" /><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['carttransferdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value);?>

                            </label>
                            <div class="domain-input-group clearfix" id="domaintransfer">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-1">
                                        <div class="row domains-row">
                                            <div class="col-xs-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon">www.</span>
                                                    <input type="text" id="transfersld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" />
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <select id="transfertld" class="form-control">
                                                    <?php  $_smarty_tpl->tpl_vars['listtld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listtld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transfertlds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->key => $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->_loop = true;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value==$_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['transfer'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['owndomainenabled']->value) {?>
                        <div class="option">
                            <label>
                                <input type="radio" name="domainoption" value="owndomain" id="selowndomain" /><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cartexistingdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value);?>

                            </label>
                            <div class="domain-input-group clearfix" id="domainowndomain">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="row domains-row">
                                            <div class="col-xs-2 text-right">
                                                <p class="form-control-static">www.</p>
                                            </div>
                                            <div class="col-xs-7">
                                                <input type="text" id="owndomainsld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['yourdomainplaceholder'];?>
" class="form-control" autocapitalize="none" />
                                            </div>
                                            <div class="col-xs-3">
                                                <input type="text" id="owndomaintld" value="<?php echo substr($_smarty_tpl->tpl_vars['tld']->value,1);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['yourtldplaceholder'];?>
" class="form-control" autocapitalize="none" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block" id="useOwnDomain">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['use'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['subdomains']->value) {?>
                        <div class="option">
                            <label>
                                <input type="radio" name="domainoption" value="subdomain" id="selsubdomain" /><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cartsubdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value);?>

                            </label>
                            <div class="domain-input-group clearfix" id="domainsubdomain">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="row domains-row">
                                            <div class="col-xs-2 text-right">
                                                <p class="form-control-static">http://</p>
                                            </div>
                                            <div class="col-xs-5">
                                                <input type="text" id="subdomainsld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" placeholder="yourname" class="form-control" autocapitalize="none" />
                                            </div>
                                            <div class="col-xs-5">
                                                <select id="subdomaintld" class="form-control">
                                                    <?php  $_smarty_tpl->tpl_vars['subdomain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subdomain']->_loop = false;
 $_smarty_tpl->tpl_vars['subid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subdomains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subdomain']->key => $_smarty_tpl->tpl_vars['subdomain']->value) {
$_smarty_tpl->tpl_vars['subdomain']->_loop = true;
 $_smarty_tpl->tpl_vars['subid']->value = $_smarty_tpl->tpl_vars['subdomain']->key;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['subid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subdomain']->value;?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['check'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['freedomaintlds']->value) {?>
                    <p>* <em><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainregistration'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainappliesto'];?>
: <?php echo $_smarty_tpl->tpl_vars['freedomaintlds']->value;?>
</em></p>
                <?php }?>

            </form>

            <div class="clearfix"></div>

            <div class="domain-loading-spinner" id="domainLoadingSpinner">
                <i class="fa fa-3x fa-spinner fa-spin"></i>
            </div>

            <form method="post" action="cart.php?a=add&pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
&domainselect=1" id="frmProductDomainSelections">
                <div class="domain-search-results" id="domainSearchResults"></div>
            </form>

        </div>
    </div>
</div>
<?php }} ?>
