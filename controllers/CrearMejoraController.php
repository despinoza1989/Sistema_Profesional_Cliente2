<?php

class CrearMejoraController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/mejora/crear_mejora.php";
        require_once "views/layout/footer.php";

    }

    public function crearmejora(){

        //Llamar models del Personal
        
        require_once "models/MejoraModel.php";
   
    }

}