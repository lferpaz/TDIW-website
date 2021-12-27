<?php
    function create_linea_comanda($connection, $comanda_id, $producto_id, $cantidad, $nombre_producto, $precio_producto) {
        try {
            $query = $connection->prepare("INSERT INTO linea_de_comandas (comanda_id, productos_id, cantidad, nombre, precio) 
                VALUES(:comanda_id, :producto_id, :cantidad, :producto_nombre, :producto_precio)");
            
            $query->bindparam(':comanda_id', $comanda_id, PDO::PARAM_INT, 10);
            $query->bindparam(':producto_id', $producto_id, PDO::PARAM_INT, 10);
            $query->bindparam(':cantidad', $cantidad, PDO::PARAM_INT, 50);
            $query->bindparam(':producto_nombre', $nombre_producto, PDO::PARAM_STR, 150);
            $query->bindparam(':producto_precio', $precio_producto, PDO::PARAM_STR, 10);
            
            $query->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
        return true;
    }
?>