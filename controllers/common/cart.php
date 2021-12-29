<?php
session_start();

if(isset($_SESSION['name'])){
    $_SESSION['total_items'] = $_GET['total_items'];
}
?>