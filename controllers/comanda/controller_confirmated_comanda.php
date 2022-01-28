<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/comanda/update_comanda_state.php";

$connection = connect_db();
if (filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT) && filter_var($_GET['state'], FILTER_SANITIZE_NUMBER_INT) && 
    filter_var($_GET['data'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)) {

    $status = update_comanda_state($connection, $_GET['id'], $_GET['state'], $_GET['data']);
    include_once __DIR__."/../../views/common/user_confirm.php";
} else {
    $error = "Error al actualizar el estado de la comanda.";
    include_once __DIR__."/../../views/common/error.php";
}
?>