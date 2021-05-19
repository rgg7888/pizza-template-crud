<?php

$barra_de_navegacion = implode("",[
    nav([
        _div([
            'class' => 'container'
        ],[
            a("Pizzas",[
                'href' => '#',
                'class' => 'brand-logo brand-text'
            ]),
            _ul([
                'id' => 'nav-mobile',
                'class' => 'right hide-on-small-and-down'
            ],[
                li(_a([
                    'href' => '#',
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