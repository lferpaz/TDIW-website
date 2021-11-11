<?php
include_once __DIR__."/../models/connect_db.php";
include_once __DIR__."/../models/user/create_user.php";

$connection = connect_db();

$correct = create_user($connection, $_POST['dni'], $_POST['username'], $_POST['name'], 
$_POST['last_name'], $_POST['mail'], $_POST['phone'], $_POST['password']);

if ($correct) {
    include_once __DIR__."/../views/user_page.php";
} else {
    echo ("caca");
}
?>