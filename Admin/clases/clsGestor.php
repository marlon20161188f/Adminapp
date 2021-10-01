<?php
class clsGestor
{
    public static function Registro($conexion, $nombres,$apellidos,$correo,$id_tipo_usuario ){
        try {
            $query = $conexion->prepare("INSERT INTO usuario( nombres, apellidos, id_tipo_usuario) VALUES( :nombres, :apellidos, :id_tipo_usuario)");
            $query->bindParam("nombres", $nombres, PDO::PARAM_STR);
            $query->bindParam("apellidos", $apellidos, PDO::PARAM_STR);
            $query->bindParam("id_tipo_usuario", $id_tipo_usuario, PDO::PARAM_STR);
            $query->execute();
            return $conexion->lastInsertId();
        } catch (PDOException $e) {
            echo($e->getMessage());
        }
    }

    public static function Listar($conexion){
        try {
            $query = $conexion->prepare("SELECT usuario.id, usuario.nombres, usuario.apellidos, usuario.correo, usuario.id_tipo_usuario FROM usuario
                                         ");
            $query->execute();
            
                return $query->fetchAll();
            
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public static function Eliminar($conexion, $id){
        try {
            $query = $conexion->prepare("DELETE FROM usuario WHERE id = :id");
            $query->bindParam("id", $id, PDO::PARAM_STR);
        
            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public static function Actualizar($conexion, $id, $nombres,$apellidos,$correo,$id_tipo_usuario){
        try {
           
            $query = $conexion->prepare("UPDATE usuario SET nombres = :nombres, correo = :correo, id_tipo_usuario = :id_tipo_usuario WHERE id = :id");
            $query->bindParam("id", $id, PDO::PARAM_STR);
            $query->bindParam("nombres", $nombres, PDO::PARAM_STR);
           
            $query->bindParam("correo", $correo, PDO::PARAM_STR);
            $query->bindParam("id_tipo_usuario", $id_tipo_usuario, PDO::PARAM_STR);
            $query->bindParam("fecha", $fecha, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public static function Validar($conexion,$nombres,$apellidos,$correo,$id_tipo_usuario){
        try {
            $query = $conexion->prepare("SELECT nombres FROM usuario WHERE nombres = :nombres  AND correo = :correo AND id_tipo_usuario = :id_tipo_usuario AND fecha = :fecha");
            $query->bindParam("nombres", $nombres, PDO::PARAM_STR);
            
            $query->bindParam("correo", $correo, PDO::PARAM_STR);
            $query->bindParam("id_tipo_usuario", $id_tipo_usuario, PDO::PARAM_STR);
            
            $query->execute();
            if($query->rowCount() > 0){
                return true;
            }
            return false;
        } catch (PDOException $e) {
            echo($e->getMessage());
        }
    }
    public static function Validarr($conexion,  $nombres,$correo,$id_tipo_usuario){
        try {
            $query = $conexion->prepare("SELECT nombres FROM registro_vehicular WHERE nombres = :nombres");
            $query->bindParam("nombres", $nombres, PDO::PARAM_STR);
            
            $query->bindParam("correo", $correo, PDO::PARAM_STR);
            $query->bindParam("id_tipo_usuario", $id_tipo_usuario, PDO::PARAM_STR);
           
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
