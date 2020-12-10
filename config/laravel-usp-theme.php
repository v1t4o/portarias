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
    'title' => config('app.name'),
    'dashboard_url' => config('/'),
    'logout_method' => 'POST',
    'logout_url' => config('app.url') . '/logout',
    'login_url' => config('app.url') . '/login',
    'menu' => [
        [
            'text' => 'Ocorrências',
            'url'  => '/ocorrencias'
        ],
        [
            'text' => 'Usuários',
            'url'  => '/users',
        ],
    ]
];
