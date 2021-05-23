<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once('./templates/header.php');
require_once('./templates/footer.php');

############Details page###############
require_once('./utils/Connection.php');
require_once('./controladores/getOneRowController.php');
require_once('./templates/single.php');
#######################################

page([
    'idioma' => 'en',
    'head' => [
        group([
            'author' => "Ramiro",
            'description' => "Pizzas View",
            'keywords' => "HTML, CSS, JavaScript, PHP"
        ]),
        title("Pizzas!Details"),
        lnk([
            'rel' => 'stylesheet',
            'href' => 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'
        ]),
        css([
            sye([
                'background' => '#cbb09c !important'
            ],".brand"),
            sye([
                'color' => '#cbb09c !important'
            ],".brand-text")
        ])
    ],
    'body' => [
        'contenido' => [
            $barra_de_navegacion,
            _div([
                'class' => 'container center'
            ],$singleTemplate),
            $pie_de_pagina,
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