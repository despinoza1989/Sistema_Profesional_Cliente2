<?php

class DetalleRespuestaAsesoriaController{
    function __construct(){
        //echo "esto funciona";
        $id_respuesta_asesoria = "";

        if(isset($_GET['id_respuesta_asesoria']) || !is_null($_GET['id_respuesta_asesoria'])){

            $id_respuesta_asesoria = $_GET['id_respuesta_asesoria'];

        }

        //Lo primero es llamar el modelo

        //require_once "models/PersonalModel.php";
        //$model_personal = new PersonalModel();
        //require_once "models/ClienteModel.php";
        //$model_cliente = new ClienteModel();

        // model respuesta asesoria *******
        require_once "models/RespuestaAsesoriaModel.php";
        $model_respuesta_asesoria = new RespuestaAsesoriaModel();

        //Llamar datos del modelo

        $datos_respuesta_asesoria = $model_respuesta_asesoria->getById($id_respuesta_asesoria);
        $datosusuariocliente = $_SESSION['usuarioCliente'];

        
        // ok $datos_personal = $model_personal->getAll();
        // ok $datosusuario = $_SESSION['usuario'];


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asesoria/detalle_respuesta_asesoria.php";
        require_once "views/layout/footer.php";

    }

}