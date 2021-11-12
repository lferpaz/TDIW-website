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
                <a href="login.php" class="button btn-account">
                    <img class="img-account" src="public/images/user.png">
                    <span id="header_user"><?php echo($_SESSION['name']);?></span> 
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
            
        <div class="separador sp-header"></div>    
</header>