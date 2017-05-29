<?php
$id = $_GET['id'];
$result = [];
$channel = DBconnect::assoc_query_2D("SELECT topic FROM channel WHERE id = :id ORDER BY ts DESC", [':id' => $id]);
$msgs = DBconnect::assoc_query_2D("SELECT message FROM message WHERE topic_id = :id ORDER BY ts DESC", [':id' => $id]);

$messages = [];
foreach ($msgs as $msg) {
    $sender = ['John', 'Jane'][rand(0, 1)];
    $messages[] = ['msg' => $msg['message'], 'sender' => $sender ];
}

$smarty->assign('channel', $channel[0]);
$smarty->assign('messages', $messages);
$smarty->display('channels.tpl');