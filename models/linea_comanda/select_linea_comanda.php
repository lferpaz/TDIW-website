<?php
    function select_linia_comanda($connection, $comanda_id, $producte_id) {
        try {
            $query = $connection->prepare("SELECT * FROM linea_de_comandas WHERE comanda_id = :comanda_id AND productos_id = :producte_id");
            $query->bindparam(':comanda_id', $comanda_id, PDO::PARAM_INT, 10);
            $query->bindparam(':producte_id', $producte_id, PDO::PARAM_INT, 10);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }
        return $result;
    }

?>