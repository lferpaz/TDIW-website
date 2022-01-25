<?php
foreach($users as $user) {
    $id_user = htmlentities($user['Id'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $name_user = htmlentities($user['nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $direction_user = htmlentities($user['direccion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $email_user = htmlentities($user['email'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $photo_user = htmlentities($user['foto'], ENT_QUOTES, 'UTF-8');
    $user_cp = htmlentities($user['cp'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $user_poblacion = htmlentities($user['poblacion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $user_telefono = htmlentities($user['telefono'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
$data = ['id' => $id_user, 'name' => $name_user, 'direction' => $direction_user, 'email' => $email_user, 
        'photo' => $photo_user, 'cp' => $user_cp, 'poblacion' => $user_poblacion, 'telefono' => $user_telefono];
echo(json_encode($data));

?>