<?php
include_once __DIR__."/../models/connect_db.php";
include_once __DIR__."/../models/comanda/create_comanda.php";
include_once __DIR__."/../models/comanda/select_comanda.php";
include_once __DIR__."/../models/comanda/update_comanda.php";

$connection = connect_db();

include_once __DIR__."/controller_select_comanda.php";

if (empty($comandas)) {
    include_once __DIR__."/controller_create_comanda.php";
    include_once __DIR__."/controller_select_comanda.php";
}

include_once __DIR__."/../views/comanda_list.php";

include_once __DIR__."/../views/comanda_update.php";

echo ($data['comanda_id']);

?>