<?php

function select_product_by_type($connection, $type) {
    try {
        $query = $connection->prepare("SELECT * from productos WHERE categoria_id = :categoria");
        $query->bindparam(':categoria', $type, PDO::PARAM_INT, 10);
        $query->execute();
        $result = $query->fetchALL(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $result;
}
?>