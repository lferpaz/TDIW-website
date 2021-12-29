<?php
foreach($products as $product) {
    $id_product = $product['Id'];
    $name_product = $product['nombre'];
    $price_product = $product['precio'];
    $description_product = $product['descripcion'];
    $photo_product = $product['foto'];
    $category_id_product = $product['categoria_id'];
}
$product_data = ['id' => $id_product, 'name' => $name_product, 'price' => $price_product, 'description' => $description_product, 
        'photo' => $photo_product, 'category_id' => $category_id_product];
?>