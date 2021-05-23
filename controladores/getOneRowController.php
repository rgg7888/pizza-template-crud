<?php
$row = null;
if(isset($_GET['id'])) {
    $row = byId($conn,"Pizza");
}