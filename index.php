<?php

if(!isset($_GET['action'])) {
    $_GET['action'] = '';
}

switch($_GET['action']) {
    case '':
        require __DIR__ . "/views/common/main.php";
        break;

    case 'login':
        require __DIR__ . "/views/common/login.php";
        break;

    case 'signup':
        require __DIR__ . "/views/common/signup.php";
        break;
    
    case 'shopping_cart':
        require __DIR__ . "/controllers/linea_comanda/controller_select_linea_comanda_by_id.php";
        break;

    case 'session':
        require __DIR__ . "/controllers/common/session.php";
        break;
    
    case 'get_product':
        require __DIR__ . "/controllers/product/controller_select_product.php";
        break;
    
    case 'load_category':
        require __DIR__ . "/controllers/category/controller_category.php";
        break;
    
    case 'create_comanda':
        require __DIR__ . "/controllers/comanda/controller_create_comanda.php";
        break;
    
    case 'select_comanda':
        require __DIR__ . "/controllers/comanda/controller_select_comanda.php";
        break;
    
    case 'update_comanda':
        require __DIR__ . "/controllers/comanda/controller_update_comanda.php";
        break;
    
    case 'select_linea_comanda':
        require __DIR__ . "/controllers/linea_comanda/controller_select_linea_comanda.php";
        break;
    
    case 'create_linea_comanda':
        require __DIR__ . "/controllers/linea_comanda/controller_create_linea_comanda.php";
        break;
    
    case 'update_linea_comanda':
        require __DIR__ . "/controllers/linea_comanda/controller_update_linea_comanda.php";
        break;

    case 'product':
        require __DIR__ . "/controllers/product/controller_product.php";
        break;

    case 'product_data':
        require __DIR__ . "/controllers/product/controller_get_data_product.php";
        break;
    
    default:
        require __DIR__ . "/views/common/main.php";
        break;
}

?>