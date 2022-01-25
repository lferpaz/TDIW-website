<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/comanda/delete_comanda.php";


$connection = connect_db();
if (filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT)) {
    $comandas = delete_comanda($connection, $_GET['id']);
    include_once __DIR__."/../../views/comanda/comanda_delete.php";
} else {
    echo "<SCRIPT>
        alert('Error al eliminar la comanda');
        window.location.replace('../../index.php');
    </SCRIPT>";
}
?>