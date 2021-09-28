<?php
    class clsEstado {
        public static function ListarActivo($conexion){
            try {
                $query = $conexion->prepare("SELECT id, provedor FROM provedor WHERE id IN (1,2)");
                $query->execute();
                if($query->rowCount() > 0){
                    return $query->fetchAll();
                }
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }

        public static function ListarPedido($conexion){
            try {
                $query = $conexion->prepare("SELECT id, provedor FROM provedor WHERE id NOT IN (1,2)");
                $query->execute();
                if($query->rowCount() > 0){
                    return $query->fetchAll();
                }
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }
    
    }
?>