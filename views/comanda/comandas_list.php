<?php
if ($comandas == false) { echo ("false"); }
else {
    foreach($comandas as $comanda) {
        $comanda_id = htmlentities($comanda['Id'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $comanda_data = htmlentities($comanda['data'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $comanda_user_id = htmlentities($comanda['usuario_id'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $total_elementos = $comanda['total_elementos'];
        $total_importe = $comanda['importe_total'];
        $cerrada = htmlentities($comanda['cerrada'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        
        $comanda_array = ['comanda_id' => $comanda_id, 'comanda_data' => $comanda_data, 
                'comanda_user_id' => $comanda_user_id, 'total_elementos' => $total_elementos, 
                'importe_total' => $total_importe, 'cerrada' => $cerrada];
        $comandas_array[] = $comanda_array;

    }
    $data = ['comandas' => $comandas_array];
    echo(json_encode($data));
}
?>