<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PadelMania.com | Tienda de Padel online</title>
        <link rel="shortcut icon" href="/../public/images/logo_reduced.png">
        <link rel="stylesheet" href="/../public/css/component.css">
        <link rel="stylesheet" href="/../public/css/style.css">
        <link rel="stylesheet" href="/../public/css/header.css">
        <link rel="stylesheet" href="/../public/css/footer.css">
        <script src="/../public/js/jquery-3.6.0.min.js" type="text/javascript"></script>
       
    </head>
    <body>
        <?php include_once __DIR__."/../controllers/common/load_header.php"; ?>
        <main id="main-page">
            <section class="main-banner">
                <div class="banner-container">
                    <a href=""><img src="/../public/images/banner_1.jpg" alt="banner-1"></a>
                </div>
                <div class="banner-container">
                    <a href="https://play.google.com/store/apps/details?id=com.miguel.match_point"><img src="/../public/images/banner_2.png" alt="banner-2"></a>
                </div>
                <div class="banner-container">
                    <a href=""><img src="/../public/images/banner_3.jpg" alt="banner-3"></a>
                </div>
            </section>
            <section class="products">
                <?php include_once __DIR__ . "/../controllers/product/controller_product.php"; ?>
            </section>
        </main>
        <?php include_once __DIR__."/../controllers/common/load_footer.php"; ?>
        <script src="/../public/js/products.js"></script>
    </body>
</html>