<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/linea_comanda/create_linea_comanda.php";

$connection = connect_db();
if (filter_var($_GET['comanda_id'], FILTER_VALIDATE_INT) && filter_var($_GET['producto_id'], FILTER_VALIDATE_INT) && 
    filter_var($_GET['cantidad'], FILTER_VALIDATE_INT) && filter_var($_GET['nombre_producto'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES) &&
    filter_var($_GET['precio_producto'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)) {

    $linia_comandas = create_linea_comanda($connection, $_GET['comanda_id'], $_GET['producto_id'], $_GET['cantidad'], $_GET['nombre_producto'], $_GET['precio_producto']);
    include_once __DIR__."/../../views/linea_comanda/linea_list.php";
} else {
    echo "<SCRIPT>
        alert('Error al crear la linea de la comanda');
        window.location.replace('../../index.php');
    </SCRIPT>";
}
?>