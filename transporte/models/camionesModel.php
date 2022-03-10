<?php

    class Camiones_model {

        private $db;
        private $camiones;
        
        public function __construct(){

            $this->db = Conectar::conexion();
            $this->camiones = array();

        }

        public function getAll(){

            $sql = "SELECT * FROM CAMION;";
            $resultado = $this->db->query($sql);
            
            while($fila = $resultado->fetch_assoc()){
                
                $this->camiones[] = $fila;

            }

            return $this->camiones;
        } 

        public function getOne($matricula){

            $sql = "SELECT * FROM CAMION WHERE matricula = '$matricula' LIMIT 1;";
            $resultado = $this->db->query($sql);
            $camion = $resultado->fetch_assoc();
            //print_r($camion);
            
            return $camion;
        } 
        
        public function insert($matricula, $modelo, $potencia, $tipo){

            $sql = "INSERT INTO CAMION (matricula, modelo, potencia, tipo) VALUES ('$matricula', '$modelo', '$potencia', '$tipo');";
            $resultado = $this->db->query($sql);
            
        }

        public function update($matricula, $modelo, $potencia, $tipo){

            echo 
            $sql = "UPDATE CAMION SET modelo = '$modelo', potencia = '$potencia', tipo = '$tipo' WHERE matricula = '$matricula';";
            $resultado = $this->db->query($sql);
            
        }

        public function delete($matricula){

            $sql = "DELETE FROM CAMION WHERE matricula = '$matricula';";
            $resultado = $this->db->query($sql);
            
        }


    }

?>