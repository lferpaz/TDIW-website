<?php
if ($comandas == false) { echo ("false"); }
else {
    foreach($comandas as $comanda) {
        $comanda_id = htmlentities($comanda['Id'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $comanda_data = htmlentities($comanda['data'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $comanda_user_id = htmlentities($comanda['usuario_id'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $total_elementos = htmlentities($comanda['total_elementos'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $total_importe = htmlentities($comanda['importe_total'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $cerrada = htmlentities($comanda['cerrada'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
    $data = ['comanda_id' => $comanda_id, 'comanda_data' => $comanda_data, 
            'comanda_user_id' => $comanda_user_id, 'total_elementos' => $total_elementos, 
            'importe_total' => $total_importe, 'cerrada' => $cerrada];
    echo(json_encode($data));
}
?>