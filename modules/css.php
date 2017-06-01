<?php

$strongColor = 'black';

switch ($_GET['type']) {
    case 'men':
        break;
    case 'women':
        break;
    case 'suicide':
        break;
    case 'god':
        $strongColor = 'white';
        break;
}

$css = '/images/spiritual/' . $_GET['type'] . '.jpg';
header("Content-Type: text/css");
$smarty->assign('filename', $css);
$smarty->assign('strongColor', $strongColor);
$smarty->display('css.tpl');