<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/comanda/update_comanda.php";


$connection = connect_db();
$comandas = update_comanda($connection, $_GET['id'], $_GET['total_elementos'], $_GET['total_importe']);

include_once __DIR__."/../../views/comanda/comanda_update.php";
?>