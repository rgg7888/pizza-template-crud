<?php

require_once __DIR__ . '/vendor/autoload.php';

page([
    'idioma' => 'en',
    'head' => [
        group([
            'author' => "Ramiro",
            'description' => "Free Web tutorials",
            'keywords' => "HTML, CSS, JavaScript, PHP"
        ]),
        title("Pizzas !"),
        lnk([
            'rel' => 'stylesheet',
            'href' => 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'
        ])
    ],
    'body' => [
        'contenido' => [
            script([
                'src' => 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'
            ])
        ],
        'atributos' => []
    ]
]);