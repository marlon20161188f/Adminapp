<?php
class clsGestor
{
    public static function Registro($conexion, $nombres,$apellidos,$descripcion ){
        try {
            $query = $conexion->prepare("INSERT INTO usuario( nombres, apellidos, descripcion) VALUES( :nombres, :apellidos, :descripcion)");
            $query->bindParam("nombres", $nombres, PDO::PARAM_STR);
            $query->bindParam("apellidos", $apellidos, PDO::PARAM_STR);
            $query->bindParam("descripcion", $descripcion, PDO::PARAM_STR);
            $query->execute();
            return $conexion->lastInsertId();
        } catch (PDOException $e) {
            echo($e->getMessage());
        }
    }

    public static function Listar($conexion){
        try {
            $query = $conexion->prepare("SELECT usuario.id, usuario.nombres, usuario.apellidos, usuario.correo, usuario.descripcion FROM usuario
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

    public static function Actualizar($conexion, $id, $nombres,$apellidos,$descripcion){
        try {
           
            $query = $conexion->prepare("UPDATE usuario INNER JOIN 
            tbltipo_usuario ON usuario.id_tipo_usuario = tbltipo_usuario.id
             SET usuario.nombres = :nombres,usuario.apellidos = :apellidos, tbltipo_usuario.descripcion = :descripcion
            WHERE usuario.id = :id");
            $query->bindParam("id", $id, PDO::PARAM_STR);
            $query->bindParam("nombres", $nombres, PDO::PARAM_STR);
            $query->bindParam("apellidos", $apellidos, PDO::PARAM_STR);
            $query->bindParam("descripcion", $descripcion, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    public static function Cambiar($conexion, $cambio){
        try {
           
            $query = $conexion->prepare("UPDATE usuario 
             SET usuario.id_estado = :cambio
            WHERE usuario.id = :id");
            $query->bindParam("id", $id, PDO::PARAM_STR);
            $query->bindParam("cambio", $cambio, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    public static function Validar($conexion,$nombres,$apellidos,$descripcion){
        try { 
            $query = $conexion->prepare("SELECT usuario.nombres FROM usuario INNER JOIN tbltipo_usuario ON usuario.id_tipo_usuario=tbltipo_usuario.id WHERE usuario.nombres = :nombres AND usuario.apellidos =:apellidos AND tbltipo_usuario.descripcion = :descripcion");
            $query->bindParam("nombres", $nombres, PDO::PARAM_STR);
            $query->bindParam("apellidos", $apellidos, PDO::PARAM_STR);
            $query->bindParam("descripcion", $descripcion, PDO::PARAM_STR);
            
            $query->execute();
            if($query->rowCount() > 0){
                return true;
            }
            return false;
        } catch (PDOException $e) {
            echo($e->getMessage());
        }
    }
    public static function Validarr($conexion,  $nombres,$correo,$descripcion){
        try {
            $query = $conexion->prepare("SELECT nombres FROM registro_vehicular WHERE nombres = :nombres");
            $query->bindParam("nombres", $nombres, PDO::PARAM_STR);
            
            $query->bindParam("correo", $correo, PDO::PARAM_STR);
            $query->bindParam("descripcion", $descripcion, PDO::PARAM_STR);
           
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
