<?php

class ListadoVisitaProfesionalController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo


        require_once "models/VisitaTerrenoModel.php";
        $model_visita_terreno = new VisitaTerrenoModel();
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();



        //Llamar datos del modelo

        $datos_visita = $model_visita_terreno->getAll();
        $dato_asignacion = $model_asignacion->getAllByVisita($datosusuario['id_personal']);
        $datosusuario = $_SESSION['usuario'];
        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/visita/listado_visita_profesional.php";
        require_once "views/layout/footer.php";

    }

}