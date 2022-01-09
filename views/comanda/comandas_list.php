<?php
if ($comandas == false) { echo ("false"); }
else {
    foreach($comandas as $comanda) {
        $comanda_id = $comanda['Id'];
        $comanda_data = $comanda['data'];
        $comanda_user_id = $comanda['usuario_id'];
        $total_elementos = $comanda['total_elementos'];
        $total_importe = $comanda['importe_total'];
        $cerrada = $comanda['cerrada'];
        
        $comanda_array = ['comanda_id' => $comanda_id, 'comanda_data' => $comanda_data, 
                'comanda_user_id' => $comanda_user_id, 'total_elementos' => $total_elementos, 
                'importe_total' => $total_importe, 'cerrada' => $cerrada];
        $comandas_array[] = $comanda_array;

    }
    $data = ['comandas' => $comandas_array];
    echo(json_encode($data));
}
?>