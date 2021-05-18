<?php

$barra_de_navegacion = implode("",[
    nav([
        _div([
            'class' => 'container'
        ],[
            a("Pizza",[
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
                ],"text"))
            ])
        ])
    ],[
        'class' => 'white z-depth-0'
    ])
]);