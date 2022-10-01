<?php

class RespuestaAsesoriaController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/RubroModel.php";
        $model_rubro = new RubroModel();


        require_once "models/ClienteModel.php";
        $model_rol = new ClienteModel();


        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();


        require_once "models/RespuestaAsesoriaModel.php";
        $model_resp_asesoria = new RespuestaAsesoriaModel();

        //Llamar datos del modelo

        if(isset($_POST["accion"])){
            $model_resp_asesoria->create($_POST);            
            return;
        }

        $datos_cliente =  $model_cliente->getAll();
        $datos_rubro = $model_rubro->getAll();
        $datos_rol = $model_rol->getAll();
       // $datos_sol_asesoria = $model_sol_asesoria->getAll();
       // $model_sol_asesoria = $model_sol_asesoria->getAll();



        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asesoria/respuesta_asesoria.php";
        require_once "views/layout/footer.php";

    }



}