<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/user/select_user_by_id.php";
include_once __DIR__."/../../models/user/update_user.php";

$connection = connect_db();
$filesAbsolutePath = __DIR__."/../../public/images/user/";
$filesRelativePath = "/public/images/user/";

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$direcction = $_POST['direction'];
$poblation = $_POST['poblacion'];
$cp = $_POST['cp'];
$password = $_POST['password'];
$photo = $_FILES['profile_image']['tmp_name'];

session_start();
$user_id = $_SESSION['user_id'];

$users = select_user_by_id($connection, $user_id);

foreach($users as $user) {
    if (empty($name)) {
        $name = $user['nombre'];
    }
    if (empty($mail)) {
        $mail = $user['email'];
    }
    if (empty($phone)) {
        $phone = $user['telefono'];
    }
    if (empty($direcction)) {
        $direcction = $user['direccion'];
    }
    if (empty($poblation)) {
        $poblation = $user['poblacion'];
    }
    if (empty($cp)) {
        $cp = $user['cp'];
    }
    if (empty($password)) {
        $password = $user['password'];
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }
    if (empty($photo)) {
        $photo = $user['foto'];
        $file_destination_relative_path = $photo;
    } else {
        $filesdestinationPath = $filesAbsolutePath.$user_id.".".pathinfo($photo, PATHINFO_EXTENSION);
        move_uploaded_file($photo, $filesdestinationPath);
        $file_destination_relative_path = $filesRelativePath.$user_id.".".pathinfo($photo, PATHINFO_EXTENSION);
    }
}

$users = update_user($connection, $user_id, $name, $direcction, $poblation, $cp, $phone, $mail, $password, $file_destination_relative_path);

Header("Location: ../../index.php");
?>