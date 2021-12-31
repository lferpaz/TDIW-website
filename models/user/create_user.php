<?php
    function create_user($connection, $user_id, $name, $direction, $poblacion, $cp, $phone, $mail, $password, $photo) {
        try {
            $query = $connection->prepare("INSERT INTO usuario VALUES(:id, :name, :direction, :poblacion, :cp, :phone, :mail, :password, :photo)");
            
            $query->bindparam(':id', $user_id, PDO::PARAM_INT, 10);
            $query->bindparam(':name', $name, PDO::PARAM_STR, 50);
            $query->bindparam(':direction', $direction, PDO::PARAM_STR, 150);
            $query->bindparam(':poblacion', $poblacion, PDO::PARAM_STR, 100);
            $query->bindparam(':cp', $cp, PDO::PARAM_STR, 5);
            $query->bindparam(':phone', $phone, PDO::PARAM_STR, 9);
            $query->bindparam(':mail', $mail, PDO::PARAM_STR, 50);
            $query->bindparam(':password', $password, PDO::PARAM_STR, 100);
            $query->bindparam(':photo', $photo, PDO::PARAM_STR, 100);
            
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
?>