<?php
class clsIngreso
{
    public static function Registro($conexion, $placa, $usuario ){
        try {
            $fecha = date("Y-m-d H:i:s");
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
            $query = $conexion->prepare("SELECT registro_ingreso.id, registro_ingreso.placa, registro_ingreso.fecha, registro_ingreso.usuario FROM registro_ingreso
             ORDER BY id DESC                            ");
            $query->execute();
            
                return $query->fetchAll();
            
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

}


?>
