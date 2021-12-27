<?php
include_once __DIR__."/../models/connect_db.php";
include_once __DIR__."/../models/linea_comanda/create_linea_comanda.php";

$connection = connect_db();
$linia_comandas = create_linea_comanda($connection, $_GET['comanda_id'], $_GET['producto_id'], $_GET['cantidad'], $_GET['nombre_producto'], $_GET['precio_producto']);

include_once __DIR__."/../views/linia_list.php";
?>