<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PadelMania.com | Tienda de Padel online</title>
        <link rel="stylesheet" href="./public/css/component.css">
        <link rel="stylesheet" href="./public/css/style.css">
        <link rel="stylesheet" href="./public/css/header.css">
        <script src="./public/js/jquery-3.6.0.min.js" type="text/javascript"></script>
       
    </head>
    <body>
        <?php include_once __DIR__."./header.php"; ?>
        <main id="main-page">
            <section class="products">
                <?php include_once __DIR__."/../../controllers/product/controller_product.php"; ?>
            </section>
        </main>
        <script src="./public/js/products.js"></script>
    </body>
</html>