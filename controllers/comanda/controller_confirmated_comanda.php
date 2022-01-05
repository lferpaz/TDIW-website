<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/comanda/update_comanda_state.php";

$connection = connect_db();
$status = update_comanda_state($connection, $_GET['id'], $_GET['state']);

include_once __DIR__."/../../views/common/user_confirm.php";

?>