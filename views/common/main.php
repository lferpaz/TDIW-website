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
        <link rel="stylesheet" href="./public/css/footer.css">
        <script src="./public/js/jquery-3.6.0.min.js" type="text/javascript"></script>
       
    </head>
    <body>
        <?php include_once __DIR__."./header.php"; ?>
        <main id="main-page">
            <section class="products">
                <?php 
                $_GET['action'] = 'product';
                include __DIR__."/../../index.php"; ?>
            </section>
        </main>
        <?php include_once __DIR__."./footer.php"; ?>
        <script src="./public/js/products.js"></script>
    </body>
</html>