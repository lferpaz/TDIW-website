<header class="head">
    <setction class="main-header">
        <div class="principal-header">

            <section class="left-header">
                    <a href="/../../index.php" alt="main menu"><img src="./public/images/logo.png" alt="logo"></a>
            </section>
                    
            <section class="center-header">
                <div>
                    <?php include_once __DIR__."./../../controllers/category/controller_category.php"; ?>
                </div>
                <div class="main-search">
                    <input type="taxt" name="searh" placeholder="Busca en PadelMania :)">

                </div>
                                            
            </section>
                    
            <section class="right-header">
                <div class="right-header-start">
                    <img class="img-account" src="public/images/user.png">
                    <p id="header_user">
                    <?php if(!isset($_SESSION['name'])) { echo("Usuario");} 
                        else { echo($_SESSION['name']); }?>
                    </p> 
                </div>
                <div class="right-header-end">
                    <img class="img-account" src="public/images/shopping-bag.png">
                    <p>Carrito </p>
                    <p id="number_cart"> (<?php if(!isset($_SESSION['total_items'])) {echo (0);}
                                                            else { echo($_SESSION['total_items']); }?>)</p>
                </div>
            </section>

        </div>
        <ul id="slide-menu">
            <li onClick=menuClick(0)><a>Mi cuenta</a></li>
            <li onClick=menuClick(1)><a>Mis pedidos</a></li>
            <li onClick=menuClick(2)><a>Cerrar session</a></li>
        </ul>
            <div class="separador sp-header"></div>
    </setction>    
</header>
<script src="./../../public/js/header.js"></script>