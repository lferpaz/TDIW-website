<?php
if ($linia_comandas == 'false') {
    ?> <h1>La cesta esta vacia.</h1> <?php
} else {
    foreach ($linia_comandas as $linia_comanda) {
        include_once __DIR__. '/controller_select_product.php';
        
    }
}
?>