<?php

require __DIR__.'/../vendor/autoload.php';

$userCall = [
    'welcome' => [
        'hello' => [
            'name' => 'Bob',
        ],
    ],
];

$runner = new \Src\Runner\Runner();
$runner->actionCall($userCall);

echo json_encode($runner);

