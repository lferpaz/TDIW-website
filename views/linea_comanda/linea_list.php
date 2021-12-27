<?php
if ($linia_comandas == false) { echo ("false"); }
else {
    foreach($linia_comandas as $linia_comanda) {
        $linia_id = $linia_comanda['Id'];
        $comanda_id = $linia_comanda['comanda_id'];
        $product_id = $linia_comanda['productos_id'];
        $cantidad = $linia_comanda['cantidad'];
        $nombre = $linia_comanda['nombre'];
        $precio = $linia_comanda['precio'];
    }
    $data = ['linia_id' => $linia_id, 'comanda_id' => $comanda_id, 
            'product_id' => $product_id, 'cantidad' => $cantidad, 
            'nombre' => $nombre, 'precio' => $precio];
    echo(json_encode($data));
}
?>