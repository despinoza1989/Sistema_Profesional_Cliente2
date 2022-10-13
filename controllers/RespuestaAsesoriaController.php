<?php

class RespuestaAsesoriaController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();
        require_once "models/RespuestaAsesoriaModel.php";
        $model_resp_asesoria = new RespuestaAsesoriaModel();
        require_once "models/TipoAsesoriaModel.php";
        $model_tipo_asesoria = new TipoAsesoriaModel();

        //Llamar datos del modelo

        if(isset($_POST["accion"])){
            $model_resp_asesoria->create($_POST);            
            return;
        }

        $datosusuariocliente = $_SESSION['usuarioCliente'];
        $datos_tipo_asesoria = $model_tipo_asesoria->getAll();


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asesoria/respuesta_asesoria.php";
        require_once "views/layout/footer.php";

    }



}