<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/comanda/create_comanda.php";

$connection = connect_db();
if (filter_var($_GET['date'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES) && filter_var($_GET['user_id'], FILTER_SANITIZE_NUMBER_INT)) {
    $comandas = create_comanda($connection, $_GET['date'], $_GET['user_id']);
    include_once __DIR__."/../../views/comanda/comanda_update.php";
} else {
    $error = "Error al crear la comanda.";
    include_once __DIR__."/../../views/common/error.php";
}
?>