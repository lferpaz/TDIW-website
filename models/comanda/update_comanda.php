<?php
function update_comanda($connection, $comanda_id, $total_elementos, $total_importe) {
    try {
        $query = $connection->prepare("UPDATE comandas SET total_elementos = :total_elementos, importe_total = :total_importe WHERE id = :comanda_id");
        $query->bindparam(':comanda_id', $comanda_id, PDO::PARAM_INT, 10);
        $query->bindparam(':total_elementos', $total_elementos, PDO::PARAM_INT, 10);
        $query->bindparam(':total_importe', $total_importe, PDO::PARAM_STR, 10);
        $query->execute();
        return true;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;

?>