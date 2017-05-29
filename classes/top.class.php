<?php
require_once 'libs/mysql-connect/mysql.php';
require_once('classes/DBconnect.php');
require_once('config.php');
mysql_connect(MYSQL_SERVER, MYSQL_USERNAME, MYSQL_PASSWORD) or die(mysql_error());
mysql_select_db(MYSQL_DATABASE) or die("Selecting of database error!");
mysql_query("SET NAMES UTF8");


$site_configs = DBconnect::assoc_query_2D("SELECT * FROM config");

foreach($site_configs as $value)
{
	define($value['name'], $value['value']);
}

$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['request'] = $_SERVER['REQUEST_URI'];

//require classes and libs//
require_once('sites/orowo.oro.world/configs/ger.php');
require_once('classes/funcs.php');
require_once('classes/funcs2.php');
require_once(SITE.'sms.php');
require_once('classes/search.class.php');
require_once('Mail.php');
require_once('Mail/mime.php');
require_once('libs/SmartyPaginate.class.php');
require_once('libs/SmartyBC.class.php');
require_once('classes/class.phpmailer.php');

$_SESSION['sess_externuser'] = 1;

if(!isset($_SESSION['sess_id']))
{
	if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
	{
		funcs::checkCookie();
	}
}

$smarty = new SmartyBC();	//call smarty class

$smarty->setCacheDir('sites/orowo.oro.world/cache');
$smarty->setCompileDir('sites/orowo.oro.world/templates_c');
$smarty->setConfigDir('sites/orowo.oro.world/config');
$smarty->setTemplateDir('sites/orowo.oro.world/templates');
if (strstr($_SERVER['SERVER_NAME'], 'pituwa')) {
    $smarty->config_load('sites/orowo.oro.world/configs/sin.conf');
} else {
    $smarty->config_load('sites/orowo.oro.world/configs/sin.conf');
}

//send choice to template//
$smarty->assign('gender', funcs::getChoice($_SESSION['lang'],'','$gender'));
$smarty->assign('yesno', funcs::getChoice($_SESSION['lang'],'','$yesno'));
$smarty->assign('picyesno', funcs::getChoice($_SESSION['lang'],'','$picyesno'));
$smarty->assign('age', funcs::getRangeAge());
$submenu = array(	"mymessage"					=> "mymessage",
				"viewmessage"					=> "mymessage",
				"sendcard"						=> "mymessage",
				"editprofile"					=> "editprofile",
				"changepassword"				=> "editprofile",
				"fotoalbum"						=> "editprofile",
				"lonely_heart_ads"				=> "lonely_heart_ads",
				"adsearch"						=> "lonely_heart_ads",
				"suggestion_box"				=> "suggestion_box",
				"suggestionalbum"				=> "suggestion_box",
				"admin_new_members"				=> "admin_new_members",
				"admin_paid"					=> "admin_paid",
				"membership"					=> "membership",
				"admin_coin_statistics"			=> "admin_coin_statistics",
				"admin_coin_statistics_details"	=> "admin_coin_statistics",
				"admin_manage_bonus"			=> "admin_bonus",
				"admin_bonus_history"			=> "admin_bonus",
				"admin_copyfakeprofiles"		=> "admin_copyfakeprofiles",
				"admin_gifts"		=> "admin_gifts",
				"admin_copyfakeprofiles_already"=> "admin_copyfakeprofiles"
			  );
if(isset($_GET['action']) && isset($submenu[$_GET['action']]))
	$smarty->assign("submenu", $submenu[$_GET['action']]);

if(isset($_SESSION['sess_username']))
{
	$_SESSION['last_access'] = isset($_SESSION['last_access'])?$_SESSION['last_access']:0;
	if($_SESSION['last_access'] < time()-60)
	{
		if(DBConnect::retrieve_value("SELECT isactive FROM member WHERE id=".$_SESSION['sess_id'])!="1")
		{
			funcs::logoutSite();
			exit;
		}
		else
		{
			$_SESSION['last_access'] = time();
			if(DBConnect::retrieve_value("SELECT member_id FROM member_session WHERE session_id='".session_id()."'"))
			{
				DBConnect::execute_q("UPDATE member_session SET last_action_datetime=NOW() WHERE session_id='".session_id()."'");
			}
			else
			{
				DBConnect::execute_q("DELETE FROM member_session WHERE member_id=".$_SESSION['sess_id']);
				DBConnect::execute_q("INSERT INTO member_session (member_id, session_id, session_datetime, last_action_datetime) VALUES ('".$_SESSION['sess_id']."','".session_id()."',NOW(),NOW())");
			}
		}
	}
	$coinVal = funcs::checkCoin($_SESSION['sess_username']);
	$smarty->assign("coin",$coinVal);
	$favorites_list = DBConnect::row_retrieve_2D_Conv_1D("SELECT username FROM member m LEFT JOIN favorite f ON m.id=f.child_id WHERE f.parent_id=".$_SESSION['sess_id']);
	$smarty->assign('favorites_list', $favorites_list);

	$profile = DBConnect::assoc_query_1D("SELECT picturepath FROM member WHERE id=".$_SESSION['sess_id']);
	$phototemp = DBConnect::retrieve_value("SELECT picturepath FROM phototemp WHERE userid=".$_SESSION['sess_id']." AND status=1 ORDER BY id DESC LIMIT 1");
	if($phototemp && ($profile['picturepath']==''))
	{
		$profile['picturepath'] = $phototemp;
		$profile['approval'] = 1;
	}
	$smarty->assign("MyPicture",$profile['picturepath']);
	$smarty->assign("profile",$profile);

	if(!isset($_SESSION['MOBILE_VERIFIED']))
	{
		$mobile_verified = DBConnect::retrieve_value("SELECT 1 FROM member WHERE id='".$_SESSION['sess_id']."' and 
		mobileno!=''");
		$_SESSION['MOBILE_VERIFIED'] = $mobile_verified;
	}
	else
	{
		$mobile_verified = $_SESSION['MOBILE_VERIFIED'];
	}

	$smarty->assign("mobile_verified",$mobile_verified);
	if(!defined("USERNAME_CONFIRMED"))
	{
		if(!isset($_SESSION['USERNAME_CONFIRMED']))
		{
			$_SESSION['USERNAME_CONFIRMED'] = DBConnect::retrieve_value("SELECT username_confirmed FROM member WHERE id='".$_SESSION['sess_id']."'");
		}
		define("USERNAME_CONFIRMED" , $_SESSION['USERNAME_CONFIRMED']);
	}
}