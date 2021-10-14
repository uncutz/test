<?php

require_once __DIR__.'/../../vendor/autoload.php';
$receivedData = json_decode(file_get_contents("php://input"), true);
echo json_encode([
    'success' => true,
    'erfolg' => 'jup'
], JSON_THROW_ON_ERROR);
exit();