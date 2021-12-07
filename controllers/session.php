<?php
session_start();

if ($_POST['action'] == 'check') {
    if(isset($_SESSION['name'])){
        $data = ['user_id' => $_SESSION['user_id'], 'name' => $_SESSION['name']];
        echo(json_encode($data));
    } else {
        echo('false');
    }
} else if ($_POST['action'] == 'logout') {
    session_destroy();
}
?>