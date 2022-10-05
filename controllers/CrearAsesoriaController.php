<?php

class CrearAsesoriaController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/RubroModel.php";
        $model_rubro = new RubroModel();

        require_once "models/ClienteModel.php";
        $model_rol = new ClienteModel();

        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();   

        require_once "models/SolicitudAsesoriaModel.php";
        $model_sol_asesoria = new SolicitudAsesoriaModel();

        require_once "models/TipoAsesoriaModel.php";
        $model_tipo_asesoria = new TipoAsesoriaModel();

        //Llamar datos del modelo

        if(isset($_POST["accion"])){
            $model_sol_asesoria->create($_POST);            
            return;
        }

        $datos_cliente =  $model_cliente->getAll();
        $datos_rubro = $model_rubro->getAll();
        $datos_rol = $model_rol->getAll();
        $datos_tipo_asesoria = $model_tipo_asesoria->getAll();
       // $datos_sol_asesoria = $model_sol_asesoria->getAll();
       // $model_sol_asesoria = $model_sol_asesoria->getAll();



        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asesoria/crear_asesoria.php";
        require_once "views/layout/footer.php";

    }



}