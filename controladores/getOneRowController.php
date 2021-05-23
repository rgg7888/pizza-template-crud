<?php
$row = null;
if(isset($_POST['delete'])) {
    delete($conn,"id_to_delete","Pizza");
}
if(isset($_GET['id'])) {
    $row = byId($conn,"Pizza");
}