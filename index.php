<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once('./templates/header.php');

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
            $barra_de_navegacion,
            script([
                'src' => 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'
            ]),
            script([
                'src' => 'https://kit.fontawesome.com/60163d706b.js',
                'crossorigin' => 'anonymous'
            ])
        ],
        'atributos' => [
            'class' => 'grey lighten-4'
        ]
    ]
]);