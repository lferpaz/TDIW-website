<?php
if ($linia_comandas == 'false') {
    ?> <h1>La cesta esta vacia.</h1> <?php
} else {
    $total_price = 0;
    foreach ($linia_comandas as $linia_comanda) {
        $total_price += $linia_comanda['precio'] * $linia_comanda['cantidad'];
        $_GET['id'] = $linia_comanda['productos_id'];
        $_GET['action'] = 'product_data';
        include __DIR__. '/../../index.php';
        ?><section class="product_cart">
            <div class="product_cart_image">
                <img src="<?php echo $product_data['photo']; ?>" alt="<?php echo $product_data['name']; ?>">
            </div>
            <div class="product_cart_info">
                <h2><?php echo $product_data['name']; ?></h2>
                <p><?php echo $product_data['description']; ?></p>
                <p>Precio: <?php echo $product_data['price']; ?>€</p>
                <p>Cantidad: <?php echo $linia_comanda['cantidad']; ?></p>
            </div>
        </section><?php
    }
    ?>
    <h1>Total: <?php echo $total_price; ?>€</h1>
    <?php
}
?>