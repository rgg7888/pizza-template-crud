<?php

$conn = conectar([
    'machine' => 'localhost',
    'user' => 'myUser',
    'password' => '0912@.',
    'dbname' => 'pizzas'
]);

if(!$conn) {
    die("Error de conexion " . mysqli_connect_error());
}

$rows = select("title,ingredients,id","Pizza",$conn,[
    'by' => 'created_at',
    'forma' => 'DESC'
]);