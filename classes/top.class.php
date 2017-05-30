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
$smarty->setConfigDir('sites/orowo.oro.world/config');
$smarty->setTemplateDir('sites/orowo.oro.world/templates');
if (strstr($_SERVER['SERVER_NAME'], 'pituwa')) {
    $smarty->config_load('sites/orowo.oro.world/configs/sin.conf');
    $smarty->setCompileDir('sites/orowo.oro.world/templates_c_pitu');
} else {
    $smarty->config_load('sites/orowo.oro.world/configs/eng.conf');
    $smarty->setCompileDir('sites/orowo.oro.world/templates_c');
}
