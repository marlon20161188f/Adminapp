<?php
    class clsEstablecimiento {
        public static function Registro($conexion, $nombre, $foto, $direccion, $telefono, $horario, $monto, $tiempo){
            try {
                $query = $conexion->prepare("INSERT INTO productos(nombre, foto, direccion, telefono, horario, monto_minimo, tiempo_entrega) VALUES(:nombre, :foto, :direccion, :telefono, :horario,:monto, :tiempo)");
                $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
                $query->bindParam("foto", $foto, PDO::PARAM_STR);
                $query->bindParam("direccion", $direccion, PDO::PARAM_STR);
                $query->bindParam("telefono", $telefono, PDO::PARAM_STR);
                $query->bindParam("horario", $horario, PDO::PARAM_STR);
                $query->bindParam("monto", $monto, PDO::PARAM_STR);
                $query->bindParam("tiempo", $tiempo, PDO::PARAM_STR);
                $query->execute();
                return $conexion->lastInsertId();
            } catch (PDOException $e) {
                echo($e->getMessage());
            }
        }

        public static function Listar($conexion){
            try {
                $query = $conexion->prepare('SELECT A.id, A.nombre, A.foto, A.telefono, A.direccion, A.horario, A.monto_minimo, A.tiempo_entrega, B.provedor FROM productos A INNER JOIN provedor B ON B.id = A.id_provedor');
                $query->execute();
                if($query->rowCount() > 0){
                    return $query->fetchAll();
                }
            } catch (PDOException $e) {
                echo($e->getMessage());
            }
        }

        public static function Actualizar($conexion, $id, $nombre, $foto, $direccion, $telefono, $horario, $monto, $tiempo){
            try {
                $fecha = date("Y-m-d H:i:s");
                $query = $conexion->prepare("UPDATE productos SET nombre = :nombre, foto = :foto, direccion = :direccion, telefono = :telefono, horario = :horario, monto_minimo = :monto, tiempo_entrega = :tiempo, fecha_modificacion = :fecha WHERE id = :id");
                $query->bindParam("id", $id, PDO::PARAM_STR);
                $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
                $query->bindParam("foto", $foto, PDO::PARAM_STR);
                $query->bindParam("direccion", $direccion, PDO::PARAM_STR);
                $query->bindParam("telefono", $telefono, PDO::PARAM_STR);
                $query->bindParam("horario", $horario, PDO::PARAM_STR);
                $query->bindParam("monto", $monto, PDO::PARAM_STR);
                $query->bindParam("tiempo", $tiempo, PDO::PARAM_STR);
                $query->bindParam("fecha", $fecha, PDO::PARAM_STR);
                $query->execute();
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }

        public static function Eliminar($conexion, $id){
            try {
                $fecha = date("Y-m-d H:i:s");
                $query = $conexion->prepare("UPDATE productos SET id_provedor = 2, fecha_modificacion = :fecha WHERE id = :id");
                $query->bindParam("id", $id, PDO::PARAM_STR);
                $query->bindParam("fecha", $fecha, PDO::PARAM_STR);
                $query->execute();
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }


        public static function Validar($conexion, $nombre, $direccion, $telefono, $horario, $monto, $tiempo){
            try {
                $query = $conexion->prepare("SELECT nombre FROM productos WHERE nombre = :nombre AND direccion = :direccion AND telefono = :telefono AND horario = :horario AND monto_minimo = :monto AND tiempo_entrega = :tiempo");
                $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
                $query->bindParam("direccion", $direccion, PDO::PARAM_STR);
                $query->bindParam("telefono", $telefono, PDO::PARAM_STR);
                $query->bindParam("horario", $horario, PDO::PARAM_STR);
                $query->bindParam("monto", $monto, PDO::PARAM_STR);
                $query->bindParam("tiempo", $tiempo, PDO::PARAM_STR);
                $query->execute();
                if($query->rowCount() > 0){
                    return true;
                }
                return false;
            } catch (PDOException $e) {
                echo($e->getMessage());
            }
        }

        public static function ObtenerUltimoID($conexion){
            try {
                $query = $conexion->prepare("SELECT id FROM productos ORDER BY id DESC LIMIT 1");
                $query->execute();
                if($query->rowCount() > 0){
                    return $query->fetch(PDO::FETCH_OBJ);
                }
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }

        





    }
?>