<?php
include_once __DIR__. "/../models/connect_db.php";
include_once __DIR__. "/../models/user/select_user.php";
include_once __DIR__. "/../views/header.php";

$connection = connect_db();
$users = select_user($connection, $_POST['mail']);
$user_name = $user['firtname'];
foreach ($users as $user) {
    $user_name = $user['firtname'];
}
header("Location: ../index.php?user_name=$user_name");
die();
?>