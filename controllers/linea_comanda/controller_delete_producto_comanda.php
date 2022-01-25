<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/linea_comanda/delete_producto_comanda.php";

$connection = connect_db();
if (filter_var($_GET['comanda_id'], FILTER_VALIDATE_INT) && filter_var($_GET['productos_id'], FILTER_VALIDATE_INT)) {
    $linia_comandas = delete_producto_comanda($connection, $_GET['comanda_id'], $_GET['productos_id']);
    include_once __DIR__."/../../views/user/user_cart.php";
} else {
    echo "<SCRIPT>
        alert('Error al eliminar el producto de la linea de comanda');
        window.location.replace('../../index.php');
    </SCRIPT>";
}

?>