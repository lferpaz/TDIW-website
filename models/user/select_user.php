<?php
    function select_user($connection, $user_mail) {
        try {
            $query = $connection->prepare("SELECT * FROM usuario WHERE email = :mail");
            $query->bindparam(':mail', $user_mail, PDO::PARAM_STR, 50);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return $result;
    }

?>