<?php

$barra_de_navegacion = implode("",[
    nav([
        _div([
            'class' => 'container'
        ],[
            a("Pizzas",[
                'href' => 'http://localhost:8000',
                'class' => 'brand-logo brand-text'
            ]),
            _ul([
                'id' => 'nav-mobile',
                'class' => 'right hide-on-small-and-down'
            ],[
                li(_a([
                    'href' => 'http://localhost:8001',
                    'class' => 'btn brand'
                ],[
                    _i(['class' => 'fas fa-plus-circle']),
                    " Pizza"
                ]))
            ])
        ])
    ],[
        'class' => 'white z-depth-0'
    ])
]);