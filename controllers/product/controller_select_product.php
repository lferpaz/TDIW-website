<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/product/select_product_by_id.php";

$connection = connect_db();

if (filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    $products = select_product_by_id($connection, $_GET['id']);
    include_once __DIR__."/../../views/product/product.php";
} else {
    $error = "Error al seleccionar el producto.";
    include_once __DIR__."/../../views/common/error.php";
}

?>