<?php
$id = $_GET['id'];
$result = [];
$channel = DBconnect::assoc_query_2D("SELECT id, topic FROM channel WHERE id = :id ORDER BY ts DESC", [':id' => $id]);
$smarty->assign('channel', $channel[0]);
$smarty->assign('messages', getMessages($id));
$smarty->display('channels.tpl');