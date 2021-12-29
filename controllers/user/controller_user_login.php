<?php
include_once __DIR__. "/../../models/common/connect_db.php";
include_once __DIR__. "/../../models/user/select_user.php";
include_once __DIR__. "/../../models/comanda/select_comanda.php";
include_once __DIR__. "/../../views/common/header.php";

$connection = connect_db();
$users = select_user($connection, $_POST['mail']);

foreach ($users as $user) {
    $usuario = $user;
}

if (password_verify($_POST['password'], $usuario['password'])) {
    session_start();
    $_SESSION['name'] = $usuario['nombre'];
    $_SESSION['user_id'] = $usuario['Id'];
    $comanda = select_comanda($connection, $usuario['Id']);
    foreach ($comanda as $comanda) {
        $_SESSION['total_items'] = $comanda['total_elementos'];
    }
    header("Location: ../../index.php");
} else {
    header("Location: ../../login.php");
}
?>