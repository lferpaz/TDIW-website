<header class="head">
    <setction class="main-header">
        <div class="principal-header">

            <section class="left-header">
                    <a href="/../../index.php" alt="main menu"><img src="./public/images/logo.png" alt="logo"></a>
            </section>
                    
            <section class="center-header">
                <div id="category-box-header">
                </div>
                <div class="main-search">
                    <input type="taxt" id="search-web" name="searh" placeholder="Busca en PadelMania :)">

                </div>
                                            
            </section>
                    
            <section class="right-header">
                <div class="right-header-start">
                    <img id ="photo-user-header" class="img-account" src="public/images/user/default.png">
                    <p id="header_user"></p>
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
            <li onClick=menuClick(0)><input id="user-account-btn" type="button" value="Mi cuenta"></li>
            <li onClick=menuClick(1)><input id="user-order-btn" type="button" value="Mis Pedidos"></li>
            <li onClick=menuClick(2)><input id="user-logout-btn" type="button" value="Cerrar session"></li>
        </ul>
            <div class="separador sp-header"></div>
    </setction>    
</header>
<script src="./../../public/js/header.js"></script>