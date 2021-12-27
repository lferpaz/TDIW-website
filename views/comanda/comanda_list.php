<?php
if ($comandas == false) { echo ("false"); }
else {
    foreach($comandas as $comanda) {
        $comanda_id = $comanda['Id'];
        $comanda_data = $comanda['data'];
        $comanda_user_id = $comanda['usuario_id'];
        $total_elementos = $comanda['total_elementos'];
        $total_importe = $comanda['importe_total'];
    }
    $data = ['comanda_id' => $comanda_id, 'comanda_data' => $comanda_data, 
            'comanda_user_id' => $comanda_user_id, 'total_elementos' => $total_elementos, 
            'importe_total' => $total_importe];
    echo(json_encode($data));
}
?>