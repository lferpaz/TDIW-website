<?php

function select_product($connection) {
    try {
        $query = $connection->prepare("SELECT * FROM productos");
        $query->execute();
        $result = $query->fetchALL(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $result;
}
?>