<?php 
//නැමොන පකයක ටව ත්අ රමගු ල්ත ක ගැ ව තිය ක් ව ඔ
//වද කා ගාර ය වධ ය වධ කවධ ය
$topic_id = $_POST['id'];
$result = [];
$msgs = DBconnect::assoc_query_2D("SELECT * FROM message WHERE topic_id = :id ORDER BY ts", [':id' => $topic_id]);
header("Content-type: application/json");
foreach ($msgs as $msg) {
    $sender = ['John', 'Jane'][rand(0, 1)];
    $result[] = ['msg' => $msg['message'], 'sender' => $sender ];
}
echo json_encode(['msgs' => $result]);
