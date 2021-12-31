<?php
foreach($users as $user) {
    $id_user = $user['Id'];
    $name_user = $user['nombre'];
    $direction_user = $user['direccion'];
    $email_user = $user['email'];
    $photo_user = $user['foto'];
    $user_cp = $user['cp'];
    $user_poblacion = $user['poblacion'];
    $user_telefono = $user['telefono'];
}
$data = ['id' => $id_user, 'name' => $name_user, 'direction' => $direction_user, 'email' => $email_user, 
        'photo' => $photo_user, 'cp' => $user_cp, 'poblacion' => $user_poblacion, 'telefono' => $user_telefono];
echo(json_encode($data));

?>