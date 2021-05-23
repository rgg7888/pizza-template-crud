<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once('./templates/header.php');
require_once('./templates/footer.php');

#######Procesamiento de los datos###########
require_once('./utils/Connection.php');
require_once('./controladores/validaController.php');
###########################################

page([
    'idioma' => 'en',
    'head' => [
        group([
            'author' => "Ramiro",
            'description' => "Agregar un pizza",
            'keywords' => "HTML, CSS, JavaScript, PHP"
        ]),
        title("Add a Pizza!"),
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
            ],".brand-text"),
            sye([
                'max-width' => '460px',
                'margin' => '20px auto',
                'padding' => '20px'
            ],"form")
        ])
    ],
    'body' => [
        'contenido' => [
            $barra_de_navegacion,
            _section([
                'class' => 'container grey-text'
            ],[
                _h4([
                    'class' => 'center'
                ],"Add A Pizza !"),
                _form([
                    'class' => 'white',
                    'action' => 'http://localhost:8001/',
                    'method' => 'POST'
                ],[
                    label("Your Email:"),
                    input([
                        'type' => 'text',
                        'name' => 'email',
                        'value' => $values['email']
                    ]),
                    div($errores['email'],[
                        'class' => 'red-text'
                    ]),
                    label("Pizza Title:"),
                    input([
                        'type' => 'text',
                        'name' => 'title',
                        'value' => $values['title']
                    ]),
                    div($errores['title'],[
                        'class' => 'red-text'
                    ]),
                    label("Ingredients (comma separated):"),
                    input([
                        'type' => 'text',
                        'name' => 'ingredients',
                        'value' => $values['ingredients']
                    ]),
                    div($errores['ingredients'],[
                        'class' => 'red-text'
                    ]),
                    _div([
                        'class' => 'center'
                    ],input([
                        'type' => 'submit',
                        'name' => 'submit',
                        'value' => 'Submit',
                        'class' => 'btn brand z-depth-0'
                    ]))
                ])
            ]),
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