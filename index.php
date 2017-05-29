<?php
if (!isset($_GET['type'])) {
    $_GET['type'] = (['men', 'women'])[rand(0, 1)];
}
session_start();
require_once('classes/top.class.php');

$_GET['action'] = isset($_GET['action'])?$_GET['action']:'';
require_once ("modules/common.php");

switch($_GET['action'])
{
    case 'connect':
        include_once('modules/connect.php');
        break;
    case 'channel':
	case 'channels':
		include_once('modules/channels.php');
		break;
    default:
        include_once('modules/index.php');
        break;
}
