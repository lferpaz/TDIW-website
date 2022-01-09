<?php 
foreach($comandas as $comanda) {
    $total_price = 0;
    $_GET['comanda_id'] = $comanda['Id'];
    $_GET['variant'] = 0;
    $_GET['action'] = 'shopping_cart';
    include __DIR__. '/../../index.php';
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
                        <p class="precio_producto"> Precio: <?php echo $product_data['price']; ?>€</p>
                        <p class="cantidad_producto"> Cantidad: <?php echo $linia_comanda['cantidad']; ?></p>
                    </div>
                </section><?php
            }?>
        </div>
        <div id="resum-cart">
            <h1>Total: <?php echo $total_price; ?>€</h1>
            <h1>Fecha de compra: <?php echo $comanda['data']; ?></h1>
        </div>
    </section>
    <?php if (count($comandas) > 1) { ?>
        <div class="separador sp-header"></div>
    <?php }
}
?>