<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/product/find_product.php";

$connection = connect_db();

if(filter_var($_GET['text'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)) {
    $products = find_product($connection, $_GET['text']);
    include_once __DIR__."/../../views/product/product_list.php";
} else {
    $error = "Error al buscar el producto.";
    include_once __DIR__."/../../views/common/error.php";
}
?>