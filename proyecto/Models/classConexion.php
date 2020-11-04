<?php
    class Conexion{
        //atributos privados
        private $dsn;
        private $user; //root
        private $pass; // ""
        private $conex;

        //constructor
        function __construct($db_name = "gim", $hostName = "localhost"){
            $this->dsn = "/mysql:host=.$hostName.;dbname=.$db_name.";
            $this->user = 'root';
            $this->pass = null;
            $this->conexion();
        }
        //mysql:host=localhost;dbname=cms
        public function conexion(){
            try{
                $this->conex = new PDO($this->dsn, $this->user,$this->pass);
                echo "Conexion correcta";

            } catch(PDOException $e){
                echo "Error". $e->getMessage();
            }
        }

        public function getConexion(){
            return $this->conex; 
        }

    }