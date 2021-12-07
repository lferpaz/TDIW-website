<?php
    function select_comanda($connection, $user_id) {
        try {
            $query = $connection->prepare("SELECT * FROM comandas WHERE usuario_id = :user_id");
            $query->bindparam(':user_id', $user_id, PDO::PARAM_STR, 10);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return $result;
    }

?>