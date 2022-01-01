<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/product/find_product.php";

$connection = connect_db();

$products = find_product($connection, $_GET['text']);

include_once __DIR__."/../../views/product/product_list.php";

?>