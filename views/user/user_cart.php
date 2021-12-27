<?php
//$product_data = ['id' => $id, 'name' => $name, 'price' => $price, 'description' => $description, 'photo' => $photo, 'category_id' => $category_id];
if ($linia_comandas == 'false') {
    ?> <h1>La cesta esta vacia.</h1> <?php
} else {
    $total_price = 0;
    foreach ($linia_comandas as $linia_comanda) {
        $total_price += $linia_comanda['precio'] * $linia_comanda['cantidad'];
        $_GET['id'] = $linia_comanda['productos_id'];
        include_once __DIR__. '/../../controllers/product/controller_get_data_product.php';
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