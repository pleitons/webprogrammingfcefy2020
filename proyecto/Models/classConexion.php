<?php
    class Conexion{
        //atributos privados
        private $host_name;
        private $user;
        private $pass;
        private $conex;

        //constructor
        function __construct($db_name){
            $this->host_name = $db_name;
            $this->user = 'root';
            $this->pass = null;
            $this->conexion();
        }

        public function conexion(){
            try{
                $this->conex = new PDO($this->host_name, $this->user,$this->pass);
                echo "Conexion correcta";

            } catch(PDOException $e){
                echo "Error". $e->getMessage();
            }
        }

        public function getConexion(){
            return $this->conex; 
        }
    }
//medida de seguridad: cualquier cosa andy lo explica si el profe pregunta...