<?php /* Smarty version Smarty-3.1.21, created on 2016-08-03 19:10:20
         compiled from "/var/www/html/templates/orderforms/standard_cart/domainoptions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199022746757a279dc9ce5e7-25297174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0bed7cc3e67631830a7bfbc52bd175b4c1e4e8a' => 
    array (
      0 => '/var/www/html/templates/orderforms/standard_cart/domainoptions.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199022746757a279dc9ce5e7-25297174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'invalid' => 0,
    'reason' => 0,
    'LANG' => 0,
    'alreadyindb' => 0,
    'checktype' => 0,
    'regenabled' => 0,
    'status' => 0,
    'domain' => 0,
    'searchResults' => 0,
    'price' => 0,
    'years' => 0,
    'transferenabled' => 0,
    'transferprice' => 0,
    'transferterm' => 0,
    'sld' => 0,
    'tld' => 0,
    'result' => 0,
    'num' => 0,
    'continueok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57a279dcaba932_58739825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a279dcaba932_58739825')) {function content_57a279dcaba932_58739825($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['invalid']->value) {?>
    <div class="domain-checker-result-headline domain-checker-unavailable">
        <?php if ($_smarty_tpl->tpl_vars['reason']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['reason']->value;?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartdomaininvalid'];?>

        <?php }?>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['alreadyindb']->value) {?>
    <div class="domain-checker-result-headline domain-checker-unavailable">
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartdomainexists'];?>

    </div>
<?php } else { ?>

    <?php if ($_smarty_tpl->tpl_vars['checktype']->value=="register"&&$_smarty_tpl->tpl_vars['regenabled']->value) {?>

        <input type="hidden" name="domainoption" value="register" />

        <?php if ($_smarty_tpl->tpl_vars['status']->value=="available"||$_smarty_tpl->tpl_vars['status']->value=="error") {?>

            <div class="domain-checker-result-headline domain-checker-available">
                <?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cartcongratsdomainavailable'],$_smarty_tpl->tpl_vars['domain']->value);?>

            </div>

            <input type="hidden" name="domains[]" value="<?php echo $_smarty_tpl->tpl_vars['searchResults']->value['domainName'];?>
" />
            <input type="hidden" name="domainsregperiod[<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['searchResults']->value['shortestPeriod']['period'];?>
" />

            <div class="text-center">
                <?php if (count($_smarty_tpl->tpl_vars['searchResults']->value['pricing'])==1) {?>
                    <p class="margin-bottom"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['domainAddedToCart'];?>
</p>
                    <button type="button" class="btn btn-default btn-lg margin-bottom">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        <?php echo $_smarty_tpl->tpl_vars['searchResults']->value['shortestPeriod']['register'];?>

                    </button>
                <?php } else { ?>
                    <p class="margin-bottom"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['registerLongerAndSave'];?>
</p>
                    <div class="btn-group btn-group-lg margin-bottom">
                        <button type="button" class="btn btn-default btn-sm">
                            <span name="<?php echo $_smarty_tpl->tpl_vars['searchResults']->value['domainName'];?>
-selected-price">
                                <b class="glyphicon glyphicon-shopping-cart"></b>
                                <?php echo $_smarty_tpl->tpl_vars['searchResults']->value['shortestPeriod']['period'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['searchResults']->value['shortestPeriod']['register'];?>

                            </span>
                        </button>
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle additional-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b class="caret"></b>
                            <span class="sr-only">
                                <?php echo WHMCS\Smarty::langFunction(array('key'=>"domainChecker.additionalPricingOptions",'domain'=>$_smarty_tpl->tpl_vars['searchResults']->value['domainName']),$_smarty_tpl);?>

                            </span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <?php  $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price']->_loop = false;
 $_smarty_tpl->tpl_vars['years'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['searchResults']->value['pricing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price']->key => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->_loop = true;
 $_smarty_tpl->tpl_vars['years']->value = $_smarty_tpl->tpl_vars['price']->key;
?>
                                <li>
                                    <a href="#" onclick="selectDomainPricing('<?php echo $_smarty_tpl->tpl_vars['searchResults']->value['domainName'];?>
', '<?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>
', <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
');return false;">
                                        <b class="glyphicon glyphicon-shopping-cart"></b>
                                        <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>

                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php }?>
            </div>


            <?php if (isset($_smarty_tpl->tpl_vars['continueok'])) {$_smarty_tpl->tpl_vars['continueok'] = clone $_smarty_tpl->tpl_vars['continueok'];
$_smarty_tpl->tpl_vars['continueok']->value = true; $_smarty_tpl->tpl_vars['continueok']->nocache = null; $_smarty_tpl->tpl_vars['continueok']->scope = 0;
} else $_smarty_tpl->tpl_vars['continueok'] = new Smarty_variable(true, null, 0);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="unavailable") {?>

            <div class="domain-checker-result-headline domain-checker-unavailable">
                <?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cartdomaintaken'],$_smarty_tpl->tpl_vars['domain']->value);?>

            </div>

        <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['checktype']->value=="transfer"&&$_smarty_tpl->tpl_vars['transferenabled']->value) {?>

        <input type="hidden" name="domainoption" value="transfer" />

        <?php if ($_smarty_tpl->tpl_vars['status']->value=="available") {?>

            <div class="domain-checker-result-headline domain-checker-unavailable">
                <?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['carttransfernotregistered'],$_smarty_tpl->tpl_vars['domain']->value);?>

            </div>
            <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['tryRegisteringInstead'];?>
</p>

        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="unavailable"||$_smarty_tpl->tpl_vars['status']->value=="error") {?>

            <div class="domain-checker-result-headline domain-checker-available">
                <?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['carttransferpossible'],$_smarty_tpl->tpl_vars['domain']->value,$_smarty_tpl->tpl_vars['transferprice']->value);?>

            </div>

            <input type="hidden" name="domains[]" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" />
            <input type="hidden" name="domainsregperiod[<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['transferterm']->value;?>
" />

            <?php if (isset($_smarty_tpl->tpl_vars['continueok'])) {$_smarty_tpl->tpl_vars['continueok'] = clone $_smarty_tpl->tpl_vars['continueok'];
$_smarty_tpl->tpl_vars['continueok']->value = true; $_smarty_tpl->tpl_vars['continueok']->nocache = null; $_smarty_tpl->tpl_vars['continueok']->scope = 0;
} else $_smarty_tpl->tpl_vars['continueok'] = new Smarty_variable(true, null, 0);?>

        <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['checktype']->value=="owndomain"||$_smarty_tpl->tpl_vars['checktype']->value=="subdomain") {?>

        <input type="hidden" name="domainoption" value="<?php echo $_smarty_tpl->tpl_vars['checktype']->value;?>
" />
        <input type="hidden" name="sld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" />
        <input type="hidden" name="tld" value="<?php echo $_smarty_tpl->tpl_vars['tld']->value;?>
" />
        <?php echo '<script'; ?>
 language="javascript">
            domainGotoNextStep();
        <?php echo '</script'; ?>
>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['searchResults']->value['suggestions']) {?>

        <div class="sub-heading">
            <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartotherdomainsuggestions'];?>
</span>
        </div>

        <div class="row domain-suggestions">
            <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['searchResults']->value['suggestions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['result']->key;
?>
                <div class="col-sm-6 margin-bottom-5">
                    <input type="hidden" name="domainsregperiod[<?php echo $_smarty_tpl->tpl_vars['result']->value['domainName'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['shortestPeriod']['period'];?>
" />
                    <label>
                        <input type="checkbox" name="domains[]" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['domainName'];?>
" id="domainSuggestion<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="suggested-domains" />
                        <?php echo $_smarty_tpl->tpl_vars['result']->value['domainName'];?>

                    </label>
                    <div class="pull-right">
                        <?php if (count($_smarty_tpl->tpl_vars['result']->value['pricing'])>1) {?>
                            <div class="btn-group domain-suggestion-pricing">
                        <?php }?>
                        <button type="button" class="btn btn-default btn-sm" onclick="selectDomainPricing('<?php echo $_smarty_tpl->tpl_vars['result']->value['domainName'];?>
', '<?php echo $_smarty_tpl->tpl_vars['result']->value['shortestPeriod']['register'];?>
', <?php echo $_smarty_tpl->tpl_vars['result']->value['shortestPeriod']['period'];?>
, '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
', '<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
')">
                            <span name="<?php echo $_smarty_tpl->tpl_vars['result']->value['domainName'];?>
-selected-price">
                                <b class="glyphicon glyphicon-shopping-cart"></b>
                                <?php echo $_smarty_tpl->tpl_vars['result']->value['shortestPeriod']['period'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['result']->value['shortestPeriod']['register'];?>

                            </span>
                        </button>
                        <?php if (count($_smarty_tpl->tpl_vars['result']->value['pricing'])>1) {?>
                            <button type="button" class="btn btn-default btn-sm dropdown-toggle additional-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <b class="caret"></b>
                                <span class="sr-only">
                                    <?php echo WHMCS\Smarty::langFunction(array('key'=>"domainChecker.additionalPricingOptions",'domain'=>$_smarty_tpl->tpl_vars['result']->value['domainName']),$_smarty_tpl);?>

                                </span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <?php  $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price']->_loop = false;
 $_smarty_tpl->tpl_vars['years'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value['pricing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price']->key => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->_loop = true;
 $_smarty_tpl->tpl_vars['years']->value = $_smarty_tpl->tpl_vars['price']->key;
?>
                                    <li>
                                        <a href="#" onclick="selectDomainPricing('<?php echo $_smarty_tpl->tpl_vars['result']->value['domainName'];?>
', '<?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>
', <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
', '<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
');return false;">
                                            <b class="glyphicon glyphicon-shopping-cart"></b>
                                            <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>

                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php }?>
                    </div>
                </div>
            <?php } ?>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['continueok'])) {$_smarty_tpl->tpl_vars['continueok'] = clone $_smarty_tpl->tpl_vars['continueok'];
$_smarty_tpl->tpl_vars['continueok']->value = true; $_smarty_tpl->tpl_vars['continueok']->nocache = null; $_smarty_tpl->tpl_vars['continueok']->scope = 0;
} else $_smarty_tpl->tpl_vars['continueok'] = new Smarty_variable(true, null, 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['continueok']->value) {?>
        <div class="alert alert-info info-text-sm">
            <i class="fa fa-info-circle"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['domainAvailabilityCached'];?>

        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>

                &nbsp;<i class="fa fa-arrow-circle-right"></i>
            </button>
        </div>
    <?php }?>

<?php }?>

<?php echo '<script'; ?>
>
    jQuery('input.suggested-domains').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
        increaseArea: '20%'
    });
<?php echo '</script'; ?>
>
<?php }} ?>
