<?php
$id = $_GET['id'];
$result = [];
$channel = DBconnect::assoc_query_2D("SELECT * FROM channel WHERE id = :id ORDER BY ts DESC", [':id' => $id]);
$msgs = DBconnect::assoc_query_2D("SELECT message FROM message WHERE topic_id = :id ORDER BY ts DESC", [':id' => $id]);

$messages = [];
foreach ($msgs as $msg) {
    $messages = ['msg' => $msg['message'], 'sender' => $sender ];
}

$smarty->assign('channel', $channel);
$smarty->assign('messages', $messages);

$channel = 0;


$smarty->display('channels.tpl');