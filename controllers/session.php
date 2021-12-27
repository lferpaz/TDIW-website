<?php
session_start();

if ($_GET['op'] == 'check') {
    if(isset($_SESSION['name'])){
        $data = ['user_id' => $_SESSION['user_id'], 'name' => $_SESSION['name']];
        echo(json_encode($data));
    } else {
        echo('false');
    }
} else if ($_GET['op'] == 'logout') {
    session_destroy();
}
?>