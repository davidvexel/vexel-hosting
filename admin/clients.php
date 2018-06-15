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
$aInt = new adminInterface( "List Clients" );
$aInt->title = $aInt->lang( "clients", "viewsearch" );
$aInt->sidebar = "clients";
$aInt->icon = "clients";
ob_start();
$clientgroups = getClientGroups();
echo $aInt->Tabs( array( $aInt->lang( "global", "searchfilter" ) ), true );
echo "<div id=\"tab0box\" class=\"tabbox\">\r\n  <div id=\"tab_content\">\r\n\r\n<form action=\"clients.php\" method=\"post\">\r\n<table class=\"form\" width=\"100%\" border=\"0\" cellspacing=\"2\" cellpadding=\"3\">\r\n<tr><td width=\"15%\" class=\"fieldlabel\">";
echo $aInt->lang( "fields", "clientname" );
echo "</td><td class=\"fieldarea\"><input type=\"text\" name=\"clientname\" size=\"30\" value=\"";
echo $clientname;
echo "\" /></td><td width=\"15%\" class=\"fieldlabel\">";
echo $aInt->lang( "fields", "companyname" );
echo "</td><td class=\"fieldarea\"><input type=\"text\" name=\"companyname\" size=\"30\" value=\"";
echo $companyname;
echo "\" /></td></tr>\r\n<tr><td class=\"fieldlabel\">";
echo $aInt->lang( "fields", "email" );
echo "</td><td class=\"fieldarea\"><input type=\"text\" name=\"email\" size=\"40\" value=\"";
echo $email;
echo "\" /></td><td class=\"fieldlabel\">";
echo $aInt->lang( "fields", "address" );
echo "</td><td class=\"fieldarea\"><input type=\"text\" name=\"address\" size=\"30\" value=\"";
echo $address;
echo "\" /></td></tr>\r\n<tr><td class=\"fieldlabel\">";
echo $aInt->lang( "fields", "status" );
echo "</td><td class=\"fieldarea\">";
echo "<select name=\"status\"><option value=\"\">";
echo $aInt->lang( "global", "any" );
echo "</option><option value=\"Active\"";
if( $status == "Active" )
{
	echo " selected";
}
echo ">";
echo $aInt->lang( "status", "active" );
echo "</option><option value=\"Inactive\"";
if( $status == "Inactive" )
{
	echo " selected";
}
echo ">";
echo $aInt->lang( "status", "inactive" );
echo "</option><option value=\"Closed\"";
if( $status == "Closed" )
{
	echo " selected";
}
echo ">";
echo $aInt->lang( "status", "closed" );
echo "</option></select></td><td class=\"fieldlabel\">";
echo $aInt->lang( "fields", "state" );
echo "</td><td class=\"fieldarea\"><input type=\"text\" name=\"state\" size=\"30\" value=\"";
echo $state;
echo "\" /></td></tr>\r\n<tr><td class=\"fieldlabel\">";
echo $aInt->lang( "fields", "clientgroup" );
echo "</td><td class=\"fieldarea\">";
echo "<select name=\"clientgroup\"><option value=\"\">";
echo $aInt->lang( "global", "any" );
echo "</option>";
foreach( $clientgroups as $id => $values )
{
	echo "<option value=\"".$id."\"";
	if( $id == $clientgroup )
	{
		echo " selected";
	}
	echo ">".$values['name']."</option>";
}
echo "</select></td><td class=\"fieldlabel\">";
echo $aInt->lang( "fields", "phonenumber" );
echo "</td><td class=\"fieldarea\"><input type=\"text\" name=\"phonenumber\" size=\"30\" value=\"";
echo $phonenumber;
echo "\" /></td></tr>\r\n<tr><td width=\"15%\" class=\"fieldlabel\">";
echo $aInt->lang( "currencies", "currency" );
echo "</td><td class=\"fieldarea\">";
echo "<select name=\"currency\"><option value=\"\">";
echo $aInt->lang( "global", "any" );
echo "</option>";
$result = select_query( "tblcurrencies", "id,code", "", "code", "ASC" );
while ( $data = mysql_fetch_assoc( $result ) )
{
	echo "<option value=\"".$data['id']."\"";
	if( $currency == $data['id'] )
	{
		echo " selected";
	}
	echo ">".$data['code']."</option>";
}
echo "</select></td><td class=\"fieldlabel\">";
echo $aInt->lang( "fields", "cardlast4" );
echo "</td><td class=\"fieldarea\"><input type=\"text\" name=\"cardlastfour\" size=\"15\" value=\"";
echo $cardlastfour;
echo "\" /></td></tr>\r\n";
$result = select_query( "tblcustomfields", "id,fieldname", array( "type" => "client" ) );
while ( $data = mysql_fetch_array( $result ) )
{
	$fieldid = $data['id'];
	$fieldname = $data['fieldname'];
	echo "<tr><td class=\"fieldlabel\">".$fieldname."</td><td class=\"fieldarea\" colspan=\"3\"><input type=\"text\" name=\"customfield[".$fieldid."]\" size=\"30\" value=\"".$customfield[$fieldid]."\" /></td></tr>";
}
echo "</table>\r\n<p align=\"center\"><input type=\"submit\" value=\"";
echo $aInt->lang( "global", "search" );
echo "\" class=\"button\"></p>\r\n</form>\r\n\r\n  </div>\r\n</div>\r\n\r\n<br />\r\n\r\n";
$aInt->sortableTableInit( "id", "DESC" );
$where = "";
if( $userid )
{
	$where .= "id='".(int)$userid."' AND ";
}
if( $clientname )
{
	$where .= "concat(firstname,' ',lastname) LIKE '%".db_escape_string( $clientname )."%' AND ";
}
if( $address )
{
	$where .= "concat(address1,' ',address2,' ',city,' ',state,' ',postcode) LIKE '%".db_escape_string( $address )."%' AND ";
}
if( $state )
{
	$where .= "state LIKE '%".db_escape_string( $state )."%' AND ";
}
if( $country )
{
	$where .= "country='".db_escape_string( $country )."' AND ";
}
if( $companyname )
{
	$where .= "companyname LIKE '%".db_escape_string( $companyname )."%' AND ";
}
if( $email )
{
	$where .= "email LIKE '%".db_escape_string( $email )."%' AND ";
}
if( $phonenumber )
{
	$where .= "phonenumber LIKE '%".db_escape_string( $phonenumber )."%' AND ";
}
if( $status )
{
	$where .= "status='".db_escape_string( $status )."' AND ";
}
if( $clientgroup )
{
	$where .= "groupid='".db_escape_string( $clientgroup )."' AND ";
}
if( $cardlastfour )
{
	$where .= "cardlastfour='".db_escape_string( $cardlastfour )."' AND ";
}
if( $currency )
{
	$where .= "currency='".db_escape_string( $currency )."' AND ";
}
$where = substr( $where, 0, 0 - 5 );
$customfieldquery = "";
$customfieldjoin = "";
if( $customfield )
{
	foreach( $customfield as $fieldid => $fieldvalue )
	{
		if( $fieldvalue )
		{
			$customfieldquery .= "(tblcustomfieldsvalues.fieldid='".db_escape_string( $fieldid )."' AND tblcustomfieldsvalues.value LIKE '%".db_escape_string( $fieldvalue )."%') OR ";
		}
	}
}
if( $customfieldquery )
{
	$customfieldquery = substr( $customfieldquery, 0, 0 - 4 );
	if( $where )
	{
		$where .= " AND ";
	}
	$where .= $customfieldquery;
	$customfieldjoin = " INNER JOIN tblcustomfieldsvalues ON tblcustomfieldsvalues.relid=tblclients.id";
}
if( $where )
{
	$where = " WHERE {$where} ";
}
$result = full_query( "SELECT COUNT(*) FROM tblclients".$customfieldjoin.$where );
$data = mysql_fetch_array( $result );
$numrows = $data[0];
$query = "SELECT * FROM tblclients".$customfieldjoin.$where." ORDER BY {$orderby} {$order} LIMIT ".$page * $limit.",{$limit}";
$result = full_query( $query );
while ( $data = mysql_fetch_array( $result ) )
{
	$userid = $data['id'];
	if( $where && $numrows == 1 )
	{
		header( "Location: clientssummary.php?userid={$userid}" );
		exit();
	}
	$firstname = $data['firstname'];
	$lastname = $data['lastname'];
	$companyname = $data['companyname'];
	$email = $data['email'];
	$datecreated = $data['datecreated'];
	$groupid = $data['groupid'];
	$status = $data['status'];
	$datecreated = fromMySQLDate( $datecreated );
	$clientsummarylink = "<a href=\"clientssummary.php?userid={$userid}\"";
	if( $clientgroups[$groupid]['colour'] )
	{
		$clientsummarylink .= " style=\"background-color:".$clientgroups[$groupid]['colour']."\"";
	}
	$clientsummarylink .= ">";
	$services = $totalservices = "-";
	if( !$disable_clients_list_services_summary )
	{
		$result2 = full_query( "SELECT (SELECT COUNT(*) FROM tblhosting WHERE userid=tblclients.id AND domainstatus IN ('Active','Suspended'))+(SELECT COUNT(*) FROM tblhostingaddons WHERE hostingid IN (SELECT id FROM tblhosting WHERE userid=tblclients.id) AND status IN ('Active','Suspended'))+(SELECT COUNT(*) FROM tbldomains WHERE userid=tblclients.id AND status IN ('Active')) AS services,(SELECT COUNT(*) FROM tblhosting WHERE userid=tblclients.id)+(SELECT COUNT(*) FROM tblhostingaddons WHERE hostingid IN (SELECT id FROM tblhosting WHERE userid=tblclients.id))+(SELECT COUNT(*) FROM tbldomains WHERE userid=tblclients.id) AS totalservices FROM tblclients WHERE tblclients.id=".(int)$userid." LIMIT 1" );
		$data = mysql_fetch_array( $result2 );
		$services = $data['services'];
		$totalservices = $data['totalservices'];
	}
	$tabledata[] = array(
		"<input type=\"checkbox\" name=\"selectedclients[]\" value=\"{$userid}\">",
		$clientsummarylink.$userid."</a>",
		$clientsummarylink.$firstname."</a>",
		$clientsummarylink.$lastname."</a>",
		$companyname,
		"<a href=\"mailto:{$email}\">{$email}</a>",
		$services." (".$totalservices.")",
		$datecreated,
		"<span class=\"label ".strtolower( $status )."\">".$status."</span>"
	);
}
$tableformurl = "sendmessage.php?type=general&multiple=true";
$tableformbuttons = "<input type=\"submit\" value=\"".$aInt->lang( "global", "sendmessage" )."\" class=\"button\">";
echo $aInt->sortableTable( array(
	"",
	array(
		"id",
		$aInt->lang( "fields", "id" )
	),
	array(
		"firstname",
		$aInt->lang( "fields", "firstname" )
	),
	array(
		"lastname",
		$aInt->lang( "fields", "lastname" )
	),
	array(
		"companyname",
		$aInt->lang( "fields", "companyname" )
	),
	array(
		"email",
		$aInt->lang( "fields", "email" )
	),
	array(
		"services",
		$aInt->lang( "fields", "services" )
	),
	array(
		"datecreated",
		$aInt->lang( "fields", "created" )
	),
	array(
		"status",
		$aInt->lang( "fields", "status" )
	)
), $tabledata, $tableformurl, $tableformbuttons );
$content = ob_get_contents();
ob_end_clean();
$aInt->content = $content;
$aInt->jquerycode = $jquerycode;
$aInt->display();
?>