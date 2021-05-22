<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = validar_form([
        'email',
        'title',
        'ingredients'
    ]);
    if(!empty($result)){
        echo $result[0]."<br>";
        echo $result[1]."<br>";
        echo $result[2];
    }
}else{
    $result = _validar_form([
        'email',
        'title',
        'ingredients'
    ]);
    if(!empty($result)){
        echo $result[0]."<br>";
        echo $result[1]."<br>";
        echo $result[2];
    }
}