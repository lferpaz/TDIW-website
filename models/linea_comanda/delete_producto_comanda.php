<?php
function delete_producto_comanda($connection, $comanda,$productos) {
    try {
        $query = $connection->prepare("DELETE FROM  linea_de_comandas  WHERE comanda_id = :comanda AND productos_id=:productos");
        $query->bindparam(':comanda', $comanda, PDO::PARAM_INT, 10);
        $query->bindparam(':productos', $productos, PDO::PARAM_INT, 10);
        $query->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
    return true;
}
?>