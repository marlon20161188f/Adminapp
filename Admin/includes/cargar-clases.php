<?php
    session_start(); //=> trabajar sessiones
    header('Content-Type: text/html; charset=UTF-8'); //=> documento muestro con tipo utf-8 => tildes y ñ
    define('CONTROLADOR', TRUE);
    require 'config/database.php'; //Clase de conexion
    require 'config/constantes.php'; //Constantes de la aplicacion
    require 'clases/clsProvedor.php'; // clase de vehiculo
    require 'clases/clsUsuario.php'; // clase de usuario
    require 'clases/clsEstado.php'; // clase de Estado
    require 'clases/clsPago.php'; // clase de pago
    require 'clases/clsEstablecimiento.php'; // clase de establecimiento
    require 'clases/clsConsulta.php'; // clase de establecimiento
    require 'clases/clsIngreso.php'; // clase de ingreso
    $usuario = clsUsuario::Obtener(Conexion::getInstancia(), $_SESSION['email']);
    // if($usuario->id_tipo_usuario == '3'){
    //     header('Location: https://admin-vehiculo.herokuapp.com/');
    // }
    //if(empty($_SESSION['administrador'])){
     //   header('Location: ../index.php');
    //}
    date_default_timezone_set('America/Lima'); //Asignando una el tiempo de Lima al servidor Apache

?>