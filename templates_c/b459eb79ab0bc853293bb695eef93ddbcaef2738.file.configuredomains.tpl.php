<?php /* Smarty version Smarty-3.1.21, created on 2016-08-03 19:10:31
         compiled from "/var/www/html/templates/orderforms/standard_cart/configuredomains.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166685749257a279e73776a1-06162522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b459eb79ab0bc853293bb695eef93ddbcaef2738' => 
    array (
      0 => '/var/www/html/templates/orderforms/standard_cart/configuredomains.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166685749257a279e73776a1-06162522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'errormessage' => 0,
    'domains' => 0,
    'domain' => 0,
    'num' => 0,
    'domainfieldname' => 0,
    'domainfield' => 0,
    'atleastonenohosting' => 0,
    'domainns1' => 0,
    'domainns2' => 0,
    'domainns3' => 0,
    'domainns4' => 0,
    'domainns5' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a279e74526a8_62492261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a279e74526a8_62492261')) {function content_57a279e74526a8_62492261($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartdomainsconfig'];?>
</h1>
            </div>

        </div>

        <div class="col-md-3 pull-md-left sidebar hidden-xs hidden-sm">

            <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        </div>

        <div class="col-md-9 pull-md-right">

            <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=confdomains" id="frmConfigureDomains">
                <input type="hidden" name="update" value="true" />

                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['reviewDomainAndAddons'];?>
</p>

                <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                    <div class="alert alert-danger" role="alert">
                        <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['correctErrors'];?>
:</p>
                        <ul>
                            <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                        </ul>
                    </div>
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['domain']->key;
?>

                    <div class="sub-heading">
                        <span><?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderregperiod'];?>
</label>
                                <br />
                                <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['hosting'];?>
</label>
                                <br />
                                <?php if ($_smarty_tpl->tpl_vars['domain']->value['hosting']) {?><span style="color:#009900;">[<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartdomainshashosting'];?>
]</span><?php } else { ?><a href="cart.php" style="color:#cc0000;">[<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartdomainsnohosting'];?>
]</a><?php }?>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['eppenabled']) {?>
                            <div class="col-sm-12">
                                <div class="form-group prepend-icon">
                                    <input type="text" name="epp[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]" id="inputEppcode<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value['eppvalue'];?>
" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaineppcode'];?>
" />
                                    <label for="cardno" class="field-icon">
                                        <i class="fa fa-calendar"></i>
                                    </label>
                                    <span class="field-help-text">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaineppcodedesc'];?>

                                    </span>
                                </div>
                            </div>
                        <?php }?>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement']||$_smarty_tpl->tpl_vars['domain']->value['emailforwarding']||$_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>
                        <div class="row addon-products">

                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement']) {?>
                                <div class="col-sm-<?php echo smarty_function_math(array('equation'=>"12 / numAddons",'numAddons'=>$_smarty_tpl->tpl_vars['domain']->value['addonsCount']),$_smarty_tpl);?>
">
                                    <div class="panel panel-default panel-addon<?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagementselected']) {?> panel-addon-selected<?php }?>">
                                        <div class="panel-body">
                                            <label>
                                                <input type="checkbox" name="dnsmanagement[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]"<?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagementselected']) {?> checked<?php }?> />
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaindnsmanagement'];?>

                                            </label><br />
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsdnsmanagementinfo'];?>

                                        </div>
                                        <div class="panel-price">
                                            <?php echo $_smarty_tpl->tpl_vars['domain']->value['dnsmanagementprice'];?>
 / <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>

                                        </div>
                                        <div class="panel-add">
                                            <i class="fa fa-plus"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addToCart'];?>

                                        </div>
                                    </div>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>
                                <div class="col-sm-<?php echo smarty_function_math(array('equation'=>"12 / numAddons",'numAddons'=>$_smarty_tpl->tpl_vars['domain']->value['addonsCount']),$_smarty_tpl);?>
">
                                    <div class="panel panel-default panel-addon<?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotectionselected']) {?> panel-addon-selected<?php }?>">
                                        <div class="panel-body">
                                            <label>
                                                <input type="checkbox" name="idprotection[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]"<?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotectionselected']) {?> checked<?php }?> />
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainidprotection'];?>

                                                </label><br />
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsidprotectioninfo'];?>

                                        </div>
                                        <div class="panel-price">
                                            <?php echo $_smarty_tpl->tpl_vars['domain']->value['idprotectionprice'];?>
 / <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>

                                        </div>
                                        <div class="panel-add">
                                            <i class="fa fa-plus"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addToCart'];?>

                                        </div>
                                    </div>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwarding']) {?>
                                <div class="col-sm-<?php echo smarty_function_math(array('equation'=>"12 / numAddons",'numAddons'=>$_smarty_tpl->tpl_vars['domain']->value['addonsCount']),$_smarty_tpl);?>
">
                                    <div class="panel panel-default panel-addon<?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwardingselected']) {?> panel-addon-selected<?php }?>">
                                        <div class="panel-body">
                                            <label>
                                                <input type="checkbox" name="emailforwarding[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]"<?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwardingselected']) {?> checked<?php }?> />
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainemailforwarding'];?>

                                            </label><br />
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsemailforwardinginfo'];?>

                                        </div>
                                        <div class="panel-price">
                                            <?php echo $_smarty_tpl->tpl_vars['domain']->value['emailforwardingprice'];?>
 / <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>

                                        </div>
                                        <div class="panel-add">
                                            <i class="fa fa-plus"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addToCart'];?>

                                        </div>
                                    </div>
                                </div>
                            <?php }?>

                        </div>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars['domainfield'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domainfield']->_loop = false;
 $_smarty_tpl->tpl_vars['domainfieldname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['domain']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domainfield']->key => $_smarty_tpl->tpl_vars['domainfield']->value) {
$_smarty_tpl->tpl_vars['domainfield']->_loop = true;
 $_smarty_tpl->tpl_vars['domainfieldname']->value = $_smarty_tpl->tpl_vars['domainfield']->key;
?>
                        <div class="row">
                            <div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['domainfieldname']->value;?>
:</div>
                            <div class="col-sm-8"><?php echo $_smarty_tpl->tpl_vars['domainfield']->value;?>
</div>
                        </div>
                    <?php } ?>

                <?php } ?>

                <?php if ($_smarty_tpl->tpl_vars['atleastonenohosting']->value) {?>

                    <div class="sub-heading">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameservers'];?>
</span>
                    </div>

                    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartnameserversdesc'];?>
</p>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNs1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameserver1'];?>
</label>
                                <input type="text" class="form-control" id="inputNs1" name="domainns1" value="<?php echo $_smarty_tpl->tpl_vars['domainns1']->value;?>
" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNs2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameserver2'];?>
</label>
                                <input type="text" class="form-control" id="inputNs2" name="domainns2" value="<?php echo $_smarty_tpl->tpl_vars['domainns2']->value;?>
" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNs3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameserver3'];?>
</label>
                                <input type="text" class="form-control" id="inputNs3" name="domainns3" value="<?php echo $_smarty_tpl->tpl_vars['domainns3']->value;?>
" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNs1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameserver4'];?>
</label>
                                <input type="text" class="form-control" id="inputNs4" name="domainns4" value="<?php echo $_smarty_tpl->tpl_vars['domainns4']->value;?>
" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputNs5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameserver5'];?>
</label>
                                <input type="text" class="form-control" id="inputNs5" name="domainns5" value="<?php echo $_smarty_tpl->tpl_vars['domainns5']->value;?>
" />
                            </div>
                        </div>
                    </div>

                <?php }?>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>

                        &nbsp;<i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php }} ?>
