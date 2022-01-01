<?php
function delete_comanda($connection, $comanda_id) {
    try {
        $query = $connection->prepare("DELETE FROM  comandas  WHERE Id = :comanda_id");
        $query->bindparam(':comanda_id', $comanda_id, PDO::PARAM_INT, 10);
        $query->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
    return true;
}
?>