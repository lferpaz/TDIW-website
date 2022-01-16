<?php
include_once __DIR__."/../../models/common/connect_db.php";
include_once __DIR__."/../../models/user/create_user.php";

$_GET['action'] = 'validation';
include __DIR__. '/../../index.php';

$connection = connect_db();
$error = validate_sign_up();

if ($error == "") {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'].' '.$_POST['last_name'];
    $photo = "/public/images/user/default.png";

    $correct = create_user($connection, $_POST['dni'], $name, $_POST['direction'], 
                            $_POST['poblacion'], $_POST['cp'], $_POST['phone'], $_POST['mail'], $password, $photo);


    if ($correct) {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['user_id'] = $_POST['dni'];
        $_SESSION['total_items'] = 0;
        $_SESSION['total_price'] = '0.00';
        header("Location: ../../index.php");
    } else {
        header("Location: ../../index.php?action=signup&error=Usuario ya existe");
    }
} else {
    echo "<SCRIPT>
        alert('$error');
        window.location.replace('../../index.php?action=signup');
    </SCRIPT>";
}
?>