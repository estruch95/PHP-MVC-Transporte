<?php

    class CamionController {

        public function __construct(){
            require_once "models/camionesModel.php";
        }

        public function index(){
            
            $camiones = new Camiones_model();
            $data["titulo"] = "Lista de camiones existentes";
            $data["camiones"] = $camiones->getAll();

            require_once "views/camiones/camiones.php";

        }

        public function nuevoCamion(){

            $data["titulo"] = "Camiones";
            require_once "views/camiones/camiones_nuevo.php";

        }

        public function insertarCamion(){

            $matricula = $_POST['matricula'];
            $modelo = $_POST['modelo'];
            $potencia = $_POST['potencia'];
            $tipo = $_POST['tipo'];

            $camiones = new Camiones_model();
            $camiones->insert($matricula, $modelo, $potencia, $tipo);

            $data["titulo"] = "Camiones";
            $this->index();

        }

        public function modificaCamion($matricula){
            
            $camiones = new Camiones_model();
            $camion = $camiones->getOne($matricula);

            $data["id"] = $matricula;
            $data["titulo"] = "Camiones";
            $data["camion"] = $camion;
            
            require_once "views/camiones/camiones_modifica.php";

        }

        public function actualizaCamion(){
            
            $matricula = $_POST['matricula'];
            $modelo = $_POST['modelo'];
            $potencia = $_POST['potencia'];
            $tipo = $_POST['tipo'];

            $camiones = new Camiones_model();
            $camiones->update($matricula, $modelo, $potencia, $tipo);

            $data["titulo"] = "Camiones";
            $this->index();

        }

        public function eliminaCamion($matricula){

            $camiones = new Camiones_model();
            $camiones->delete($matricula);

            $data["titulo"] = "Camiones";
            $this->index();

        }


    }

?>