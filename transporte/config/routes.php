<?php

    function cargarControlador($controlador){

        $nombreControlador = ucwords($controlador)."Controller";
        $archivoControlador = 'controllers/'.ucwords($nombreControlador).'.php';

        if(!is_file($archivoControlador)){
        
            $archivoControlador = 'controllers/'.CONTROLADOR_PRINCIPAL.'Controller.php';
        }

        require_once $archivoControlador;
        $control = new $nombreControlador();
        
        return $control;

    }

    function cargarAccion($controlador, $accion, $id=null){

        if(isset($accion) && method_exists($controlador, $accion) ){

            if($id == null)
            {
                $controlador->$accion();
            }
            else
            {
                $controlador->$accion($id);
            }
        }
        else
        {
            $controlador->ACCION_PRINCIPAL();
        }

    }

?>