<?php
include_once __DIR__."/../models/connect_db.php";
include_once __DIR__."/../models/comanda/select_comanda.php";

$connection = connect_db();
$comandas = select_comanda($connection, $_GET['user_id']);

include_once __DIR__."/../views/comanda_list.php";

?>