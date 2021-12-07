<?php

if(!isset($_GET['action'])) {
    $_GET['action'] = '';
}

switch($_GET['action']) {
    case '':
        require __DIR__ . "/views/main.php";
        break;

    case 'login':
        require __DIR__ . "/views/login.php";
        break;

    case 'signup':
        require __DIR__ . "/views/signup.php";
        break;
    
    case 'shopping_cart':
        require __DIR__ . "/views/user_cart.php";
        break;
    
    case 'get_product':
        require __DIR__ . "/controllers/controller_select_product.php";
        break;
    
    default:
        require __DIR__ . "/views/main.php";
        break;
}

?>