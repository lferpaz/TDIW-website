<?php
if (empty($linia_comandas)) {?>
    ?> <h1>La cesta esta vacia.</h1> <?php
} else {
    $total_price = 0;
    ?>
    <section id="user-cart-shop">
        <div id="cart-contend">
            <?php
            foreach ($linia_comandas as $linia_comanda) {
                $total_price += $linia_comanda['precio'] * $linia_comanda['cantidad'];
                $_GET['id'] = $linia_comanda['productos_id'];
                $_GET['action'] = 'product_data';
                include __DIR__. '/../../index.php';
                ?><section id=<?php echo $product_data['id'];?> class="product_cart">
                    <div class="product_cart_image">
                        <img src="<?php echo $product_data['photo']; ?>" alt="<?php echo $product_data['name']; ?>">
                    </div>
                    <div class="product_cart_info">
                        <h2><?php echo $product_data['name']; ?></h2>
                        <p><?php echo $product_data['description']; ?></p>
                        <p class="precio_producto" id=<?php echo $product_data['price']; ?>>Precio: <?php echo $product_data['price']; ?>€</p>
                        <div class="product_quantity">
                            <p class="cantidad_producto" id=<?php echo $linia_comanda['cantidad'];?>> Cantidad: <?php echo $linia_comanda['cantidad']; ?></p>
                            <div class="product_quantity_buttons">
                                <img class="product_quantity_button_plus" id="product_quantity_button_plus" alt="arrow_up" src="/../../public/images/up-arrow.png">
                                <img class="product_quantity_button_minus" id="product_quantity_button_minus" alt="arrow_down" src="/../../public/images/down-arrow.png">
                                
                            </div>
                        </div>
                    </div>
                    <img class="delete-product-cart" type="button" alt="Eliminar Producto" src="/../../public/images/garbage.png"></img>
                </section><?php
            }
            ?>
        </div>
        <div id="resum-cart">
            <h1>Total: <?php echo $total_price; ?>€</h1>
            <input id="shop-products" type="button" value="Realizar Pedido">
            <input id="delete-cart" type="button" value="Vaciar carro de compras">
        </div>
    </section>
    <?php
}
?>
<script src="./public/js/products.js"></script> 