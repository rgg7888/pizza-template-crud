<?php

$cards = [];
function crearLista($ingredientes) {
    $items = [];
    foreach(explode(',',$ingredientes) as $ing){
        array_push($items,li(htmlspecialchars($ing)));
    }
    return ul($items);
}
function template($title,$ingredientes,$infoLink){

    return _div([
        'class' => 'col s6 md3'
    ],_div([
            'class' => 'card z-depth-0'
        ],[
            img([
                'src' => './assets/pizza.svg',
                'class' => 'pizza',
                'alt' => 'pizza'
            ]),
            _div([
                'class' => 'card-content center'
            ],[
                h6(htmlspecialchars($title)),
                div(crearLista($ingredientes))
            ]),
            _div([
                'class' => 'card-action right-align'
            ],a("more info",[
                'class' => 'brand-text',
                'href' => $infoLink
            ]))
        ]
    ));

}
##################looping
foreach($rows as $row) {
    array_push($cards,template($row['title'],$row['ingredients'],"http://localhost:8002?id=".$row['id']));
}
##################
$res = implode("",$cards);