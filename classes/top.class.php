<?php
require_once 'libs/mysql-connect/mysql.php';
require_once('classes/DBconnect.php');
require_once "sites/orowo.oro.world/config.php";
mysql_connect(MYSQL_SERVER, MYSQL_USERNAME, MYSQL_PASSWORD) or die(mysql_error());
mysql_select_db(MYSQL_DATABASE) or die("Selecting of database error!");
mysql_query("SET NAMES UTF8");

require_once('libs/SmartyBC.class.php');
$smarty = new SmartyBC();	//call smarty class

if (isset($_GET['key']) &&
    is_file('sites/orowo.oroworld/configs/' . $_GET['key'] .'.conf')) {
    $smarty->config_load('sites/orowo.oro.world/configs/' . $_GET['key'] . '.conf');
} else {
    if (strstr($_SERVER['SERVER_NAME'], 'pituwa')) {
        $smarty->config_load('sites/orowo.oro.world/configs/sin.conf');
        $smarty->setCompileDir('sites/orowo.oro.world/templates_c_pitu');
    } else {
        $smarty->config_load('sites/orowo.oro.world/configs/eng.conf');
        $smarty->setCompileDir('sites/orowo.oro.world/templates_c');
    }
}

$smarty->setCacheDir('sites/orowo.oro.world/cache');
$smarty->setConfigDir('sites/orowo.oro.world/config');
$smarty->setTemplateDir('sites/orowo.oro.world/templates');

function getMessages($id) {
    $msgs = DBconnect::assoc_query_2D("SELECT message FROM message WHERE topic_id = :id ORDER BY ts DESC", [':id' => $id]);
    $senderTemplate = [JOHN, JANE];
    $messages = [];
    $i = 1;
    foreach ($msgs as $msg) {
        $sender = $senderTemplate[2 % $i++];
        $messages[] = ['msg' => $msg['message'], 'sender' => $sender ];
    }
    return $messages;
}