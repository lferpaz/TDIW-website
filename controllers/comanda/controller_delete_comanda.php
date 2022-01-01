<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/comanda/delete_comanda.php";


$connection = connect_db();
$comandas = delete_comanda($connection, $_GET['id']);

include_once __DIR__."/../../views/comanda/comanda_delete.php";
?>