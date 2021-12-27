<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/product/select_product.php";
include_once __DIR__."/../../models/product/select_product_by_type.php";

$connection = connect_db();

if(isset($_GET['type'])){
    
    if ($_GET['type'] != '0'){
        $products = select_product_by_type($connection, $_GET['type']);
    } else {
        $products = select_product($connection);
    }
    
} else {
    $products = select_product($connection);
}

include_once __DIR__."/../../views/product/product_list.php";

?>