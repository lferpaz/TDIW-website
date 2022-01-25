<?php foreach($products as $product) {
    $product['Id'] = htmlentities($product['Id'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $product['foto'] = htmlentities($product['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $product['nombre'] = htmlentities($product['nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $product['precio'] = $product['precio'];
    $product['descripcion'] = htmlentities($product['descripcion'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); 
    ?>
    <section id="<?php echo($product['Id']);?>" class="product-detaill">
        <img src="<?php echo $product['foto']; ?>" alt="<?php echo $product['nombre']; ?>">
        <h1 id="name"><?php echo $product['nombre']; ?></h1>
        <h3 id="price"><?php echo $product['precio']; ?> €</h3>
        <p><?php echo $product['descripcion']; ?></p>
        <input id="product_cart_quantity" type="number" name="quantity" value="1" min="1">
        <a id="button-add-trolley" class="button btn-add-cart">Añadir al carrito</a>
        
    </section>
<?php } ?>
<script src="./public/js/products.js"></script> 