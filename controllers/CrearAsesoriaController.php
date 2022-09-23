<?php

class CrearAsesoriaController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asesoria/crear_asesoria.php";
        require_once "views/layout/footer.php";

    }

    public function crearasesoria(){

        //Llamar models del Personal
        
        require_once "models/SolicitudAsesoriaModel.php";
   
    }

}