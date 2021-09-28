<?php
class clsPago
{
    public static function Registro($conexion, $placa, $marca,$color,$estacionamiento,$fecha ){
        try {
            $query = $conexion->prepare("INSERT INTO registro_vehicular( placa, marca, color, estacionamiento, fecha) VALUES( :placa, :marca, :color, :estacionamiento, :fecha)");
            $query->bindParam("placa", $placa, PDO::PARAM_STR);
            $query->bindParam("marca", $marca, PDO::PARAM_STR);
            $query->bindParam("color", $color, PDO::PARAM_STR);
            $query->bindParam("estacionamiento", $estacionamiento, PDO::PARAM_STR);
            $query->bindParam("fecha", $fecha, PDO::PARAM_STR);
            $query->execute();
            return $conexion->lastInsertId();
        } catch (PDOException $e) {
            echo($e->getMessage());
        }
    }

    public static function Listar($conexion){
        try {
            $query = $conexion->prepare("SELECT registro_vehicular.id, registro_vehicular.placa, registro_vehicular.marca, registro_vehicular.color, registro_vehicular.estacionamiento, registro_vehicular.fecha FROM registro_vehicular
                                         ");
            $query->execute();
            
                return $query->fetchAll();
            
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public static function Eliminar($conexion, $id){
        try {
            $query = $conexion->prepare("DELETE FROM registro_vehicular WHERE id = :id");
            $query->bindParam("id", $id, PDO::PARAM_STR);
        
            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public static function Actualizar($conexion, $id, $placa, $marca,$color,$estacionamiento,$fecha){
        try {
            
            $query = $conexion->prepare("UPDATE registro_vehicular SET placa = :placa, marca = :marca, color = :color, estacionamiento = :estacionamiento, fecha = :fecha WHERE id = :id");
            $query->bindParam("id", $id, PDO::PARAM_STR);
            $query->bindParam("placa", $placa, PDO::PARAM_STR);
            $query->bindParam("marca", $marca, PDO::PARAM_STR);
            $query->bindParam("color", $color, PDO::PARAM_STR);
            $query->bindParam("estacionamiento", $estacionamiento, PDO::PARAM_STR);
            $query->bindParam("fecha", $fecha, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public static function Validar($conexion,  $placa, $marca,$color,$estacionamiento,$fecha){
        try {
            $query = $conexion->prepare("SELECT placa FROM registro_vehicular WHERE placa = :placa AND marca = :marca AND color = :color AND estacionamiento = :estacionamiento AND fecha = :fecha");
            $query->bindParam("placa", $placa, PDO::PARAM_STR);
            $query->bindParam("marca", $marca, PDO::PARAM_STR);
            $query->bindParam("color", $color, PDO::PARAM_STR);
            $query->bindParam("estacionamiento", $estacionamiento, PDO::PARAM_STR);
            $query->bindParam("fecha", $fecha, PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
                return true;
            }
            return false;
        } catch (PDOException $e) {
            echo($e->getMessage());
        }
    }
    public static function Validarr($conexion,  $placa, $marca,$color,$estacionamiento,$fecha){
        try {
            $query = $conexion->prepare("SELECT placa FROM registro_vehicular WHERE placa = :placa");
            $query->bindParam("placa", $placa, PDO::PARAM_STR);
            $query->bindParam("marca", $marca, PDO::PARAM_STR);
            $query->bindParam("color", $color, PDO::PARAM_STR);
            $query->bindParam("estacionamiento", $estacionamiento, PDO::PARAM_STR);
            $query->bindParam("fecha", $fecha, PDO::PARAM_STR);
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
