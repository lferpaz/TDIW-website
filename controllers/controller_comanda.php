<?php
include_once __DIR__."/../models/connect_db.php";
include_once __DIR__."/../models/comanda/create_comanda.php";
include_once __DIR__."/../models/comanda/select_comanda.php";
include_once __DIR__."/../models/comanda/update_comanda.php";


$connection = connect_db();
$comandas = select_comanda($connection, $_POST['user_id']);
if($comandas == null) {
    $comandas = create_comanda($connection, $_POST['date'], $_POST['user_id']);
}

foreach($comandas as $comanda) {
    $comanda_id = $comanda['id'];
    $total_elementos = $comanda['total_elementos'] + 1;
    $total_importe = $comanda['importe_total'] + $_POST['precio']; 

if (update_comanda($connection, $comanda_id, $_POST['total_elementos'], $_POST['total_importe']) == true) {
    include_once __DIR__."/../views/comanda_list.php";
} else {
    echo "Error";
}
?>