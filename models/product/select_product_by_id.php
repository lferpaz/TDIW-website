<?php

function select_product_by_id($connection, $id) {
    try {
        $query = $connection->prepare("SELECT * from productos WHERE Id = '$id'");
        $query->execute();
        $result = $query->fetchALL(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $result;
}
?>