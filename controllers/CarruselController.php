<?php

class PersonalController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

        //Llamar a la vista 

        require_once "views/layout/carrusel/carrusel.php";

    }

    public function carrusel(){

        //Llamar a model del carrusel

        require_once "models/AutentificacionModel.php";

    }

}