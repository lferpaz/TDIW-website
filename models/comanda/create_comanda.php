<?php
    function create_comanda($connection, $date, $user_id) {
        try {
            $query = $connection->prepare("INSERT INTO comandas(data, usuario_id, importe_total, total_elementos) 
                VALUES(:date, :user_id, 0.0,0)");
            
            $query->bindparam(':date', $date, PDO::PARAM_STR, 19);
            $query->bindparam(':user_id', $user_id, PDO::PARAM_STR, 10);
            
            $query->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
        return true;
    }
?>