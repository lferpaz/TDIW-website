<?php

function find_product($connection, $text) {
    try {
        $query = $connection->prepare("SELECT * from productos WHERE nombre like :text");
        $query->bindparam(':text', $text, PDO::PARAM_STR, 100);
        $query->execute();
        $result = $query->fetchALL(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $result;
}
?>