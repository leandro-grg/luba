<?php

return [
    'database' => [
        'prefix' => 'luba_',
        'suffix' => ''
    ],
    'routes' => [
        'provider' => true,
        'prefix' => 'luba',
        'middlewares' => [
            'web', 'auth'
        ]
    ]
];
