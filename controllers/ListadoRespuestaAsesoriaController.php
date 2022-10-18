<?php

class ListadoRespuestaAsesoriaController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/RespuestaAsesoriaModel.php";
        $model_respuesta = new RespuestaAsesoriaModel();

 
       

        //Llamar datos del modelo

        //$datos_respuesta_asesoria = $model_respuesta_asesoria->getAll();
        $datosusuariocliente = $_SESSION['usuarioCliente'];
        $datos_respuesta =  $model_respuesta->getAllByCliente($datosusuariocliente['id_cliente']);

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