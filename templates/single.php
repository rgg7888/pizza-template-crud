<?php
$singleTemplate = [];
if($row) {
    $singleTemplate = [
        h4(htmlspecialchars($row['title'])),
        p("Created by: ".htmlspecialchars($row['email'])),
        p(date($row['created_at'])),
        h5("Ingredients:"),
        p(htmlspecialchars($row['ingredients']))
    ];
}else{
    $singleTemplate = h5("404 Not Found");
}