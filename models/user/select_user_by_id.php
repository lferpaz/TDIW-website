<?php
    function select_user_by_id($connection, $id) {
        try {
            $query = $connection->prepare("SELECT * FROM usuario WHERE Id = :id");
            $query->bindparam(':id', $id, PDO::PARAM_INT, 10);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return $result;
    }

?>