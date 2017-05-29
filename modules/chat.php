<?php
$id = $_POST['topic_id'];
$msg = $_POST['msg'];
$sql = "INSERT INTO message (topic_id, message, ip) VALUES (:topic_id, :message, :ip)";
$id  = DBconnect::insert_query_ID($sql, [':topic_id' => $id, ':message' => $msg, ':ip' => $_SERVER['REMOTE_ADDR']]);
header("Content-type: application/json");
echo json_encode(['id' => $id]);