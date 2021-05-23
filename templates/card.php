<?php

$cards = [];
function template($title,$ingredientes,$infoLink){

    return _div([
        'class' => 'col s6 md3'
    ],_div([
            'class' => 'card z-depth-0'
        ],[
            _div([
                'class' => 'card-content center'
            ],[
                h6(htmlspecialchars($title)),
                div(htmlspecialchars($ingredientes))
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
    array_push($cards,template($row['title'],$row['ingredients'],'#'));
}
##################
$res = implode("",$cards);