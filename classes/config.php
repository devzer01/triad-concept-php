<?php
if(!isset($_COOKIE['domain']))
{
	//header("location: domains.php");
	$domain = "orowo.oro.world.oro.world";
}
else
{
	$domain = $_COOKIE['domain'];
}
define('TABLE_CONFIG', 'config'); //config table config in database

//$domain = str_replace("www.","",$domain);
if(!empty($domain) && is_dir("sites/".$domain))
{
	define('SITE','sites/'.$domain.'/');
}
else
{
	define('SITE','sites/orowo.oro.world/');
}
define('UPLOAD_DIR', SITE."thumbs/");
define('UPLOAD_DIR_CARD', SITE."images/card/");
if(dirname($_SERVER['PHP_SELF'])!="")
	$dir=dirname($_SERVER['PHP_SELF']);
if (!preg_match("#/$#", $dir)) $dir .= "/";
define("URL_WEB", "http://".$_SERVER['SERVER_NAME'].$dir);
define("PROFILE_PICS_PATH",	dirname($_SERVER["SCRIPT_FILENAME"])."/profilepics/");

require(SITE."config.php");

define('ONLINE_MEMBERS_DATETIME', 100);
?>
