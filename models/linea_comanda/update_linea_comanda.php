<?php
function update_linea_comanda($connection, $comanda_id, $cantidad, $product_id) {
    try {
        $query = $connection->prepare("UPDATE linea_de_comandas SET cantidad = :cantidad WHERE comanda_id  = :comanda_id AND productos_id  = :product_id");
        $query->bindparam(':comanda_id', $comanda_id, PDO::PARAM_INT, 10);
        $query->bindparam(':cantidad', $cantidad, PDO::PARAM_INT, 50);
        $query->bindparam(':product_id', $product_id, PDO::PARAM_INT, 10);
        $query->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
    return true;
}
?>