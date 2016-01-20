<?php

return [
    'Development' => [
        'path' => 'local',
        'items' => [
            'config' => 'config/local',
            'nginx'  => 'nginx',
            'public' => 'public',
            'artisan'=> '',
        ],
    ],
    'Test' => [
        'path' => 'testing',
        'items' => [
            'config' => 'config/testing',
            'nginx'  => 'nginx',
            'public' => 'public',
            'artisan'=> '',
        ],
    ],
    'Production' => [
        'path' => 'production',
        'items' => [
            'config' => 'config/production',
            'nginx'  => 'nginx',
            'public' => 'public',
            'artisan'=> '',
        ],
    ],
];
