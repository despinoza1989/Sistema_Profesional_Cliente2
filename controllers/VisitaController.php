<?php

class VisitaController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();

        //Llamar datos del modelo

        $datos_personal = $model_personal->getAll();
        $datos_cliente = $model_cliente->getAll();

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