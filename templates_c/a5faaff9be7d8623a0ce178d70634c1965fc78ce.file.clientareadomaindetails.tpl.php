<?php /* Smarty version Smarty-3.1.21, created on 2016-10-11 14:09:14
         compiled from "/var/www/html/templates/six/clientareadomaindetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25033053457fd2acaa0c182-47779494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5faaff9be7d8623a0ce178d70634c1965fc78ce' => 
    array (
      0 => '/var/www/html/templates/six/clientareadomaindetails.tpl',
      1 => 1470182401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25033053457fd2acaa0c182-47779494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'registrarcustombuttonresult' => 0,
    'LANG' => 0,
    'systemStatus' => 0,
    'lockstatus' => 0,
    'domain' => 0,
    'firstpaymentamount' => 0,
    'registrationdate' => 0,
    'recurringamount' => 0,
    'registrationperiod' => 0,
    'nextduedate' => 0,
    'paymentmethod' => 0,
    'status' => 0,
    'registrarclientarea' => 0,
    'hookOutput' => 0,
    'output' => 0,
    'managementoptions' => 0,
    'domainid' => 0,
    'changeAutoRenewStatusSuccessful' => 0,
    'autorenew' => 0,
    'nameservererror' => 0,
    'subaction' => 0,
    'updatesuccess' => 0,
    'error' => 0,
    'defaultns' => 0,
    'num' => 0,
    'nameservers' => 0,
    'addons' => 0,
    'addonstatus' => 0,
    'addonspricing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57fd2acab9e1a9_26297053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fd2acab9e1a9_26297053')) {function content_57fd2acab9e1a9_26297053($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['registrarcustombuttonresult']->value=="success") {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['moduleactionsuccess'],'textcenter'=>true), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['registrarcustombuttonresult']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['moduleactionfailed'],'textcenter'=>true), 0);?>

<?php }?>

<div class="tab-content margin-bottom">
    <div class="tab-pane fade in active" id="tabOverview">

        <?php if ($_smarty_tpl->tpl_vars['systemStatus']->value!='Active') {?>
            <div class="alert alert-warning text-center" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainCannotBeManagedUnlessActive'];?>

            </div>
        <?php }?>

        <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['overview'];?>
</h3>

        <?php if ($_smarty_tpl->tpl_vars['lockstatus']->value=="unlocked") {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("domainUnlockedMsg", null, null); ob_start(); ?><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincurrentlyunlocked'];?>
</strong><br /><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincurrentlyunlockedexp'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>Smarty::$_smarty_vars['capture']['domainUnlockedMsg']), 0);?>

        <?php }?>

        <div class="row">
            <div class="col-sm-offset-1 col-sm-5">
                <h4><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingdomain'];?>
:</strong></h4> <a href="http://<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</a>
            </div>
            <div class="col-sm-5">
                <h4><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['firstpaymentamount'];?>
:</strong></h4> <span><?php echo $_smarty_tpl->tpl_vars['firstpaymentamount']->value;?>
</span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-5">
                <h4><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingregdate'];?>
:</strong></h4> <span><?php echo $_smarty_tpl->tpl_vars['registrationdate']->value;?>
</span>
            </div>
            <div class="col-sm-6">
                <h4><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['recurringamount'];?>
:</strong></h4> <?php echo $_smarty_tpl->tpl_vars['recurringamount']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['every'];?>
 <?php echo $_smarty_tpl->tpl_vars['registrationperiod']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-5">
                <h4><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>
:</strong></h4> <?php echo $_smarty_tpl->tpl_vars['nextduedate']->value;?>

            </div>
            <div class="col-sm-6">
                <h4><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>
:</strong></h4> <?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-1 col-sm-5">
                <h4><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastatus'];?>
:</strong></h4> <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['registrarclientarea']->value) {?>
            <div class="moduleoutput">
                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['registrarclientarea']->value,'modulebutton','btn');?>

            </div>
        <?php }?>

        <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hookOutput']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->_loop = true;
?>
            <div>
                <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

            </div>
        <?php } ?>

        <br />

        <?php if ($_smarty_tpl->tpl_vars['systemStatus']->value=='Active') {?>

            <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['doToday'];?>
</h4>

            <ul>
                <?php if ($_smarty_tpl->tpl_vars['managementoptions']->value['nameservers']) {?>
                    <li>
                        <a class="tabControlLink" data-toggle="tab" href="#tabNameservers">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['changeDomainNS'];?>

                        </a>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['managementoptions']->value['contacts']) {?>
                    <li>
                        <a href="clientarea.php?action=domaincontacts&domainid=<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['updateWhoisContact'];?>

                        </a>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['managementoptions']->value['locking']) {?>
                    <li>
                        <a class="tabControlLink" data-toggle="tab" href="#tabReglock">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['changeRegLock'];?>

                        </a>
                    </li>
                <?php }?>
                <li>
                    <a href="cart.php?gid=renewals">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['renewYourDomain'];?>

                    </a>
                </li>
            </ul>

        <?php }?>

    </div>
    <div class="tab-pane fade" id="tabAutorenew">

        <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsautorenew'];?>
</h3>

        <?php if ($_smarty_tpl->tpl_vars['changeAutoRenewStatusSuccessful']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['changessavedsuccessfully'],'textcenter'=>true), 0);?>

        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['domainrenewexp']), 0);?>


        <br />

        <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainautorenewstatus'];?>
: <span class="label label-<?php if ($_smarty_tpl->tpl_vars['autorenew']->value) {?>success<?php } else { ?>danger<?php }?>"><?php if ($_smarty_tpl->tpl_vars['autorenew']->value) {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsautorenewenabled'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsautorenewdisabled'];
}?></span></h2>

        <br />
        <br />

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domaindetails#tabAutorenew">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
">
            <input type="hidden" name="sub" value="autorenew" />
            <?php if ($_smarty_tpl->tpl_vars['autorenew']->value) {?>
                <input type="hidden" name="autorenew" value="disable">
                <p class="text-center">
                    <input type="submit" class="btn btn-lg btn-danger" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsautorenewdisable'];?>
" />
                </p>
            <?php } else { ?>
                <input type="hidden" name="autorenew" value="enable">
                <p class="text-center">
                    <input type="submit" class="btn btn-lg btn-success" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsautorenewenable'];?>
" />
                </p>
            <?php }?>
        </form>

    </div>
    <div class="tab-pane fade" id="tabNameservers">

        <h3>Nameservers</h3>

        <?php if ($_smarty_tpl->tpl_vars['nameservererror']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['nameservererror']->value,'textcenter'=>true), 0);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['subaction']->value=="savens") {?>
            <?php if ($_smarty_tpl->tpl_vars['updatesuccess']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['changessavedsuccessfully'],'textcenter'=>true), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['error']->value,'textcenter'=>true), 0);?>

            <?php }?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['domainnsexp']), 0);?>


        <form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domaindetails#tabNameservers">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
" />
            <input type="hidden" name="sub" value="savens" />
            <div class="radio">
                <label>
                    <input type="radio" name="nschoice" value="default" onclick="disableFields('domnsinputs',true)"<?php if ($_smarty_tpl->tpl_vars['defaultns']->value) {?> checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['nschoicedefault'];?>

                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="nschoice" value="custom" onclick="disableFields('domnsinputs',false)"<?php if (!$_smarty_tpl->tpl_vars['defaultns']->value) {?> checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['nschoicecustom'];?>

                </label>
            </div>
            <br />
            <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['num']->step = 1;$_smarty_tpl->tpl_vars['num']->total = (int) ceil(($_smarty_tpl->tpl_vars['num']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['num']->step));
if ($_smarty_tpl->tpl_vars['num']->total > 0) {
for ($_smarty_tpl->tpl_vars['num']->value = 1, $_smarty_tpl->tpl_vars['num']->iteration = 1;$_smarty_tpl->tpl_vars['num']->iteration <= $_smarty_tpl->tpl_vars['num']->total;$_smarty_tpl->tpl_vars['num']->value += $_smarty_tpl->tpl_vars['num']->step, $_smarty_tpl->tpl_vars['num']->iteration++) {
$_smarty_tpl->tpl_vars['num']->first = $_smarty_tpl->tpl_vars['num']->iteration == 1;$_smarty_tpl->tpl_vars['num']->last = $_smarty_tpl->tpl_vars['num']->iteration == $_smarty_tpl->tpl_vars['num']->total;?>
                <div class="form-group">
                    <label for="inputNs<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanameserver'];?>
 <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</label>
                    <div class="col-sm-7">
                        <input type="text" name="ns<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="form-control domnsinputs" id="inputNs<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['nameservers']->value[$_smarty_tpl->tpl_vars['num']->value]['value'];?>
" />
                    </div>
                </div>
            <?php }} ?>
            <p class="text-center">
                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['changenameservers'];?>
" />
            </p>
        </form>

    </div>
    <div class="tab-pane fade" id="tabReglock">

        <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainregistrarlock'];?>
</h3>

        <?php if ($_smarty_tpl->tpl_vars['subaction']->value=="savereglock") {?>
            <?php if ($_smarty_tpl->tpl_vars['updatesuccess']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['changessavedsuccessfully'],'textcenter'=>true), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['error']->value,'textcenter'=>true), 0);?>

            <?php }?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['domainlockingexp']), 0);?>


        <br />

        <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainreglockstatus'];?>
: <span class="label label-<?php if ($_smarty_tpl->tpl_vars['lockstatus']->value=="locked") {?>success<?php } else { ?>danger<?php }?>"><?php if ($_smarty_tpl->tpl_vars['lockstatus']->value=="locked") {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsautorenewenabled'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainsautorenewdisabled'];
}?></span></h2>

        <br />
        <br />

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domaindetails#tabReglock">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
">
            <input type="hidden" name="sub" value="savereglock" />
            <?php if ($_smarty_tpl->tpl_vars['lockstatus']->value=="locked") {?>
                <p class="text-center">
                    <input type="submit" class="btn btn-lg btn-danger" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainreglockdisable'];?>
" />
                </p>
            <?php } else { ?>
                <input type="hidden" name="autorenew" value="enable">
                <p class="text-center">
                    <input type="submit" class="btn btn-lg btn-success" name="reglock" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainreglockenable'];?>
" />
                </p>
            <?php }?>
        </form>

    </div>
    <div class="tab-pane fade" id="tabRelease">

        <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrelease'];?>
</h3>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['domainreleasedescription']), 0);?>


        <form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domaindetails">
            <input type="hidden" name="sub" value="releasedomain">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
">

            <div class="form-group">
                <label for="inputReleaseTag" class="col-xs-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainreleasetag'];?>
</label>
                <div class="col-xs-6 col-sm-5">
                    <input type="text" class="form-control" id="inputReleaseTag" name="transtag" />
                </div>
            </div>

            <p class="text-center">
                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrelease'];?>
" class="btn btn-primary" />
            </p>
        </form>

    </div>
    <div class="tab-pane fade" id="tabAddons">

        <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddons'];?>
</h3>

        <p>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsinfo'];?>

        </p>

        <?php if ($_smarty_tpl->tpl_vars['addons']->value['idprotection']) {?>
            <div class="row margin-bottom">
                <div class="col-xs-3 col-md-2 text-center">
                    <i class="fa fa-shield fa-3x"></i>
                </div>
                <div class="col-xs-9 col-md-10">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainidprotection'];?>
</strong><br />
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsidprotectioninfo'];?>
<br />
                    <form action="clientarea.php?action=domainaddons" method="post">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
"/>
                        <?php if ($_smarty_tpl->tpl_vars['addonstatus']->value['idprotection']) {?>
                            <input type="hidden" name="disable" value="idprotect"/>
                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['disable'];?>
" class="btn btn-danger"/>
                        <?php } else { ?>
                            <input type="hidden" name="buy" value="idprotect"/>
                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsbuynow'];?>
 <?php echo $_smarty_tpl->tpl_vars['addonspricing']->value['idprotection'];?>
" class="btn btn-success"/>
                        <?php }?>
                    </form>
                </div>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['dnsmanagement']) {?>
            <div class="row margin-bottom">
                <div class="col-xs-3 col-md-2 text-center">
                    <i class="fa fa-cloud fa-3x"></i>
                </div>
                <div class="col-xs-9 col-md-10">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsdnsmanagement'];?>
</strong><br />
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsdnsmanagementinfo'];?>
<br />
                    <form action="clientarea.php?action=domainaddons" method="post">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
"/>
                        <?php if ($_smarty_tpl->tpl_vars['addonstatus']->value['dnsmanagement']) {?>
                            <input type="hidden" name="disable" value="dnsmanagement"/>
                            <a class="btn btn-success" href="clientarea.php?action=domaindns&domainid=<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['manage'];?>
</a> <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['disable'];?>
" class="btn btn-danger"/>
                        <?php } else { ?>
                            <input type="hidden" name="buy" value="dnsmanagement"/>
                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsbuynow'];?>
 <?php echo $_smarty_tpl->tpl_vars['addonspricing']->value['dnsmanagement'];?>
" class="btn btn-success"/>
                        <?php }?>
                    </form>
                </div>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['emailforwarding']) {?>
            <div class="row margin-bottom">
                <div class="col-xs-3 col-md-2 text-center">
                    <i class="fa fa-envelope fa-3x">&nbsp;</i><i class="fa fa-mail-forward fa-2x"></i>
                </div>
                <div class="col-xs-9 col-md-10">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainemailforwarding'];?>
</strong><br />
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsemailforwardinginfo'];?>
<br />
                    <form action="clientarea.php?action=domainaddons" method="post">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
"/>
                        <?php if ($_smarty_tpl->tpl_vars['addonstatus']->value['emailforwarding']) {?>
                            <input type="hidden" name="disable" value="emailfwd"/>
                            <a class="btn btn-success" href="clientarea.php?action=domainemailforwarding&domainid=<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['manage'];?>
</a> <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['disable'];?>
" class="btn btn-danger"/>
                        <?php } else { ?>
                            <input type="hidden" name="buy" value="emailfwd"/>
                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddonsbuynow'];?>
 <?php echo $_smarty_tpl->tpl_vars['addonspricing']->value['emailforwarding'];?>
" class="btn btn-success"/>
                        <?php }?>
                    </form>
                </div>
            </div>
        <?php }?>
    </div>
</div>

<?php }} ?>
