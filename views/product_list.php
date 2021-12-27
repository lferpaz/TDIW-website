<?php foreach($products as $product){ ?>
<div id="<?php echo($product['Id']);?>" class="product">
    <img src="<?php echo($product['foto']);?>">
    <p><?php echo($product['nombre']);?></p>
    <h3><?php echo($product['precio']);?>€</h3>
    <a class="btn btn-more">Ver mas</a>
</div>
<?php } ?>

<script src="./public/js/products.js"> </script>