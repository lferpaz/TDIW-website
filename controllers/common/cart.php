<?php

if(isset($_SESSION['name'])){
    $_SESSION['total_items'] = $_GET['total_items'];
    $_SESSION['total_price'] = number_format($_GET['total_price'], 2, '.', '');
}
?>