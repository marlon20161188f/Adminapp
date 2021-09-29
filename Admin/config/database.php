<?php
    if(!defined('CONTROLADOR'))
    exit;

    class Conexion {
        private $tipo_de_base = 'mysql';
        private $host = 'b7nvpy1vtadduxzlqosv-mysql.services.clever-cloud.com';
        private $nombre_de_base = 'b7nvpy1vtadduxzlqosv';
        private $usuario = 'ulcoechpsy7vemc6';
        private $contrasena = '7LovxxKNZy2QYFFlvuSB';
        private static $instancia = null;

        private function __construct(){
            try {
                self::$instancia = new PDO($this->tipo_de_base . ':host=' . $this->host . ';dbname=' . $this->nombre_de_base, $this->usuario, $this->contrasena);
            } catch (PDOException $e) {
                echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
                exit;
            }
        }

        public static function getInstancia(){
            if(!self::$instancia){
                new self();
            }
            return self::$instancia;
        }

        public static function cerrar(){
            self::$instancia = null;
        }
    }
?>