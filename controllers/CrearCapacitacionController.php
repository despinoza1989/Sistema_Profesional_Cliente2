<?php

class CrearCapacitacionController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

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