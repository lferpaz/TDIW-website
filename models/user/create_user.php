<?php
    function create_user($connection, $user_id, $name, $direction, $poblacion, $cp, $phone, $mail, $password) {
        try {
            $query = $connection->prepare("INSERT INTO usuario VALUES('$user_id', '$name', '$direction', '$poblacion', '$cp', '$phone', '$mail', '$password')");
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
?>