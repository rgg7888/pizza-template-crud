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
        title("Pizzas !")
    ],
    'body' => [
        'contenido' => [],
        'atributos' => []
    ]
]);