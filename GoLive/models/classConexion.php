<?php
    class Conexion{
        //atributos privados
        private $dsn;
        private $user; //root
        private $pass; // ""
        private $conex;

        //constructor
        function __construct($db_name = "golive", $hostName = "localhost"){
            $this->dsn = "/mysql:host=.$hostName.;dbname=.$db_name.";
            $this->user = 'root';
            $this->pass = null;
            $this->conexion();
        }
        //mysql:host=localhost;dbname=cms
        public function conexion(){
            try{ //El objeto que lo invoca
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