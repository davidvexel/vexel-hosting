<?php

function widget_system_overview($vars) {
    global $_ADMINLANG;

    $title = $_ADMINLANG['home']['sysoverview'];

    if ($_POST['getsystemoverview']) {

$result = full_query("SELECT COUNT(*) FROM tblclients WHERE status='Active'");
$data = mysql_fetch_array($result);
$activeclients = $data[0];

$result = full_query("SELECT COUNT(*) FROM tblhosting WHERE domainstatus='Active'");
$data = mysql_fetch_array($result);
$activeservices = $data[0];

$result = full_query("SELECT COUNT(*),SUM(total)-COALESCE(SUM((SELECT SUM(amountin) FROM tblaccounts WHERE tblaccounts.invoiceid=tblinvoices.id)),0) FROM tblinvoices WHERE tblinvoices.status='Unpaid' AND duedate<'" . date("Ymd") . "'");
$data = mysql_fetch_array($result);
$overdueinvoices = $data[0];
$overdueinvoicesbal = $data[1];

$result = full_query("SELECT COUNT(*) FROM tblcancelrequests INNER JOIN tblhosting ON tblhosting.id=tblcancelrequests.relid WHERE (tblhosting.domainstatus!='Cancelled' AND tblhosting.domainstatus!='Terminated')");
$data = mysql_fetch_array($result);
$pendingcancellations = $data[0];

$orders = array();
$orders["today"]["active"]=$orders["today"]["fraud"]=$orders["today"]["pending"]=$orders["today"]["cancelled"]=0;
$query = "SELECT status,COUNT(*) FROM tblorders WHERE date LIKE '".date("Y-m-d")."%' GROUP BY status";
$result = mysql_query($query);
while ($data = mysql_fetch_array($result)) {
    $orders["today"][strtolower($data[0])] = $data[1];
}
$orders["today"]["total"] = $orders["today"]["active"]+$orders["today"]["fraud"]+$orders["today"]["pending"]+$orders["today"]["cancelled"];
$orders["yesterday"]["active"]=$orders["yesterday"]["fraud"]=$orders["yesterday"]["pending"]=$orders["yesterday"]["cancelled"]=0;
$query = "SELECT status,COUNT(*) FROM tblorders WHERE date LIKE '".date("Y-m-d",mktime(0,0,0,date("m"),date("d")-1,date("Y")))."%' GROUP BY status";
$result = mysql_query($query);
while ($data = mysql_fetch_array($result)) {
    $orders["yesterday"][strtolower($data[0])] = $data[1];
}
$orders["yesterday"]["total"] = $orders["yesterday"]["active"]+$orders["yesterday"]["fraud"]+$orders["yesterday"]["pending"]+$orders["yesterday"]["cancelled"];

$statusfilter = '';
$result = select_query("tblticketstatuses","title",array("showawaiting"=>"1"));
while ($data = mysql_fetch_array($result)) $statusfilter .= "'".$data[0]."',";
$statusfilter = substr($statusfilter,0,-1);
$result = full_query("SELECT COUNT(*) FROM tbltickets WHERE status IN ($statusfilter)");
$data = mysql_fetch_array($result);
$ticketsawaitingreply = $data[0];

$statusfilter = '';
$result = select_query("tblticketstatuses","title",array("showactive"=>"1"));
while ($data = mysql_fetch_array($result)) $statusfilter .= "'".$data[0]."',";
$statusfilter = substr($statusfilter,0,-1);
$result = full_query("SELECT COUNT(*) FROM tbltickets WHERE status IN ($statusfilter) AND flag='".$vars['adminid']."'");
$data = mysql_fetch_array($result);
$ticketsflagged = $data[0];

$uninvoicedbillableitems = get_query_val("tblbillableitems","COUNT(*)",array("invoicecount"=>"0"));
$validquotes = get_query_val("tblquotes","COUNT(*)",array("validuntil"=>array("sqltype"=>">","value"=>date("Ymd"))));

echo '
<table width="100%" style="border-top:1px dashed #ccc;">
<tr>
<td class="sysoverviewlabel"><a href="orders.php">'.$_ADMINLANG['stats']['todaysorders'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$orders["today"]["total"].'</div></td>
<td class="sysoverviewlabel"><a href="clients.php?status=Active">'.$_ADMINLANG['stats']['activeclients'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$activeclients.'</div></td>
</tr>
<tr>
<td class="sysoverviewlabel"><a href="orders.php">'.$_ADMINLANG['stats']['yesterdaysorders'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$orders["yesterday"]["total"].'</div></td>
<td class="sysoverviewlabel"><a href="clientshostinglist.php?status=Active">'.$_ADMINLANG['stats']['activeservices'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$activeservices.'</div></td>
</tr>
<tr>
<td class="sysoverviewlabel"><a href="orders.php?status=Pending">'.$_ADMINLANG['stats']['todayspending'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$orders["today"]["pending"].'</div></td>
<td class="sysoverviewlabel"><a href="invoices.php?status=Overdue">'.$_ADMINLANG['stats']['overdueinvoices'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$overdueinvoices.'</div></td>
</tr>
<tr>
<td class="sysoverviewlabel"><a href="orders.php?status=Active">'.$_ADMINLANG['stats']['todayscompleted'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$orders["today"]["active"].'</div></td>
<td class="sysoverviewlabel"><a href="cancelrequests.php">'.$_ADMINLANG['stats']['pendingcancellations'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$pendingcancellations.'</div></td>
</tr>
<tr>
<td class="sysoverviewlabel"><a href="supporttickets.php?view=active">'.$_ADMINLANG['stats']['ticketsawaitingreply'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$ticketsawaitingreply.'</div></td>
<td class="sysoverviewlabel"><a href="quotes.php?validity=Valid">'.$_ADMINLANG['stats']['validquotes'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$validquotes.'</div></td>
</tr>
<tr>
<td class="sysoverviewlabel"><a href="supporttickets.php?view=flagged">'.$_ADMINLANG['stats']['activeflagged'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$ticketsflagged.'</div></td>
<td class="sysoverviewlabel"><a href="billableitems.php?status=Uninvoiced">'.$_ADMINLANG['stats']['uninvoicedbillableitems'].'</a></td><td class="sysoverviewstat"><div class="sysoverviewbox">'.$uninvoicedbillableitems.'</div></td>
</tr>
</table>
';
exit;

    }

    $adminusername = get_query_val("tbladmins","username",array("id"=>$vars['adminid']));
    $lastlogin = get_query_vals("tbladminlog","lastvisit,ipaddress",array("adminusername"=>$adminusername),"lastvisit","DESC","1,1");
    $lastlogindate = ($lastlogin[0]) ? fromMySQLDate($lastlogin[0],true) : '(None Recorded)';
    $lastloginip = ($lastlogin[1]) ? $lastlogin[1] : '-';

    $content = '
<style>
.sysoverviewlabel {
    width: 30%;
    padding-right: 20px;
    text-align: right;
    border-bottom: 1px dashed #ccc;
}
.sysoverviewstat {
    width: 20%;
    border-bottom: 1px dashed #ccc;
}
.sysoverviewbox {
    margin: 1px 1px 3px 1px;
    padding: 2px;
    width: 75px;
    background-color: #555;
    font-family: Tahoma;
    font-size: 12px;
    color: #fff;
    font-weight: bold;
    text-align: center;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -o-border-radius: 10px;
    border-radius: 10px;
}
.lastlogin {
    margin-top:5px;
    padding:3px;
    background-color:#efefef;
    text-align: center;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
}
</style>

<div id="systemoverviewstats">'.$vars['loading'].'</div>

<div style="clear:both;"></div>

<div class="lastlogin">'.$_ADMINLANG['home']['lastlogin'].': <b>'.$lastlogindate.'</b> '.$_ADMINLANG['home']['lastloginip'].' <b>'.$lastloginip.'</b></div>

';

    $jquerycode = 'jQuery.post("index.php", { getsystemoverview: 1 },
    function(data){
        jQuery("#systemoverviewstats").html(data);
});';

    return array('title'=>$title,'content'=>$content,'jquerycode'=>$jquerycode);

}

add_hook("AdminHomeWidgets",1,"widget_system_overview");

?>