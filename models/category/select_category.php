<?php

function select_category($connection) {
    try {
        $query = $connection->prepare("SELECT * FROM categoria");
        $query->execute();
        $result = $query->fetchALL(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $result;
}
?>