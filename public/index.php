<?php

require __DIR__.'/../vendor/autoload.php';

$userCall = $data = json_decode(file_get_contents('php://input'), true);

/*
$userCall = [
    'welcome' => [
        'hello' => [
            'name' => 'Bob',
        ],
    ],
];
*/

$runner = new \Src\Runner();
$runner->actionCall($userCall);

echo json_encode($runner), PHP_EOL;

