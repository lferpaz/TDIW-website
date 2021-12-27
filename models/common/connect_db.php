<?php

function connect_db() {
    $server = "localhost"; $user = "root"; $password = "";
    try{
        $connection = new PDO("mysql:host=$server;dbname=padelstore2;charset=UTF8", $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){ 
        echo "Error: " . $e->getMessage(); 
    }
    
    return($connection);
}

?>