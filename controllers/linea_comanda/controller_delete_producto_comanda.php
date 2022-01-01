<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/linea_comanda/delete_producto_comanda.php";
$connection = connect_db();
$linia_comandas =  delete_producto_comanda($connection, $_GET['comanda_id'], $_GET['productos_id']);
include_once __DIR__."/../../views/user/user_cart.php";
?>