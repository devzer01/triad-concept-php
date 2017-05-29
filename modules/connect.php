<?php

$topic = $_POST['topic'];
$sql = "INSERT INTO channel (topic, ip, assumed_gender) VALUES (:topic, :ip, :gender)";
$id  = DBconnect::insert_query_ID($sql, [':topic' => $topic, ':ip' => $_SERVER['REMOTE_ADDR'], ':gender' => $_POST['x']]);
header("Content-type: application/json");
echo json_encode(['id' => $id]);