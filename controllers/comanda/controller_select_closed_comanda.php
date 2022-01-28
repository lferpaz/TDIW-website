<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/comanda/select_closed_comanda.php";

$connection = connect_db();
if (filter_var($_GET['user_id'], FILTER_SANITIZE_NUMBER_INT)) {
    $comandas = select_closed_comanda($connection, $_GET['user_id']);
    include_once __DIR__."/../../views/user/user_order.php";
} else {
    $error = "Error al cargar la comanda.";
    include_once __DIR__."/../../views/common/error.php";
}

?>