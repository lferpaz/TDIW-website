<?php
include_once __DIR__."/../models/connect_db.php";
include_once __DIR__."/../models/linea_comanda/update_linea_comanda.php";


$connection = connect_db();
$comandas = update_linea_comanda($connection, $_GET['comanda_id'], $_GET['cantidad'], $_GET['product_id']);

include_once __DIR__."/../views/comanda_update.php";
?>