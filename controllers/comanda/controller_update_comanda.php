<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/comanda/update_comanda.php";


$connection = connect_db();
if (filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT) && filter_var($_GET['total_elementos'], FILTER_VALIDATE_FLOAT) && 
    filter_var($_GET['total_importe'], FILTER_VALIDATE_FLOAT)) {

    $comandas = update_comanda($connection, $_GET['id'], $_GET['total_elementos'], $_GET['total_importe']);
    include_once __DIR__."/../../views/comanda/comanda_update.php";
} else {
    $error = "Error al actualizar la comanda.";
    include_once __DIR__."/../../views/common/error.php";
}
?>