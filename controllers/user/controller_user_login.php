<?php
include_once __DIR__. "/../../models/common/connect_db.php";
include_once __DIR__. "/../../models/user/select_user.php";
include_once __DIR__. "/../../models/comanda/select_comanda.php";
include_once __DIR__. "/../../views/common/header.php";

$_GET['action'] = 'validation';
include __DIR__. '/../../index.php';

$connection = connect_db();
$error = validate_log_in();

if ($error == "") {
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
            $_SESSION['total_price'] = $comanda['importe_total'];
        }
        header("Location: ../../index.php");
    } else {
        header("Location: ../../index.php?action=login&error=El usuaio o la contraseña son incorrectos");
    }
} else {
    echo "<SCRIPT>
        alert('$error');
        window.location.replace('../../index.php?action=login');
    </SCRIPT>";
}
?>