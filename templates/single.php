<?php
$singleTemplate = [];
if($row) {
    $singleTemplate = [
        h4(htmlspecialchars($row['title'])),
        p("Created by: ".htmlspecialchars($row['email'])),
        p(date($row['created_at'])),
        h5("Ingredients:"),
        p(htmlspecialchars($row['ingredients'])),
        form([
            input([
                'type' => 'hidden',
                'name' => 'id_to_delete',
                'value' => $row['id']
            ]),
            input([
                'type' => 'submit',
                'name' => 'delete',
                'value' => 'Delete',
                'class' => 'btn brand z-depth-0'
            ])
            ],[
                'action' => 'http://localhost:8002',
                'method' => 'POST'
            ])
    ];
}else{
    $singleTemplate = h5("404 Not Found");
}