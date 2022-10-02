<?php

class CrearCapacitacionController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo
        require_once "models/RubroModel.php";
        $model_rubro = new RubroModel();
        require_once "models/CrearCapacitacionModel.php";
        $model_crear_capacitacion = new CrearCapacitacionModel();


        //Llamar datos del modelo
        if(isset($_POST["accion"])){
            $model_crear_capacitacion->create($_POST);            
            return;
        }

        $datos_rubro = $model_rubro->getAll();


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/capacitacion/crear_capacitacion.php";
        require_once "views/layout/footer.php";

    }

    public function crearcapacitacion(){

        //Llamar models del Personal
        
        require_once "models/CrearCapacitacionModel.php";
   
    }

}