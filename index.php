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

    case 'session':
        require __DIR__ . "/controllers/session.php";
        break;
    
    case 'get_product':
        require __DIR__ . "/controllers/controller_select_product.php";
        break;
    
    case 'load_category':
        require __DIR__ . "/controllers/controller_category.php";
        break;
    
    case 'create_comanda':
        require __DIR__ . "/controllers/controller_create_comanda.php";
        break;
    
    case 'select_comanda':
        require __DIR__ . "/controllers/controller_select_comanda.php";
        break;
    
    case 'update_comanda':
        require __DIR__ . "/controllers/controller_update_comanda.php";
        break;
    
    case 'select_linea_comanda':
        require __DIR__ . "/controllers/controller_select_linea_comanda.php";
        break;
    
    case 'create_linea_comanda':
        require __DIR__ . "/controllers/controller_create_linea_comanda.php";
        break;
    
    case 'update_linea_comanda':
        require __DIR__ . "/controllers/controller_update_linea_comanda.php";
        break;
    case 'product':
        require __DIR__ . "/controllers/controller_product.php";
        break;
    
    case 'add_to_cart':
        require __DIR__ . "/controllers/controller_add_to_cart.php";
        break;
    
    default:
        require __DIR__ . "/views/main.php";
        break;
}

?>