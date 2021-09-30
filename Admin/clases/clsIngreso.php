<?php
class clsIngreso
{
    public static function Registro($conexion, $placa, $usuario ){
        try {
            date_default_timezone_set("America/Lima");
            $fecha = date("Y-m-d ");
            $query = $conexion->prepare("INSERT INTO registro_ingreso( placa, fecha, usuario) VALUES( :placa, :fecha, :usuario)");
            $query->bindParam("placa", $placa, PDO::PARAM_STR);
            $query->bindParam("estacionamiento", $estacionamiento, PDO::PARAM_STR);
            $query->bindParam("fecha", $fecha, PDO::PARAM_STR);
            $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
            $query->execute();
            return $conexion->lastInsertId();
        } catch (PDOException $e) {
            echo($e->getMessage());
        }
    }

    public static function Listar($conexion){
        try {
            $query = $conexion->prepare("SELECT registro_vehicular.marca, registro_vehicular.color, registro_vehicular.estacionamiento, registro_ingreso.id, registro_ingreso.placa, registro_ingreso.fecha FROM registro_ingreso
            INNER JOIN registro_vehicular ON registro_ingreso.placa=registro_vehicular.placa
             ORDER BY registro_ingreso.fecha DESC ");
            $query->execute();
            
                return $query->fetchAll();
            
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

}


?>
