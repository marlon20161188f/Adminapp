<?php
    session_start();
    header('Content-Type: text/html; charset=UTF-8');
    define('CONTROLADOR', TRUE);
    require '../config/database.php';
    require '../clases/clsProvedor.php';
    if(isset($_POST['option'])){
        if($_POST['option'] == 'C'){
            $validar = clsProvedor::Validar(Conexion::getInstancia(), $_POST['descripcion']);
    
            if($validar == true){
                echo json_encode(array('success' => 2));
            }else{
                $registro = clsProvedor::Registro(Conexion::getInstancia(), $_POST['descripcion']);
                if($registro > 0){
                    echo json_encode(array('success' => 1));
                }else{
                    echo json_encode(array('success' => 0));
                }
            } 
        }
    
    
        if($_POST['option'] == 'U'){
            $validar = clsProvedor::Validar(Conexion::getInstancia(), $_POST['descripcion']);
    
            if($validar == true){
                echo json_encode(array('success' => 2));
            }else{
                $actualizar = clsProvedor::Actualizar(Conexion::getInstancia(), $_POST['id'], $_POST['descripcion'], $_POST['id_provedor']);
                echo json_encode(array('success' => 1));
            } 
        }
    
        if($_POST['option'] == 'D'){
            $eliminar = clsProvedor::Eliminar(Conexion::getInstancia(), $_POST['id']);
            echo json_encode(array('success' => 1));
        }
    
    
        if($_POST['option'] == 'R'){
            $listar = clsProvedor::Listar(Conexion::getInstancia());
                echo json_encode(array('data' => $listar));  
        }
    }
    
    
    

?>