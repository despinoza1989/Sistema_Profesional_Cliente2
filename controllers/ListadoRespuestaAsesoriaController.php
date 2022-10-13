<?php

class ListadoRespuestaAsesoriaController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel();

        require_once "models/TipoAsesoriaModel.php";
        $model_tipo_asesoria = new TipoAsesoriaModel();
       

        //Llamar datos del modelo

        //$datos_respuesta_asesoria = $model_respuesta_asesoria->getAll();
        $datos_personal = $model_personal->getAll();
        $datos_tipo_asesoria = $model_tipo_asesoria->getAll(); 

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asesoria/listado_respuesta_asesoria.php";
        require_once "views/layout/footer.php";

    }

    public function registropersonal(){

        //Llamar models del Personal
        
        require_once "models/AutentificacionModel.php";
   
    }

}