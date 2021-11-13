<header class="main-header">
    <div class="principal-header">

        <section class="left-header">
                <a href="../index.php" alt="main menu"><img src="./public/images/google.png" alt="logo"></a>
        </section>
                
        <section class="center-header">
            <div>
                <?php include_once __DIR__."./../controllers/controller_category.php"; ?>
            </div>
            <div class="main-search">
                <input type="taxt" name="searh" placeholder="Busca en PadelMania :)">

            </div>
                                        
        </section>
                
        <section class="right-header">
            <div>
                <a id="user-button" class="button btn-account">
                    <img class="img-account" src="public/images/user.png">
                    <span id="header_user">
                    <?php if(!isset($_SESSION['name'])) { echo("Usuario");} 
                        else { echo($_SESSION['name']); }?>
                    </span> 
                </a>
            </div>
            <div class="right-header-end">
                <a href="#" class="button btn-account">
                    <img class="img-account" src="public/images/shopping-bag.png">
                    Carrito
                </a>
            </div>
        </section>

    </div>
    <ul id="slide-menu">
        <li onClick=menuClick(0)><a>Mi cuenta</a></li>
        <li onClick=menuClick(1)><a>Mis pedidos</a></li>
        <li onClick=menuClick(2)><a>Cerrar session</a></li>
    </ul>
        <div class="separador sp-header"></div>    
</header>
<script src="./../public/js/header.js"></script>