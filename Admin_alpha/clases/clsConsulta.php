<?php
    class clsConsulta{
        public static function Listar($conexion,$aKeyword){
             $asd="SELECT * FROM cursos WHERE lenguaje like '%" . $aKeyword[0] . "%' OR descripcion like '%" . $aKeyword[0] . "%'";
            for($i = 1; $i < count($aKeyword); $i++) {
                if(!empty($aKeyword[$i])) {
                    $asd .= " OR descripcion like '%" . $aKeyword[$i] . "%'";
                }
              }
            try {
                $query = $conexion->prepare($asd);
                $query->execute();
                    return $query;//$query->fetchAll();
                
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }

    }

?>