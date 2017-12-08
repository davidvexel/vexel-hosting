<?php /* Smarty version Smarty-3.1.21, created on 2016-10-11 14:05:21
         compiled from "/var/www/html/templates/six/clientareadomains.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123796690357fd29e1dc1522-65614199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '168f4bae2fc73ea7eb7f9b86bc216e38fcf4a585' => 
    array (
      0 => '/var/www/html/templates/six/clientareadomains.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123796690357fd29e1dc1522-65614199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warnings' => 0,
    'orderby' => 0,
    'sort' => 0,
    'LANG' => 0,
    'domains' => 0,
    'domain' => 0,
    'renewals' => 0,
    'renewal' => 0,
    'selectedIDs' => 0,
    'renewalOption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57fd29e1ed9837_76037906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fd29e1ed9837_76037906')) {function content_57fd29e1ed9837_76037906($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['warnings']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"warning",'msg'=>$_smarty_tpl->tpl_vars['warnings']->value,'textcenter'=>true), 0);?>

<?php }?>
<div class="tab-content">
    <div class="tab-pane fade in active" id="tabOverview">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tableName'=>"DomainsList",'noSortColumns'=>"0, 6",'startOrderCol'=>"1",'filterColumn'=>"5"), 0);?>

        <?php echo '<script'; ?>
 type="text/javascript">
            jQuery(document).ready( function ()
            {
                var table = jQuery('#tableDomainsList').removeClass('hidden').DataTable();
                <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='domain') {?>
                    table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='regdate'||$_smarty_tpl->tpl_vars['orderby']->value=='registrationdate') {?>
                    table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='nextduedate') {?>
                    table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='autorenew') {?>
                    table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='status') {?>
                    table.order(5, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php }?>
                table.draw();
                jQuery('#tableLoading').addClass('hidden');
            });
        <?php echo '</script'; ?>
>
        <form id="domainForm" method="post" action="clientarea.php?action=bulkdomain">
            <input id="bulkaction" name="update" type="hidden" />

            <div class="table-container clearfix">
                <table id="tableDomainsList" class="table table-list hidden">
                    <thead>
                        <tr>
                            <th width="20"></th>
                            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomain'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['regdate'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['nextdue'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsautorenew'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstatus'];?>
</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['domain']->key;
?>
                        <tr onclick="clickableSafeRedirect(event, 'clientarea.php?action=domaindetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
', false)">
                            <td>
                                <input type="checkbox" name="domids[]" class="domids stopEventBubble" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
" />
                            </td>
                            <td><a href="http://<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
</a></td>
                            <td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['domain']->value['normalisedRegistrationDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['domain']->value['registrationdate'];?>
</td>
                            <td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['domain']->value['normalisedNextDueDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['domain']->value['nextduedate'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['domain']->value['autorenew']) {?>
                                    <i class="fa fa-fw fa-check text-success"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsautorenewenabled'];?>

                                <?php } else { ?>
                                    <i class="fa fa-fw fa-times text-danger"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsautorenewdisabled'];?>

                                <?php }?>
                            </td>
                            <td>
                                <span class="label status status-<?php echo $_smarty_tpl->tpl_vars['domain']->value['statusClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['domain']->value['statustext'];?>
</span>
                                <span class="hidden">
                                    <?php if ($_smarty_tpl->tpl_vars['domain']->value['next30']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsExpiringInTheNext30Days'];?>
<br /><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['domain']->value['next90']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsExpiringInTheNext90Days'];?>
<br /><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['domain']->value['next180']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsExpiringInTheNext180Days'];?>
<br /><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['domain']->value['after180']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsExpiringInMoreThan180Days'];
}?>
                                </span>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="clientarea.php?action=domaindetails&id=<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
" class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu text-left" role="menu">
                                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['status']=='Active') {?>
                                            <li><a href="clientarea.php?action=domaindetails&id=<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
#tabNameservers"><i class="glyphicon glyphicon-globe"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainmanagens'];?>
</a></li>
                                            <li><a href="clientarea.php?action=domaincontacts&domainid=<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
"><i class="glyphicon glyphicon-user"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincontactinfoedit'];?>
</a></li>
                                            <li><a href="clientarea.php?action=domaindetails&id=<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
#tabAutorenew"><i class="glyphicon glyphicon-globe"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainautorenewstatus'];?>
</a></li>
                                            <li class="divider"></li>
                                        <?php }?>
                                        <li><a href="clientarea.php?action=domaindetails&id=<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
"><i class="glyphicon glyphicon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['managedomain'];?>
</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="text-center" id="tableLoading">
                    <p><i class="fa fa-spinner fa-spin"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>
</p>
                </div>
            </div>
        </form>

        <div class="btn-group margin-bottom">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-folder-open"></span> &nbsp; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['withselected'];?>
 <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#" id="nameservers" class="setBulkAction"><i class="glyphicon glyphicon-globe"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainmanagens'];?>
</a></li>
                <li><a href="#" id="autorenew" class="setBulkAction"><i class="glyphicon glyphicon-refresh"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainautorenewstatus'];?>
</a></li>
                <li><a href="#" id="reglock" class="setBulkAction"><i class="glyphicon glyphicon-lock"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainreglockstatus'];?>
</a></li>
                <li><a href="#" id="contactinfo" class="setBulkAction"><i class="glyphicon glyphicon-user"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincontactinfoedit'];?>
</a></li>
            </ul>
        </div>
    </div>
    <div class="tab-pane fade in" id="tabRenew">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tableName'=>"RenewalsList",'noSortColumns'=>"3, 4, 5",'startOrderCol'=>"0",'filterColumn'=>"1",'dontControlActiveClass'=>true), 0);?>

        <?php echo '<script'; ?>
 type="text/javascript">
            var observer = new MutationObserver(function(mutations) {
                jQuery('#Secondary_Sidebar-My_Domains_Actions-Renew_Domain').toggleClass('active')
            });
            var target = document.querySelector('#tabRenew');
            observer.observe(target, {
                attributes: true
            });

        <?php echo '</script'; ?>
>
        <div class="table-container clearfix">
            <table id="tableRenewalsList" class="table table-list">
                <thead>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomain'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstatus'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareadomainexpirydate'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaindaysuntilexpiry'];?>
</th>
                        <th>&nbsp;</th>
                        <th>
                            <div id="btnCheckout" style="display:none;">
                                <a href="cart.php?a=view" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsgotocheckout'];?>
 &raquo;</a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['renewal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['renewal']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['renewals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['renewal']->key => $_smarty_tpl->tpl_vars['renewal']->value) {
$_smarty_tpl->tpl_vars['renewal']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['renewal']->key;
?>
                        <tr id="domainRow<?php echo $_smarty_tpl->tpl_vars['renewal']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['selectedIDs']->value&&in_array($_smarty_tpl->tpl_vars['renewal']->value['id'],$_smarty_tpl->tpl_vars['selectedIDs']->value)) {?>class="highlight"<?php }?>>
                            <td id="domain<?php echo $_smarty_tpl->tpl_vars['renewal']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['renewal']->value['domain'];?>
</td>
                            <td id="status<?php echo $_smarty_tpl->tpl_vars['renewal']->value['id'];?>
">
                                <span class="label status status-<?php echo $_smarty_tpl->tpl_vars['renewal']->value['statusClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['renewal']->value['status'];?>
</span>
                                <span class="hidden">
                                    <?php if ($_smarty_tpl->tpl_vars['renewal']->value['next30']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsExpiringInTheNext30Days'];?>
<br /><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['renewal']->value['next90']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsExpiringInTheNext90Days'];?>
<br /><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['renewal']->value['next180']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsExpiringInTheNext180Days'];?>
<br /><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['renewal']->value['after180']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsExpiringInMoreThan180Days'];
}?>
                                </span>
                            </td>
                            <td id="expiry<?php echo $_smarty_tpl->tpl_vars['renewal']->value['id'];?>
"><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['renewal']->value['normalisedExpiryDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['renewal']->value['expiryDate'];?>
</td>
                            <td id="days<?php echo $_smarty_tpl->tpl_vars['renewal']->value['id'];?>
" class="text-center">
                                <?php if ($_smarty_tpl->tpl_vars['renewal']->value['daysUntilExpiry']>30) {?>
                                    <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['renewal']->value['daysUntilExpiry'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewalsdays'];?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['renewal']->value['daysUntilExpiry']>0) {?>
                                    <span class="text-warning"><?php echo $_smarty_tpl->tpl_vars['renewal']->value['daysUntilExpiry'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewalsdays'];?>
</span>
                                <?php } else { ?>
                                    <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['renewal']->value['daysUntilExpiry']*-1;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewalsdaysago'];?>
</span>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['renewal']->value['inGracePeriod']) {?>
                                    <br />
                                    <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewalsingraceperiod'];?>
</span>
                                <?php }?>
                            </td>
                            <td id="period<?php echo $_smarty_tpl->tpl_vars['renewal']->value['id'];?>
" class="text-center">
                                <?php if ($_smarty_tpl->tpl_vars['renewal']->value['beforeRenewLimit']) {?>
                                    <span class="text-danger">
                                        <?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['domainrenewalsbeforerenewlimit'],$_smarty_tpl->tpl_vars['renewal']->value['beforeRenewLimitDays']);?>

                                    </span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['renewal']->value['pastGracePeriod']) {?>
                                    <span class="textred"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewalspastgraceperiod'];?>
</span>
                                <?php } else { ?>
                                    <select id="renewalPeriod<?php echo $_smarty_tpl->tpl_vars['renewal']->value['id'];?>
" name="renewalPeriod[<?php echo $_smarty_tpl->tpl_vars['renewal']->value['id'];?>
]">
                                        <?php  $_smarty_tpl->tpl_vars['renewalOption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['renewalOption']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['renewal']->value['renewalOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['renewalOption']->key => $_smarty_tpl->tpl_vars['renewalOption']->value) {
$_smarty_tpl->tpl_vars['renewalOption']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['renewalOption']->value['period'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['renewalOption']->value['period'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['renewalOption']->value['price'];?>

                                            </option>
                                        <?php } ?>
                                    </select>
                                <?php }?>
                            </td>
                            <td class="text-center">
                                <?php if (!$_smarty_tpl->tpl_vars['renewal']->value['beforeRenewLimit']&&!$_smarty_tpl->tpl_vars['renewal']->value['pastGracePeriod']) {?>
                                    <button type="button" class="btn btn-primary btn-sm" id="renewButton<?php echo $_smarty_tpl->tpl_vars['renewal']->value['id'];?>
" onclick="addRenewalToCart(<?php echo $_smarty_tpl->tpl_vars['renewal']->value['id'];?>
, this)">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                    </button>
                                <?php }?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-xs-12" id="backLink">
                <a href="#tabOverview" class="btn btn-default btn-sm" data-toggle="tab" id="back">
                    <i class="glyphicon glyphicon-backward"></i> <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['LANG']->value['clientareabacklink'],'&laquo; ','');?>

                </a>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
