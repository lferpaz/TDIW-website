<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/linea_comanda/select_linea_comanda.php";

$connection = connect_db();
$linia_comandas = select_linia_comanda($connection, $_GET['comanda_id'], $_GET['producto_id']);

include_once __DIR__."/../../views/linea_comanda/linea_list.php";

?>