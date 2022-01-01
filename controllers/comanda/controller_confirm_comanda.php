<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/linea_comanda/select_linea_comanda_by_id.php";

$connection = connect_db();
$linia_comandas = select_linia_comanda_by_id($connection, $_GET['comanda_id']);

include_once __DIR__."/../../views/user/user_confirm_comanda.php";

?>