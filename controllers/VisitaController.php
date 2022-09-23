<?php

class VisitaController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/visita/crear_visita.php";
        require_once "views/layout/footer.php";

    }

    public function crearvisita(){

        //Llamar models del Personal
        
        require_once "models/VisitaTerrenoModel.php";
   
    }

}