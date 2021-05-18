<?php

$barra_de_navegacion = implode("",[
    nav([
        _div([
            'class' => 'container'
        ],[
            a("Clase & Methods || File & Functions",[
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
                ],_i(['class' => 'fas fa-plus-circle'])))
            ])
        ])
    ],[
        'class' => 'white z-depth-0'
    ])
]);