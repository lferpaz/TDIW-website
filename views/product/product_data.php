<?php
foreach($products as $product) {
    $id = $product['Id'];
    $name = $product['nombre'];
    $price = $product['precio'];
    $description = $product['descripcion'];
    $photo = $product['foto'];
    $category_id = $product['categoria_id'];
}
$product_data = ['id' => $id, 'name' => $name, 'price' => $price, 'description' => $description, 
        'photo' => $photo, 'category_id' => $category_id];
?>