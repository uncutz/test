<?php

require_once __DIR__.'/../../vendor/autoload.php';
$receivedData = json_decode(file_get_contents("php://input"), true);
var_dump($receivedData);
echo 'POST';
exit();