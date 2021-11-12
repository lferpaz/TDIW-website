<?php
include_once __DIR__. "/../models/connect_db.php";
include_once __DIR__. "/../models/user/select_user.php";
include_once __DIR__. "/../views/header.php";

$connection = connect_db();
$users = select_user($connection, $_POST['mail']);

foreach ($users as $user) {
    $usuario = $user;
}

if (password_verify($_POST['password'], $usuario['password'])) {
    echo "Login success";
    $_SESSION['name'] = $usuario['nombre'];
    header("Location: ../index.php");
} else {
    echo "Login fail";
}
?>