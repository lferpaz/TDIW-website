<?php
foreach($products as $product) {
    
    $id_product = htmlentities($product['Id'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $name_product = htmlentities($product['nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $price_product = $product['precio'];
    $description_product = htmlentities($product['descripcion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $photo_product = htmlentities($product['foto'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $category_id_product = htmlentities($product['categoria_id'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
$product_data = ['id' => $id_product, 'name' => $name_product, 'price' => $price_product, 'description' => $description_product, 
        'photo' => $photo_product, 'category_id' => $category_id_product];
?>