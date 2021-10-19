<?php 
class UsuarioController
{	
    public function __construct(){}

    public function index(){
        require_once('index.php'); //Incluimos el formulario de registro de la WEB.
        
    }

    public function register(){
        require_once('./Views/User/register.php'); //Incluimos el formulario de registro de la WEB.
    }
    public function login(){
        require_once('Views/User/login.php'); //Incluimos el formulario de registro de la WEB.
       
    }
    public function error(){
        require_once('Views/User/error.php');
    } 

    public function save($dni,$username,$password,$firtname,$lastname,$mail,$phone){
        UserPadel::save($dni,$username,$password,$firtname,$lastname,$mail,$phone);
        header('Location: ../index.php');
    }

} 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if (isset($_POST['action'])) {
    $usuarioController= new UsuarioController();
    //se añade el archivo usuario.php
    require_once('../Models/user.php');
    //se añade el archivo para la conexion
    require_once('../connection.php');


   
    if ($_POST['action']=='register') {
        //Hacer verificaciones.
        $usuarioController->save($_POST['id'],$_POST['username'],$_POST['password'],
        $_POST['firtname'],$_POST['lastname'],$_POST['mail'],$_POST['phone']);
        // $usuarioController->save($usuario);


    }elseif ($_POST['action']=='update') {
        //$usuario= new Usuario($_POST['id'],$_POST['alias'],$_POST['nombres'],$_POST['email']);
       // $usuarioController->update($usuario);
    }		
}

?>