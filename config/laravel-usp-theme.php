<?php

$submenu1 =  [
    [
        'text' => 'SubItem 1',
        'url'  => '/subitem1'
    ],
    [
        'text' => 'SubItem 2',
        'url'  => '/subitem2',
        'can'  => 'admin',
    ],
    [
        'text' => 'SubItem 3',
        'url'  => '/subitem3',
    ],
];

$submenu2 =  [
    [
        'text' => 'SubItem 1',
        'url'  => '/subitem1'
    ],
    [
        'text' => 'SubItem 2',
        'url'  => '/subitem2',
        'can'  => 'admin',
    ],
];

return [
    'title'=> 'USPdev',
    'dashboard_url' => '/',
    'logout_method' => 'GET',
    'logout_url' => '/logout',
    'login_url' => '/login',
    'menu' => [
        [
            'text' => 'Ocorrências',
            'url'  => '/ocorrencias'
        ],
        [
            'text' => 'Usuários',
            'url'  => '/users',
        ]
    ]
];
