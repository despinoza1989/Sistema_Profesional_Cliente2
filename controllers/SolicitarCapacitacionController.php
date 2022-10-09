<?php

class SolicitarCapacitacionController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/SolicitudCapacitacionModel.php";
        $model_solicitud_capacitacion = new SolicitudCapacitacionModel();

        //Llamar datos del modelo
        if(isset($_POST["accion"])){
            $model_solicitud_capacitacion->create($_POST);            
            return;
        }

        
        $datosusuario = $_SESSION['usuario'];

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/capacitacion/solicitud_capacitacion.php";
        require_once "views/layout/footer.php";

    }

}