<?php
include_once __DIR__."/../models/connect_db.php";
include_once __DIR__."/../models/comanda/create_comanda.php";

$connection = connect_db();
$comandas = create_comanda($connection, $_GET['date'], $_GET['user_id']);

include_once __DIR__."/../views/comanda_update.php";
?>