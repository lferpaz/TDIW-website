<?php
session_start();

if ($_POST['action'] == 'check') {
    if(isset($_SESSION['name'])){
        echo('true');
    } else {
        echo('false');
    }
} else if ($_POST['action'] == 'logout') {
    session_destroy();
}
?>