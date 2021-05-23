<?php

if(!$conn) {
    die("Error de conexion " . mysqli_connect_error());
}

$rows = select("title,ingredients,id","Pizza",$conn,[
    'by' => 'created_at',
    'forma' => 'DESC'
]);