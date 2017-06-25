<?php 
//නැමොන පකයක ටව ත්අ රමගු ල්ත ක ගැ ව තිය ක් ව ඔ
//වද කා ගාර ය වධ ය වධ කවධ ය
header("Content-type: application/json");
echo json_encode(['msgs' => getMessages($_POST['id'])]);
