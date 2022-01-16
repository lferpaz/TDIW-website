<?php

function validate_sign_up() {
    $error = "";
    if (preg_match('/^[0-9]{8,9}[A-Z]$/', $_POST['dni']) == 0) {
        $error = "DNI incorrecto";
    }

    if (empty($_POST['name']) || strlen($_POST['name']) > 15) {
        $error = $error."\Nombre incorrecto";
    }

    if (preg_match('/^[a-zA-Z_]+( [a-zA-Z_]+)*$/', $_POST['direction']) == 0 || strlen($_POST['direction']) > 30) {
        $error = $error."\Dirección incorrecta";
    }

    if (preg_match('/^[a-zA-Z_]+( [a-zA-Z_]+)*$/', $_POST['poblacion']) == 0 || strlen($_POST['poblacion']) > 30) {
        $error = $error."\Población incorrecta";
    }

    if (preg_match('/^[0-9]{5}$/', $_POST['cp']) == 0) {
        $error = $error."\Código postal incorrecto";
    }

    if (strlen($_POST['phone']) > 0) {
        if (preg_match('/^[0-9]{9}$/', $_POST['phone']) == 0) {
            $error = $error."\Teléfono incorrecto";
        }
    }

    if (preg_match('/^[a-zA-Z0-9_]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9_]+$/', $_POST['mail']) == 0) {
        $error = $error."\Correo electrónico incorrecto";
    }

    if (strlen($_POST['password']) > 15 || strlen($_POST['password']) < 8 || $_POST['password'] != $_POST['password_confirmation']) {
        $error = $error."\Contraseña incorrecta";
    }
    return $error;
}

function validate_log_in() {
    $error = "";
    if (preg_match('/^[a-zA-Z0-9_]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9_]+$/', $_POST['mail']) == 0) {
        $error = $error."\Correo electrónico incorrecto";
    }

    if (strlen($_POST['password']) > 15 || strlen($_POST['password']) < 8) {
        $error = $error."\Contraseña incorrecta";
    }
    return $error;
}

function validate_modify_user() {
    $error = "";

    if (!empty($_POST['name'])) {
        if (strlen($_POST['name']) > 15) {
            $error = $error."\Nombre incorrecto";
        }
    }

    if (!empty($_POST['direction'])) {
        if (preg_match('/^[a-zA-Z_]+( [a-zA-Z_]+)*$/', $_POST['direction']) == 0 || strlen($_POST['direction']) > 30) {
            $error = $error."\Dirección incorrecta";
        }
    }

    if (!empty($_POST['poblacion'])) {
        if (preg_match('/^[a-zA-Z_]+( [a-zA-Z_]+)*$/', $_POST['poblacion']) == 0 || strlen($_POST['poblacion']) > 30) {
            $error = $error."\Población incorrecta";
        }
    }

    if (!empty($_POST['cp'])) {
        if (preg_match('/^[0-9]{5}$/', $_POST['cp']) == 0) {
            $error = $error."\Código postal incorrecto";
        }
    }

    if (!empty($_POST['phone'])) {
        if (preg_match('/^[0-9]{9}$/', $_POST['phone']) == 0) {
            $error = $error."\Teléfono incorrecto";
        }
    }

    if (!empty($_POST['mail'])) {
        if (preg_match('/^[a-zA-Z0-9_]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9_]+$/', $_POST['mail']) == 0) {
            $error = $error."\Correo electrónico incorrecto";
        }
    }

    if (!empty($_POST['password'])) {
        if ($_POST['password'] != $_POST['password_confirmation']) {
            $error = $error."\Contraseña incorrecta";
        }
    }
    
    return $error;
}
?>

