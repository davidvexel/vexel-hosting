<?php //00d4b
// *************************************************************************
// *                                                                       *
// * WHMCS - The Complete Client Management, Billing & Support Solution    *
// * Copyright (c) WHMCS Ltd. All Rights Reserved,                         *
// * Release Date: 24th November 2011                                      *
// * Version 5.0.2 Stable                                                  *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: info@whmcs.com                                                 *
// * Website: http://www.whmcs.com                                         *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.  This software  or any other *
// * copies thereof may not be provided or otherwise made available to any *
// * other person.  No title to and  ownership of the  software is  hereby *
// * transferred.                                                          *
// *                                                                       *
// * You may not reverse  engineer, decompile, defeat  license  encryption *
// * mechanisms, or  disassemble this software product or software product *
// * license.  WHMCompleteSolution may terminate this license if you don't *
// * comply with any of the terms and conditions set forth in our end user *
// * license agreement (EULA).  In such event,  licensee  agrees to return *
// * licensor  or destroy  all copies of software  upon termination of the *
// * license.                                                              *
// *                                                                       *
// * Please see the EULA file for the full End User License Agreement.     *
// *                                                                       *
// *************************************************************************

require( "../dbconnect.php" );
include( "../includes/functions.php" );
require( "../includes/adminfunctions.php" );
$aInt = new adminInterface( "View Cancellation Requests" );
$aInt->title = $aInt->lang( "clients", "cancelrequests" );
$aInt->sidebar = "clients";
$aInt->icon = "cancelrequests";
$aInt->helplink = "Cancellation Requests";
if( $action == "delete" )
{
	delete_query( "tblcancelrequests", array( "id" => $id ) );
	header( "Location: ".$_SERVER['PHP_SELF'] );
	exit();
}
$jscode = "function doDelete(id) {\r\nif (confirm(\"".$aInt->lang( "clients", "cancelrequestsdelete" )."\")) {\r\nwindow.location='".$_SERVER['PHP_SELF']."?action=delete&id='+id;\r\n}}";
ob_start();
echo $aInt->Tabs( array( "Search/Filter" ), true );
echo "\r\n<div id=\"tab0box\" class=\"tabbox\">\r\n  <div id=\"tab_content\">\r\n\r\n<form action=\"";
echo $PHP_SELF;
echo "\" method=\"get\"><input type=\"hidden\" name=\"filter\" value=\"true\">\r\n\r\n<table class=\"form\" width=\"100%\" border=\"0\" cellspacing=\"2\" cellpadding=\"3\">\r\n<tr><td width=\"15%\" class=\"fieldlabel\">";
echo $aInt->lang( "fields", "reason" );
echo "</td><td class=\"fieldarea\"><input type=\"text\" name=\"reason\" size=\"40\" value=\"";
echo $reason;
echo "\" /></td><td width=\"15%\" class=\"fieldlabel\">";
echo $aInt->lang( "fields", "client" );
echo "</td><td class=\"fieldarea\">";
echo $aInt->clientsDropDown( $userid, "", "userid", true );
echo "</td></tr>\r\n<tr><td class=\"fieldlabel\">";
echo $aInt->lang( "fields", "domain" );
echo "</td><td class=\"fieldarea\"><input type=\"text\" name=\"domain\" size=\"40\" value=\"";
echo $domain;
echo "\" /></td><td class=\"fieldlabel\">";
echo $aInt->lang( "fields", "type" );
echo "</td><td class=\"fieldarea\">";
echo "<select name=\"type\"><option value=\"\">";
echo $aInt->lang( "global", "any" );
echo "</option><option value=\"Immediate\"";
if( $type == "Immediate" )
{
	echo " selected";
}
echo ">";
echo $aInt->lang( "clients", "cancelrequestimmediate" );
echo "</option><option value=\"End of Billing Period\"";
if( $type == "End of Billing Period" )
{
	echo " selected";
}
echo ">";
echo $aInt->lang( "clients", "cancelrequestendofperiod" );
echo "</option></select></td></tr>\r\n<tr><td class=\"fieldlabel\">";
echo $aInt->lang( "mergefields", "serviceid" );
echo "</td><td class=\"fieldarea\"><input type=\"text\" name=\"serviceid\" size=\"10\" value=\"";
echo $serviceid;
echo "\" /></td><td class=\"fieldlabel\">&nbsp;</td><td class=\"fieldarea\">&nbsp;</td></tr>\r\n</table>\r\n\r\n<img src=\"images/spacer.gif\" height=\"10\" width=\"1\"><br>\r\n<div align=\"center\"><input type=\"submit\" value=\"Filter\" class=\"button\" /></div>\r\n\r\n</form>\r\n\r\n  </div>\r\n</div>\r\n\r\n<br />\r\n\r\n<p align=\"center\"><a href=\"";
echo $_SERVER['PHP_SELF'];
echo "\">";
echo $aInt->lang( "clients", "cancelrequestsopen" );
echo "</a> - <a href=\"";
echo $_SERVER['PHP_SELF'];
echo "?completed=true\">";
echo $aInt->lang( "clients", "cancelrequestscompleted" );
echo "</a></p>\r\n\r\n";
$aInt->sortableTableInit( "date", "ASC" );
$query = "FROM tblcancelrequests INNER JOIN tblhosting ON tblhosting.id=tblcancelrequests.relid INNER JOIN tblproducts ON tblproducts.id=tblhosting.packageid INNER JOIN tblproductgroups ON tblproductgroups.id=tblproducts.gid INNER JOIN tblclients ON tblhosting.userid=tblclients.id WHERE ";
$filter = false;
$criteria = array();
if( $reason )
{
	$criteria[] = "tblcancelrequests.reason LIKE '%".db_escape_string( $reason )."%'";
	$filter = true;
}
if( $domain )
{
	$criteria[] = "tblhosting.domain LIKE '%".db_escape_string( $domain )."%'";
	$filter = true;
}
if( $userid )
{
	$criteria[] = "tblhosting.userid=".(int)$userid;
	$filter = true;
}
if( $serviceid )
{
	$criteria[] = "tblcancelrequests.relid=".(int)$serviceid;
	$filter = true;
}
if( $type )
{
	$criteria[] = "tblcancelrequests.type='".db_escape_string( $type )."'";
	$filter = true;
}
if( !$filter )
{
	if( $completed )
	{
		$criteria[] = "(tblhosting.domainstatus='Cancelled' OR tblhosting.domainstatus='Terminated') ";
	}
	else
	{
		$criteria[] = "(tblhosting.domainstatus!='Cancelled' AND tblhosting.domainstatus!='Terminated') ";
	}
}
$query .= implode( " AND ", $criteria );
$result = full_query( "SELECT COUNT(tblcancelrequests.id) ".$query );
$data = mysql_fetch_array( $result );
$numrows = $data[0];
$query .= " ORDER BY tblcancelrequests.date ASC";
$query = "SELECT tblcancelrequests.*,tblhosting.domain,tblhosting.nextduedate,tblproducts.name AS productname,tblproductgroups.name AS groupname,tblhosting.id AS productid,tblhosting.userid,tblclients.firstname,tblclients.lastname,tblclients.companyname,tblclients.groupid ".$query." LIMIT ".$page * $limit.",{$limit}";
$result = full_query( $query );
while ( $data = mysql_fetch_array( $result ) )
{
	++$clicount;
	$id2 = $data['id'];
	$date = $data['date'];
	$relid = $data['relid'];
	$reason = $data['reason'];
	$type = $data['type'];
	$date = fromMySQLDate( $date, "time" );
	$domain = $data['domain'];
	$productname = $data['productname'];
	$groupname = $data['groupname'];
	$productid = $data['productid'];
	$userid = $data['userid'];
	$firstname = $data['firstname'];
	$lastname = $data['lastname'];
	$companyname = $data['companyname'];
	$groupid = $data['groupid'];
	$nextduedate = $data['nextduedate'];
	$nextduedate = fromMySQLDate( $nextduedate );
	$xname = "<a href=\"clientshosting.php?userid={$userid}&id={$productid}\">{$groupname} - {$productname}</a><br>".$aInt->outputClientLink( $userid, $firstname, $lastname, $companyname, $groupid );
	if( $domain )
	{
		$xname .= " ({$domain})";
	}
	$type = $type == "Immediate" ? $aInt->lang( "clients", "cancelrequestimmediate" ) : $aInt->lang( "clients", "cancelrequestendofperiod" )."<br>({$nextduedate})";
	$tabledata[] = array(
		$date,
		$xname,
		"<textarea rows=3 cols=64 readonly>{$reason}</textarea>",
		$type,
		"<a href=\"#\" onClick=\"doDelete('{$id2}');return false\"><img src=\"images/delete.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"".$aInt->lang( "global", "delete" )."\"></a>"
	);
}
echo $aInt->sortableTable( array(
	$aInt->lang( "fields", "date" ),
	$aInt->lang( "fields", "product" ),
	$aInt->lang( "fields", "reason" ),
	$aInt->lang( "fields", "type" ),
	""
), $tabledata );
$content = ob_get_contents();
ob_end_clean();
$aInt->content = $content;
$aInt->jquerycode = $jquerycode;
$aInt->jscode = $jscode;
$aInt->display();
?>