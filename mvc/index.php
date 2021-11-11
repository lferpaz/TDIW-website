<!DOCTYPE html>
<html>
<?php
 include_once ($_SERVER['DOCUMENT_ROOT'].'./src/mvc/path.php');
 require_once (ROOT_PATH."/head.php");
?>
    <body>

        <header class="main-header">
            <div class="principal-header">

                <section class="left-header">
                    <a href="index.php" alt="main menu"><img src="./public/images/google.png" alt="logo"></a>
                </section>
                
                <section class="center-header">
                    <div>
                        <select class="searh-category">
                            <option>Todas las Categorias</option>
                            <option>Palas</option>
                            <option>Pelotas</option>
                            <option>Ropa</option>
                            <option>Accesorios</option>
                        </select>
                    </div>
                    <div class="main-search">
                        <input type="taxt" name="searh" placeholder="Busca en PadelMania :)">

                    </div>
                                        
                </section>
                
                <section class="right-header">
                    <div>
                        <a href="./Views/User/login.php" class="button btn-account">
                            <img class="img-account" src="./public/images/user.png">
                            Cuenta
                        </a>
                    </div>
                    <div class="right-header-end">
                        <a href="#" class="button btn-account">
                            <img class="img-account" src="./public/images/shopping-bag.png">
                            Carrito
                        </a>
                    </div>
                </section>

            </div>
            
            <div class="separador sp-header"></div>
            
        </header>

        <main>
            
        </main>

        <script></script>
    </body>
</html>
<?php 

require_once('connection.php');

if (isset($_GET['controller'])&&isset($_GET['action'])) {
    $controller=$_GET['controller'];
    $action=$_GET['action'];		
} else {
    $controller='user';
    $action='index';
}	

require_once('routes.php'); 
?>

