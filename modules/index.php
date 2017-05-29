<?php

$sql = "SELECT t.topic, t.id, COUNT(m.topic_id) AS cnt FROM channel AS t JOIN message AS m ON m.topic_id = t.id GROUP BY t.id ORDER BY cnt DESC LIMIT 3";
$tops = mysql_query($sql);
$smarty->assign('tops', $tops);
$smarty->display('index.tpl');
