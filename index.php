<?php

if(!isset($_GET['action'])) {
    $_GET['action'] = '';
}

switch($_GET['action']) {
    //common
    case '':
        require __DIR__ . "/views/common/main.php";
        break;

    case 'login':
        require __DIR__ . "/views/common/login.php";
        break;

    case 'signup':
        require __DIR__ . "/views/common/signup.php";
        break;
        
    case 'session':
        require __DIR__ . "/controllers/common/session.php";
        break;
    
    case 'update_cart_number':
        require __DIR__ . "/controllers/common/cart.php";
        break;

    //user
    case 'select_user':
        require __DIR__ . "/controllers/user/controller_select_user.php";
        break;

    case 'update_user':
        require __DIR__ . "/controllers/user/controller_update_user.php";
        break;

    case 'get_user':
        require __DIR__ . "/controllers/user/controller_get_user_data.php";
        break;
    
    case 'create_user':
        require __DIR__ . "/controllers/user/controller_user_creation.php";
        break;
    
    case 'user_login':
        require __DIR__ . "/controllers/user/controller_user_login.php";
        break;

    //product
    case 'get_product':
        require __DIR__ . "/controllers/product/controller_select_product.php";
        break;
    
    case 'product':
        require __DIR__ . "/controllers/product/controller_product.php";
        break;

    case 'product_data':
        require __DIR__ . "/controllers/product/controller_get_data_product.php";
        break;
        
    case 'search':
        require __DIR__ . "/controllers/product/controller_find_product.php";
        break;
    
    //category    
    case 'load_category':
        require __DIR__ . "/controllers/category/controller_category.php";
        break;
    
    //comanda
    case 'create_comanda':
        require __DIR__ . "/controllers/comanda/controller_create_comanda.php";
        break;
    
    case 'select_comanda':
        require __DIR__ . "/controllers/comanda/controller_select_comanda.php";
        break;

    case 'confirm_comanda':
        require __DIR__ . "/controllers/comanda/controller_confirm_comanda.php";
        break;
    
    case 'update_comanda':
        require __DIR__ . "/controllers/comanda/controller_update_comanda.php";
        break;

    case 'delete_comanda':
        require __DIR__ . "/controllers/comanda/controller_delete_comanda.php";
        break;

    case 'delete_producto_comanda':
        require __DIR__ . "/controllers/linea_comanda/controller_delete_producto_comanda.php";
        break;
    
    case 'user_confirm':
        require __DIR__ . "/controllers/comanda/controller_confirmated_comanda.php";
        break;
    
    //linea comanda
    case 'shopping_cart':
            require __DIR__ . "/controllers/linea_comanda/controller_select_linea_comanda_by_id.php";
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

    default:
        require __DIR__ . "/views/common/main.php";
        break;
}

?>