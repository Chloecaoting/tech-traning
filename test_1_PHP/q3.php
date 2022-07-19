<?php
    $webService = [
        'sns' => [
            '0' => [
                'users' => [
                    '0' => [
                        'name' => 'john',
                        'age' => 18
                    ],
                    '1' => [
                        'name' => 'tom',
                        'age' => 28
                    ]
                ],
            ],
        ],
    ];

    echo $webService['sns'][0]['users'][0]['name'] . "\n";
