<?php foreach($products as $product) {?>
    <section class="product-detaill">
        <img src="<?php echo $product['foto']; ?>" alt="<?php echo $product['nombre']; ?>">
        <h1><?php echo $product['nombre']; ?></h1>
        <h3><?php echo $product['precio']; ?> €</h3>
        <p><?php echo $product['descripcion']; ?></p>
        <a class="button">Añadir al carrito</a>
        
    </section>
<?php } ?>