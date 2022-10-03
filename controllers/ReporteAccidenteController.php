<?php

class ReporteAccidenteController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo
        
        require_once "models/ReporteAccidenteModel.php";
        $model_accidente = new ReporteAccidenteModel();
        
        //Llamar datos del modelo
        
        $datosusuariocliente = $_SESSION['usuarioCliente'];

        if(isset($_POST["accion"])){
            $model_accidente->create($_POST);            
            return;
        }
        
        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/accidente/reporte_accidente.php";
        require_once "views/layout/footer.php";

    }

}