<?php

class DetalleRespuestaAsesoriaController{
    function __construct(){
        //echo "esto funciona";
       $id_respuesta_asesoria = "";

   //     if(isset($_GET['id_respuesta_asesoria']) || !is_null($_GET['id_respuesta_asesoria'])){

   //         $id_respuesta_asesoria = $_GET['id_respuesta_asesoria'];

   //     }

        //Lo primero es llamar el modelo

        require_once "models/RespuestaAsesoriaModel.php";
        $model_respuesta_asesoria = new RespuestaAsesoriaModel();

        //Llamar datos del modelo
        
      //  if(isset($_POST["accion"])){
      //      $model_respuesta_asesoria->create($_POST);            
      //      return;
      //  }

        //$datos_respuesta_asesoria = $model_respuesta_asesoria->getById($id_respuesta_asesoria);
        //$datosusuariocliente = $_SESSION['usuarioCliente'];
          $datosusuariocliente = $_SESSION['usuarioCliente'];
          $datos_respuesta_asesoria = $model_respuesta_asesoria->getById($id_respuesta_asesoria);



      //    $datosusuario = $_SESSION['usuario'];
      //    $datos_respuesta_asesoria = $model_respuesta_asesoria->getById($id_respuesta_asesoria);

 //       $datosusuariocliente = $_SESSION['usuarioCliente'];
//        $datos_respuesta_asesoria = $model_respuesta_asesoria->getById($id_respuesta_asesoria);


        // ok $datos_personal = $model_personal->getAll();
        // ok $datosusuario = $_SESSION['usuario'];


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asesoria/detalle_respuesta_asesoria.php";
        require_once "views/layout/footer.php";

    }

}