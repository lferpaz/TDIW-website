<?php
    function select_comanda($connection, $user_id) {
        try {
            $query = $connection->prepare("SELECT * FROM comandas WHERE usuario_id = :user_id AND cerrada = 0");
            $query->bindparam(':user_id', $user_id, PDO::PARAM_INT, 10);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }
        return $result;
    }

?>