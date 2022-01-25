<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/linea_comanda/update_linea_comanda.php";

$connection = connect_db();

if (filter_var($_GET['comanda_id'], FILTER_VALIDATE_INT) && filter_var($_GET['cantidad'], FILTER_VALIDATE_INT) &&
    filter_var($_GET['product_id'], FILTER_VALIDATE_INT)) {

    $comandas = update_linea_comanda($connection, $_GET['comanda_id'], $_GET['cantidad'], $_GET['product_id']);
    include_once __DIR__."/../../views/comanda/comanda_update.php";
} else {
    echo "<SCRIPT>
        alert('Error al actualizar la linea de la comanda');
        window.location.replace('../../index.php');
    </SCRIPT>";
}
?>