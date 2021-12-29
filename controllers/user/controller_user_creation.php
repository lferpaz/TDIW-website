<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/user/create_user.php";

$connection = connect_db();

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$name = $_POST['name'].' '.$_POST['last_name'];

$correct = create_user($connection, $_POST['dni'], $name, $_POST['direction'], 
                        $_POST['poblacion'], $_POST['cp'], $_POST['phone'], $_POST['mail'], $password);


if ($correct) {
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['user_id'] = $_POST['dni'];
    $_SESSION['total_items'] = 0;
    header("Location: ../../index.php");
} else {
    header("Location: ../../signup.php");
}
?>