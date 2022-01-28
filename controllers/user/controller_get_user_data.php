<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/user/select_user_by_id.php";

$connection = connect_db();

if (filter_var($_GET['id'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)) {
    $users = select_user_by_id($connection, $_GET['id']);
    include_once __DIR__."/../../views/user/user_data.php";
} else {
    $error = "Error al seleccionar el usuario.";
    include_once __DIR__."/../../views/common/error.php";
}
?>