<?php
class clsProvedor
{
    public static function Registro($conexion, $provedor){
        try {
            $query = $conexion->prepare("INSERT INTO provedor(provedor) VALUES(:provedor)");
            $query->bindParam("provedor", $provedor, PDO::PARAM_STR);
            $query->execute();
            return $conexion->lastInsertId();
        } catch (PDOException $e) {
            echo($e->getMessage());
        }
    }

    public static function Listar($conexion){
        try {
            $query = $conexion->prepare("SELECT provedor.id, provedor.provedor, provedor.id_provedor FROM provedor");
            $query->execute();
            if($query->rowCount() > 0){
                return $query->fetchAll();
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public static function Eliminar($conexion, $id){
        try {
            $query = $conexion->prepare("DELETE FROM provedor WHERE id = :id");
            $query->bindParam("id", $id, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public static function Actualizar($conexion, $id, $provedor, $id_provedor){
        try {
            $query = $conexion->prepare("UPDATE provedor SET provedor = :provedor, id_provedor = :id_provedor WHERE id = :id");
            $query->bindParam("id", $id, PDO::PARAM_STR);
            $query->bindParam("provedor", $provedor, PDO::PARAM_STR);
            $query->bindParam("id_provedor", $id_provedor, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public static function Validar($conexion, $provedor){
        try {
            $query = $conexion->prepare("SELECT provedor FROM provedor WHERE provedor = :provedor");
            $query->bindParam("provedor", $provedor, PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
                return true;
            }
            return false;
        } catch (PDOException $e) {
            echo($e->getMessage());
        }
    }



}


?>