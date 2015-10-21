<?php

return [

    'default'     => 'app',
    'connections' => [
        'app' => [
            'app_key'    => env('TAOBAO_KEY'),
            'app_secret' => env('TAOBAO_SECRET'),
            'format'     => env('TAOBAO_FORMAT', 'json'),
        ]
    ],
];