<?php 
//නැමොන පකයක ටව ත්අ රමගු ල්ත ක ගැ ව තිය ක් ව ඔ
//වද කා ගාර ය වධ ය වධ කවධ ය
$channels = DBconnect::assoc_query_2D("SELECT * FROM channel ORDER BY ts DESC");
if (count($channels) > 0) {
    $smarty->assign('channels', $channels);
}