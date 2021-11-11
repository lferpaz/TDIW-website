<header class="main-header">
    <div class="principal-header">

        <section class="left-header">
                <a href="#" alt="main menu"><img src="./public/images/google.png" alt="logo"></a>
        </section>
                
        <section class="center-header">
            <div>
                <select class="searh-category" onchange=filterProduct()>
                        <option value="0">Todas las Categorias</option>
                        <option value="1">Palas</option>
                        <option value="2">Pelotas</option>
                        <option value="3">Ropa</option>
                        <option value="4">Accesorios</option>
                </select>
            </div>
            <div class="main-search">
                <input type="taxt" name="searh" placeholder="Busca en PadelMania :)">

            </div>
                                        
        </section>
                
        <section class="right-header">
            <div>
                <a href="login.php" class="button btn-account">
                    <img class="img-account" src="public/images/user.png">
                    <span id="header_user"></span> 
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

<script src="./public/js/header.js"></script>