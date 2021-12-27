<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/product/select_product_by_id.php";

$connection = connect_db();

$products = select_product_by_id($connection, $_GET['id']);

include_once __DIR__."/../../views/product/product.php";

?>