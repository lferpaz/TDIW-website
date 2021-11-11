<?php
    function create_user($connection, $user_id, $username, $name, $lastname, $mail, $phone, $password) {
        try {
            $query = $connection->prepare("INSERT INTO usuario VALUES('$user_id', '$username', '$password', '$name', '$lastname', '$mail', '$phone')");
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
?>