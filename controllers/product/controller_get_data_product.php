<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/product/select_product_by_id.php";

$connection = connect_db();

if (filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    $products = select_product_by_id($connection, $_GET['id']);
    include __DIR__."/../../views/product/product_data.php";
} else {
    echo "<SCRIPT>
        alert('Error al seleccionar el producto');
        window.location.replace('../../index.php');
    </SCRIPT>";
}

?>