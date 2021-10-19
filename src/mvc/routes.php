<?php
function call($controller, $action){
    //importa el controlador desde la carpeta Controllers
    require_once('Controllers/' . $controller . '_controller.php');
    //crea el controlador
    switch($controller){
        case 'user':
            
            require_once('Models/user.php');
            $controller= new UsuarioController();
            break; 

    }
    //llama a la acción del controlador
    $controller->{$action }();
}

//array con los controladores y sus respectivas acciones
$controllers= array(
    'user'=>['login','index','register']
    );

//verifica que el controlador enviado desde index.php esté dentro del arreglo controllers
if (array_key_exists($controller, $controllers)) {
    //verifica que el arreglo controllers con la clave que es la variable controller del index exista la acción
    echo('Verifico el arreglo');
    if (in_array($action, $controllers[$controller])) {
        //llama  la función call y le pasa el controlador a llamar y la acción (método) que está dentro del controlador
        call($controller, $action);
    }else{
        call('user', 'error');
    }
}else{// le pasa el nombre del controlador y la pagina de error
    call('user', 'error');
}


?>