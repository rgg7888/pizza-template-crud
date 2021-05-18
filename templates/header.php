<?php

$barra_de_navegacion = implode("",[
    nav([
        _div([
            'class' => 'container'
        ],a("Pizza",[
            'href' => '#',
            'class' => 'brand-logo brand-text'
        ]))
    ],[
        'class' => 'white z-depth-0'
    ])
]);