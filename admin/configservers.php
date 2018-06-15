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
require( "../includes/functions.php" );
require( "../includes/adminfunctions.php" );
$aInt = new adminInterface( "Configure Servers" );
$aInt->title = "Servers";
$aInt->sidebar = "config";
$aInt->icon = "servers";
$aInt->helplink = "Servers";
if( $action == "delete" )
{
	check_token();
	$result = select_query( "tblhosting", "", array(
		"server" => $id
	) );
	$numaccounts = mysql_num_rows( $result );
	if( 0 < $numaccounts )
	{
		header( "Location: ".$_SERVER['PHP_SELF']."?deleteerror=true" );
		exit();
	}
	else
	{
		run_hook( "ServerDelete", array(
			"serverid" => $id
		) );
		delete_query( "tblservers", array(
			"id" => $id
		) );
		header( "Location: ".$_SERVER['PHP_SELF']."?deletesuccess=true" );
		exit();
	}
}
if( $action == "deletegroup" )
{
	check_token();
	delete_query( "tblservergroups", array(
		"id" => $id
	) );
	delete_query( "tblservergroupsrel", array(
		"serverid" => $id
	) );
	header( "Location: ".$_SERVER['PHP_SELF']."?deletegroupsuccess=true" );
	exit();
}
if( $action == "save" )
{
	check_token();
	if( $id )
	{
		update_query( "tblservers", array(
			"name" => $name,
			"type" => $type,
			"ipaddress" => trim( $ipaddress ),
			"assignedips" => trim( $assignedips ),
			"hostname" => trim( $hostname ),
			"monthlycost" => trim( $monthlycost ),
			"noc" => $noc,
			"statusaddress" => trim( $statusaddress ),
			"nameserver1" => trim( $nameserver1 ),
			"nameserver1ip" => trim( $nameserver1ip ),
			"nameserver2" => trim( $nameserver2 ),
			"nameserver2ip" => trim( $nameserver2ip ),
			"nameserver3" => trim( $nameserver3 ),
			"nameserver3ip" => trim( $nameserver3ip ),
			"nameserver4" => trim( $nameserver4 ),
			"nameserver4ip" => trim( $nameserver4ip ),
			"nameserver5" => trim( $nameserver5 ),
			"nameserver5ip" => trim( $nameserver5ip ),
			"maxaccounts" => trim( $maxaccounts ),
			"username" => trim( $username ),
			"password" => encrypt( html_entity_decode( trim( $password ) ) ),
			"accesshash" => trim( $accesshash ),
			"secure" => $secure,
			"disabled" => $disabled
		), array(
			"id" => $id
		) );
		run_hook( "ServerEdit", array(
			"serverid" => $id
		) );
		header( "Location: ".$_SERVER['PHP_SELF']."?savesuccess=true" );
	}
	else
	{
		$result = select_query( "tblservers", "id", array(
			"type" => $type,
			"active" => "1"
		) );
		$data = mysql_fetch_array( $result );
		$active = $data['id'] ? "" : "1";
		$newid = insert_query( "tblservers", array(
			"name" => $name,
			"type" => $type,
			"ipaddress" => trim( $ipaddress ),
			"assignedips" => trim( $assignedips ),
			"hostname" => trim( $hostname ),
			"monthlycost" => trim( $monthlycost ),
			"noc" => $noc,
			"statusaddress" => trim( $statusaddress ),
			"nameserver1" => trim( $nameserver1 ),
			"nameserver1ip" => trim( $nameserver1ip ),
			"nameserver2" => trim( $nameserver2 ),
			"nameserver2ip" => trim( $nameserver2ip ),
			"nameserver3" => trim( $nameserver3 ),
			"nameserver3ip" => trim( $nameserver3ip ),
			"nameserver4" => trim( $nameserver4 ),
			"nameserver4ip" => trim( $nameserver4ip ),
			"nameserver5" => trim( $nameserver5 ),
			"nameserver5ip" => trim( $nameserver5ip ),
			"maxaccounts" => trim( $maxaccounts ),
			"username" => trim( $username ),
			"password" => encrypt( html_entity_decode( trim( $password ) ) ),
			"accesshash" => trim( $accesshash ),
			"secure" => $secure,
			"active" => $active,
			"disabled" => $disabled
		) );
		run_hook( "ServerAdd", array(
			"serverid" => $newid
		) );
		header( "Location: ".$_SERVER['PHP_SELF']."?createsuccess=true" );
	}
	exit();
}
if( $action == "savegroup" )
{
	check_token();
	if( $id )
	{
		update_query( "tblservergroups", array(
			"name" => $name,
			"filltype" => $filltype
		), array(
			"id" => $id
		) );
		delete_query( "tblservergroupsrel", array(
			"groupid" => $id
		) );
	}
	else
	{
		$id = insert_query( "tblservergroups", array(
			"name" => $name,
			"filltype" => $filltype
		) );
	}
	if( $selectedservers )
	{
		foreach( $selectedservers as $serverid )
		{
			insert_query( "tblservergroupsrel", array(
				"groupid" => $id,
				"serverid" => $serverid
			) );
		}
	}
	header( "Location: ".$_SERVER['PHP_SELF'] );
	exit();
}
ob_start();
if( $action == "" )
{
	if( $sub == "enable" )
	{
		update_query( "tblservers", array( "disabled" => "0" ), array(
			"id" => $id
		) );
		infoBox( "Enabled Server", "The selected server was successfully re-enabled" );
	}
	if( $sub == "disable" )
	{
		update_query( "tblservers", array( "disabled" => "1" ), array(
			"id" => $id
		) );
		infoBox( "Disabled Server", "The selected server was successfully disabled" );
	}
	if( $sub == "makedefault" )
	{
		$result = select_query( "tblservers", "", array(
			"id" => $id
		) );
		$data = mysql_fetch_array( $result );
		$type = $data['type'];
		update_query( "tblservers", array( "active" => "" ), array(
			"type" => $type
		) );
		update_query( "tblservers", array( "active" => "1" ), array(
			"id" => $id
		) );
		infoBox( "Default Server Changed!", "The default server has now been set to the selected server" );
	}
	if( $createsuccess )
	{
		infoBox( "Server Added Successfully!", "The new server has been added and is now ready for use." );
	}
	if( $deletesuccess )
	{
		infoBox( "Server Deleted Successfully!", "The selected server has now been deleted." );
	}
	if( $deletegroupsuccess )
	{
		infoBox( "Server Group Deleted Successfully!", "The selected server group has now been deleted." );
	}
	if( $deleteerror )
	{
		infoBox( "An Error Occured", "You cannot delete a server while hosting accounts are still assigned to it" );
	}
	if( $savesuccess )
	{
		infoBox( "Changed Saves Successfully!", "The changes you made to the server have been saved successfully." );
	}
	echo $infobox;
	$jscode = "function doDelete(id) {\r\nif (confirm(\"Are you sure you want to delete this server?\")) {\r\nwindow.location='".$_SERVER['PHP_SELF']."?action=delete&id='+id+'".generate_token( "link" )."';\r\n}}\r\nfunction doDeleteGroup(id) {\r\nif (confirm(\"Are you sure you want to delete this server group?\")) {\r\nwindow.location='".$_SERVER['PHP_SELF']."?action=deletegroup&id='+id+'".generate_token( "link" )."';\r\n}}";
	echo "\r\n<p>This is where you configure all your servers so that WHMCS can communicate with them. The default server for each module is marked with an asterisk *. You must select a default server for automatic setup to function correctly.</p>\r\n\r\n<p><B>Options:</B> <a href=\"";
	echo $PHP_SELF;
	echo "?action=manage\">Add New Server</a> | <a href=\"";
	echo $PHP_SELF;
	echo "?action=managegroup\">Create New Group</a></p>\r\n\r\n";
	$aInt->sortableTableInit( "nopagination" );
	$result3 = select_query( "tblservers", "DISTINCT type", "", "type", "ASC" );
	while ( $data = mysql_fetch_array( $result3 ) )
	{
		$servertype = $data['type'];
		$tabledata[] = array(
			"dividingline",
			ucfirst( $servertype )
		);
		$disableddata = array();
		$result = select_query( "tblservers", "", array(
			"type" => $data['type']
		), "name", "ASC" );
		while ( $data = mysql_fetch_array( $result ) )
		{
			$id = $data['id'];
			$name = $data['name'];
			$ipaddress = $data['ipaddress'];
			$hostname = $data['hostname'];
			$maxaccounts = $data['maxaccounts'];
			$username = $data['username'];
			$password = decrypt( $data['password'] );
			$accesshash = $data['accesshash'];
			$secure = $data['secure'];
			$active = $data['active'];
			$type = $data['type'];
			$disabled = $data['disabled'];
			$active = $active ? "*" : "";
			$result2 = select_query( "tblhosting", "COUNT(*)", "server='{$id}' AND (domainstatus='Active' OR domainstatus='Suspended')" );
			$data = mysql_fetch_array( $result2 );
			$numaccounts = $data[0];
			@$percentuse = @round( $numaccounts / $maxaccounts * 100, 0 );
			$params = array();
			$params['serverip'] = $ipaddress;
			$params['serverhostname'] = $hostname;
			$params['serverusername'] = $username;
			$params['serverpassword'] = $password;
			$params['serversecure'] = $secure;
			$params['serveraccesshash'] = $accesshash;
			if( file_exists( "../modules/servers/{$type}/{$type}.php" ) )
			{
				require_once( "../modules/servers/{$type}/{$type}.php" );
				$adminlogincode = function_exists( $type."_AdminLink" ) ? call_user_func( $type."_AdminLink", $params ) : "-";
			}
			else
			{
				$adminlogincode = "Module File Missing";
			}
			if( $disabled )
			{
				$disableddata[] = array(
					"<i>{$name} (".$aInt->lang( "emailtpls", "disabled" ).")</i>",
					"<i>{$ipaddress}</i>",
					"<i>{$numaccounts}/{$maxaccounts}</i>",
					"<i>{$percentuse}%</i>",
					$adminlogincode,
					"<div align=\"center\"><a href=\"{$PHP_SELF}?sub=enable&id={$id}\" title=\"Enable Server\"><img src=\"images/icons/disabled.png\"></a></div>",
					"<a href=\"{$PHP_SELF}?action=manage&id={$id}\" title=\"Edit Server\"><img src=\"images/edit.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"Edit\"></a>",
					"<a href=\"#\" onClick=\"doDelete('{$id}');return false\" title=\"Delete Server\"><img src=\"images/delete.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"Delete\"></a>"
				);
			}
			else
			{
				$tabledata[] = array(
					"<a href=\"{$PHP_SELF}?sub=makedefault&id={$id}\" title=\"Make this server the active default for new signups\">{$name}</a> {$active}",
					$ipaddress,
					"{$numaccounts}/{$maxaccounts}",
					"{$percentuse}%",
					$adminlogincode,
					"<div align=\"center\"><a href=\"{$PHP_SELF}?sub=disable&id={$id}\" title=\"Disable Server\"><img src=\"images/icons/tick.png\"></a></div>",
					"<a href=\"{$PHP_SELF}?action=manage&id={$id}\" title=\"Edit Server\"><img src=\"images/edit.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"Edit\"></a>",
					"<a href=\"#\" onClick=\"doDelete('{$id}');return false\" title=\"Delete Server\"><img src=\"images/delete.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"Delete\"></a>"
				);
			}
		}
		foreach( $disableddata as $data )
		{
			$tabledata[] = $data;
		}
	}
	echo $aInt->sortableTable( array( "Server Name", "IP Address", "Active Accounts", "% Usage", " ", "Status", "", "" ), $tabledata );
	echo "\r\n<h2>Groups</h2>\r\n\r\n<p>Server groups allow you to configure sets of servers to assign products to and have new orders rotate around servers within that group or fill until full.</p>\r\n\r\n";
	$tabledata = "";
	$result = select_query( "tblservergroups", "", "", "name", "ASC" );
	while ( $data = mysql_fetch_array( $result ) )
	{
		$id = $data['id'];
		$name = $data['name'];
		$filltype = $data['filltype'];
		if( $filltype == 1 )
		{
			$filltype = "Add to the least full server";
		}
		else if( $filltype == 2 )
		{
			$filltype = "Fill active server until full then switch to next least used";
		}
		$servers = "";
		$result2 = select_query( "tblservergroupsrel", "tblservers.name", array(
			"groupid" => $id
		), "name", "ASC", "", "tblservers ON tblservers.id=tblservergroupsrel.serverid" );
		while ( $data = mysql_fetch_array( $result2 ) )
		{
			$servers .= $data['name'].", ";
		}
		$servers = substr( $servers, 0, 0 - 2 );
		$tabledata[] = array(
			$name,
			$filltype,
			$servers,
			"<a href=\"{$PHP_SELF}?action=managegroup&id={$id}\"><img src=\"images/edit.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"Edit\"></a>",
			"<a href=\"#\" onClick=\"doDeleteGroup('{$id}');return false\"><img src=\"images/delete.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"Delete\"></a>"
		);
	}
	echo $aInt->sortableTable( array( "Group Name", "Fill Type", "Servers", "", "" ), $tabledata );
}
else if( $action == "manage" )
{
	if( $id )
	{
		$result = select_query( "tblservers", "", array(
			"id" => $id
		) );
		$data = mysql_fetch_array( $result );
		$id = $data['id'];
		$type = $data['type'];
		$name = $data['name'];
		$ipaddress = $data['ipaddress'];
		$assignedips = $data['assignedips'];
		$hostname = $data['hostname'];
		$monthlycost = $data['monthlycost'];
		$noc = $data['noc'];
		$statusaddress = $data['statusaddress'];
		$nameserver1 = $data['nameserver1'];
		$nameserver1ip = $data['nameserver1ip'];
		$nameserver2 = $data['nameserver2'];
		$nameserver2ip = $data['nameserver2ip'];
		$nameserver3 = $data['nameserver3'];
		$nameserver3ip = $data['nameserver3ip'];
		$nameserver4 = $data['nameserver4'];
		$nameserver4ip = $data['nameserver4ip'];
		$nameserver5 = $data['nameserver5'];
		$nameserver5ip = $data['nameserver5ip'];
		$maxaccounts = $data['maxaccounts'];
		$username = $data['username'];
		$password = decrypt( $data['password'] );
		$accesshash = $data['accesshash'];
		$secure = $data['secure'];
		$active = $data['active'];
		$disabled = $data['disabled'];
		$managetitle = "Edit Server";
	}
	else
	{
		$managetitle = "Add Server";
		if( !$maxaccounts )
		{
			$maxaccounts = "200";
		}
	}
	echo "<h2>{$managetitle}</h2>";
	echo "\r\n<form method=\"post\" action=\"";
	echo $_SERVER['PHP_SELF'];
	echo "?action=save&id=";
	echo $id;
	echo "\">\r\n<table class=\"form\" width=\"100%\" border=\"0\" cellspacing=\"2\" cellpadding=\"3\">\r\n<tr><td width=\"23%\" class=\"fieldlabel\">Name</td><td class=\"fieldarea\"><input type=\"text\" name=\"name\" size=\"30\" value=\"";
	echo $name;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Hostname</td><td class=\"fieldarea\"><input type=\"text\" name=\"hostname\" size=\"40\" value=\"";
	echo $hostname;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">IP Address</td><td class=\"fieldarea\"><input type=\"text\" name=\"ipaddress\" size=\"20\" value=\"";
	echo $ipaddress;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Assigned IP Addresses<br />(One per line)</td><td class=\"fieldarea\"><textarea name=\"assignedips\" cols=\"60\" rows=\"8\">";
	echo $assignedips;
	echo "</textarea></td></tr>\r\n<tr><td class=\"fieldlabel\">Monthly Cost</td><td class=\"fieldarea\"><input type=\"text\" name=\"monthlycost\" size=\"10\" value=\"";
	echo $monthlycost;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Datacenter/NOC</td><td class=\"fieldarea\"><input type=\"text\" name=\"noc\" size=\"30\" value=\"";
	echo $noc;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Maximum No. of Accounts</td><td class=\"fieldarea\"><input type=\"text\" name=\"maxaccounts\" size=\"6\" value=\"";
	echo $maxaccounts;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Server Status Address</td><td class=\"fieldarea\"><input type=\"text\" name=\"statusaddress\" size=\"60\" value=\"";
	echo $statusaddress;
	echo "\"><br>To display this server on the server status page, enter the full path to the server status folder (required to be uploaded to each server you want to monitor) - eg. http://www.whmcs.com/status/</td></tr>\r\n<tr><td class=\"fieldlabel\">Enable/Disable</td><td class=\"fieldarea\"><input type=\"checkbox\" name=\"disabled\" value=\"1\"";
	if( $disabled )
	{
		echo "checked";
	}
	echo "> Tick to disable this server</td></tr>\r\n</table>\r\n<p><b>Nameservers</b></p>\r\n<table class=\"form\" width=\"100%\" border=\"0\" cellspacing=\"2\" cellpadding=\"3\">\r\n<tr><td width=\"23%\" class=\"fieldlabel\">Primary Nameserver</td><td class=\"fieldarea\"><input type=\"text\" name=\"nameserver1\" size=\"40\" value=\"";
	echo $nameserver1;
	echo "\"> IP Address: <input type=\"text\" name=\"nameserver1ip\" size=\"25\" value=\"";
	echo $nameserver1ip;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Secondary Nameserver</td><td class=\"fieldarea\"><input type=\"text\" name=\"nameserver2\" size=\"40\" value=\"";
	echo $nameserver2;
	echo "\"> IP Address: <input type=\"text\" name=\"nameserver2ip\" size=\"25\" value=\"";
	echo $nameserver2ip;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Third Nameserver</td><td class=\"fieldarea\"><input type=\"text\" name=\"nameserver3\" size=\"40\" value=\"";
	echo $nameserver3;
	echo "\"> IP Address: <input type=\"text\" name=\"nameserver3ip\" size=\"25\" value=\"";
	echo $nameserver3ip;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Fourth Nameserver</td><td class=\"fieldarea\"><input type=\"text\" name=\"nameserver4\" size=\"40\" value=\"";
	echo $nameserver4;
	echo "\"> IP Address: <input type=\"text\" name=\"nameserver4ip\" size=\"25\" value=\"";
	echo $nameserver4ip;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Fifth Nameserver</td><td class=\"fieldarea\"><input type=\"text\" name=\"nameserver5\" size=\"40\" value=\"";
	echo $nameserver5;
	echo "\"> IP Address: <input type=\"text\" name=\"nameserver5ip\" size=\"25\" value=\"";
	echo $nameserver5ip;
	echo "\"></td></tr>\r\n</table>\r\n<p><b>Server Details</b></p>\r\n<table class=\"form\" width=\"100%\" border=\"0\" cellspacing=\"2\" cellpadding=\"3\">\r\n<tr><td width=\"23%\" class=\"fieldlabel\">Type</td><td class=\"fieldarea\">";
	echo "<s";
	echo "elect name=\"type\">";
	$modulesarray = array();
	$dh = opendir( "../modules/servers/" );
	while ( false !== ( $file = readdir( $dh ) ) )
	{
		if( is_file( "../modules/servers/{$file}/{$file}.php" ) )
		{
			$modulesarray[] = $file;
		}
	}
	closedir( $dh );
	sort( $modulesarray );
	foreach( $modulesarray as $module )
	{
		echo "<option value=\"{$module}\"";
		if( $module == $type )
		{
			echo " selected";
		}
		echo ">".ucfirst( $module )."</option>";
	}
	echo "</select></td></tr>\r\n<tr><td class=\"fieldlabel\">Username</td><td class=\"fieldarea\"><input type=\"text\" name=\"username\" size=\"25\" value=\"";
	echo $username;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Password</td><td class=\"fieldarea\"><input type=\"password\" name=\"password\" size=\"25\" value=\"";
	echo $password;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Access Hash<br>(Instead of password<br>for cPanel servers)</td><td class=\"fieldarea\"><textarea name=\"accesshash\" cols=\"60\" rows=\"8\">";
	echo $accesshash;
	echo "</textarea></td></tr>\r\n<tr><td class=\"fieldlabel\">Secure</td><td class=\"fieldarea\"><input type=\"checkbox\" name=\"secure\"";
	if( $secure )
	{
		echo " checked";
	}
	echo "> Tick to use SSL Mode for Connections</td></tr>\r\n</table>\r\n<p align=\"center\"><input type=\"submit\" value=\"Save Changes\" class=\"button\"></p>\r\n</form>\r\n\r\n";
}
else if( $action == "managegroup" )
{
	if( $id )
	{
		$managetitle = "Edit Group";
		$result = select_query( "tblservergroups", "", array(
			"id" => $id
		) );
		$data = mysql_fetch_array( $result );
		$id = $data['id'];
		$name = $data['name'];
		$filltype = $data['filltype'];
	}
	else
	{
		$managetitle = "Create New Group";
		$filltype = "1";
	}
	echo "<h2>{$managetitle}</h2>";
	$jquerycode = "\$(\"#serveradd\").click(function () {\r\n  \$(\"#serverslist option:selected\").appendTo(\"#selectedservers\");\r\n  return false;\r\n});\r\n\$(\"#serverrem\").click(function () {\r\n  \$(\"#selectedservers option:selected\").appendTo(\"#serverslist\");\r\n  return false;\r\n});";
	echo "\r\n<form method=\"post\" action=\"";
	echo $_SERVER['PHP_SELF'];
	echo "?action=savegroup&id=";
	echo $id;
	echo "\">\r\n<table class=\"form\" width=\"100%\" border=\"0\" cellspacing=\"2\" cellpadding=\"3\">\r\n<tr><td width=\"15%\" class=\"fieldlabel\">Name</td><td class=\"fieldarea\"><input type=\"text\" name=\"name\" size=\"40\" value=\"";
	echo $name;
	echo "\"></td></tr>\r\n<tr><td class=\"fieldlabel\">Fill Type</td><td class=\"fieldarea\"><input type=\"radio\" name=\"filltype\" value=\"1\"";
	if( $filltype == 1 )
	{
		echo " checked";
	}
	echo "> Add to the least full server<br /><input type=\"radio\" name=\"filltype\" value=\"2\"";
	if( $filltype == 2 )
	{
		echo " checked";
	}
	echo "> Fill active server until full then switch to next least used</td></tr>\r\n<tr><td class=\"fieldlabel\">Selected Servers</td><td class=\"fieldarea\"><table><td><td>";
	echo "<s";
	echo "elect size=\"10\" multiple=\"multiple\" id=\"serverslist\" style=\"width:200px;\">";
	$selectedservers = array();
	$result = select_query( "tblservergroupsrel", "tblservers.id,tblservers.name,tblservers.disabled", array(
		"groupid" => $id
	), "name", "ASC", "", "tblservers ON tblservers.id=tblservergroupsrel.serverid" );
	while ( $data = mysql_fetch_array( $result ) )
	{
		$id = $data['id'];
		$name = $data['name'];
		$disabled = $data['disabled'];
		if( $disabled )
		{
			$name .= " (".$aInt->lang( "emailtpls", "disabled" ).")";
		}
		$selectedservers[$id] = $name;
	}
	$result = select_query( "tblservers", "", "", "name", "ASC" );
	while ( $data = mysql_fetch_array( $result ) )
	{
		$id = $data['id'];
		$name = $data['name'];
		$disabled = $data['disabled'];
		if( $disabled )
		{
			$name .= " (Disabled)";
		}
		if( !array_key_exists( $id, $selectedservers ) )
		{
			echo "<option value=\"{$id}\">{$name}</option>";
		}
	}
	echo "</select></td><td align=\"center\"><input type=\"button\" id=\"serveradd\" value=\"Add &raquo;\"><br /><br /><input type=\"button\" id=\"serverrem\" value=\"&laquo; Remove\"></td><td>";
	echo "<s";
	echo "elect size=\"10\" multiple=\"multiple\" id=\"selectedservers\" name=\"selectedservers[]\" style=\"width:200px;\">";
	foreach( $selectedservers as $id => $name )
	{
		echo "<option value=\"{$id}\">{$name}</option>";
	}
	echo "</select></td></td></table></td></tr>\r\n</table>\r\n<p align=\"center\"><input type=\"submit\" value=\"Save Changes\" onclick=\"\$('#selectedservers *').attr('selected','selected')\" class=\"button\"></p>\r\n</form>\r\n\r\n";
}
$content = ob_get_contents();
ob_end_clean();
$aInt->content = $content;
$aInt->jscode = $jscode;
$aInt->jquerycode = $jquerycode;
$aInt->display();
?>