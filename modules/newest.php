<?php

$sql = "SELECT * FROM channel ORDER BY dt DESC ";
mysql_query($sql);
$channels = registry::$stmt->fetchAll(PDO::FETCH_ASSOC);

$smarty->assign('channels', $channels);
$smarty->display('index.tpl');