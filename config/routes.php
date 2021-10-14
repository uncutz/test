<?php

use Backend\Controller\IndexController;

require __DIR__ .'/../vendor/autoload.php';
return [

    'Index' => [
        'type' => 'GET',
        'path' => '/',
        'method' => IndexController::class . ':index'
    ],
    'Index1' => [
        'type' => 'GET',
        'path' => '/1',
        'method' => IndexController::class . ':index'
    ]

];