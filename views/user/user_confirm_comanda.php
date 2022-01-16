<?php
if ($linia_comandas == 'false') {
    ?> <h1>La cesta esta vacia.</h1> <?php
} else {
    ?> <h1>¿Estás seguro de que deseas realizar el siguiente pedido?</h1> 
    <p><b>ATENCIÓN</b>, una vez realizado el pedido, no se podrán hacer modificaciones </p> 
    <?php
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
                        <p>Precio: <?php echo $product_data['price']; ?>€</p>
                        <p class="cantidad_producto" id=<?php echo $linia_comanda['cantidad']; ?>>Cantidad: <?php echo $linia_comanda['cantidad']; ?></p>
                    </div>
                </section><?php
            }
            ?>
        </div>
        <div id="resum-cart">
            <h1>Total: <?php echo $total_price; ?>€</h1>
            <input class="button btn-cart" id="yes-confirm-compra" type="button" value="SI,comfirmar compra">
        </div>
    </section>
    <?php
}
?>
<script src="./public/js/products.js"></script> 