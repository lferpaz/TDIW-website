<?php foreach($products as $product){ 
    $product['Id'] = htmlentities($product['Id'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $product['foto'] = htmlentities($product['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $product['nombre'] = htmlentities($product['nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $product['precio'] = htmlentities($product['precio'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); 
    ?>
<div id="<?php echo($product['Id']);?>" class="product">
    <img src="<?php echo($product['foto']);?>">
    <p><?php echo($product['nombre']);?></p>
    <h3><?php echo($product['precio']);?>€</h3>
    <a class="btn btn-more">Ver más</a>
</div>
<?php } ?>

<script src="./public/js/products.js"> </script>