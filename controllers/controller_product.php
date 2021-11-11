<?php
include_once __DIR__."/../models/connect_db.php";
include_once __DIR__."/../models/product/select_product.php";
include_once __DIR__."/../models/product/select_product_by_type.php";

$connection = connect_db();

if(isset($_POST['type'])){
    
    if ($_POST['type'] != '0'){
        $products = select_product_by_type($connection, $_POST['type']);
    } else {
        $products = select_product($connection);
    }
    
} else {
    $products = select_product($connection);
}

include_once __DIR__."/../views/product_list.php";

?>