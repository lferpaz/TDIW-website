<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/linea_comanda/select_linea_comanda_by_id.php";

$connection = connect_db();
if (filter_var($_GET['comanda_id'], FILTER_VALIDATE_INT)) {
    $linia_comandas = select_linia_comanda_by_id($connection, $_GET['comanda_id']);

    if(!isset($_GET['variant'])){
        include_once __DIR__."/../../views/user/user_cart.php";
    }
} else {
    $error = "Error al seleccionar la linea de la comanda.";
    include_once __DIR__."/../../views/common/error.php";
}

?>