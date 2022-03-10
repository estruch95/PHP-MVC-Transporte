<?php

    require_once "config/config.php";
    require_once "config/routes.php";
    require_once "config/database.php";
    require_once "controllers/camionController.php";

    if(isset($_GET['c']))
    {
        $controller = cargarControlador($_GET['c']);

        if(isset($_GET['a']))
        {
            if(isset($_GET['id']))
            {
                cargarAccion($controller, $_GET['a'], $_GET['id']);
            }
            else
            {
                cargarAccion($controller, $_GET['a']);
            }
            
        } 
        else 
        {
            cargarAccion($controller, ACCION_PRINCIPAL);
        }

    } 
    else 
    {
        $controller = cargarControlador(CONTROLADOR_PRINCIPAL);
        $accionTmp = ACCION_PRINCIPAL;
        $controller->$accionTmp();    
    }


?>