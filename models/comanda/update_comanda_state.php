<?php
function update_comanda_state($connection, $comanda_id, $state) {
    try {
        $query = $connection->prepare("UPDATE comandas SET cerrada = :state WHERE Id = :comanda_id");
        $query->bindparam(':comanda_id', $comanda_id, PDO::PARAM_INT, 10);
        $query->bindparam(':state', $state, PDO::PARAM_INT, 1);
        $query->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
    return true;
}
?>