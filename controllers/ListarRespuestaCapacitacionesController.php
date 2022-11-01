<?php

class ListarRespuestaCapacitacionesController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo


        require_once "models/CrearCapacitacionModel.php";
        $model_capacitacion = new CrearCapacitacionModel();

        //Llamar datos del modelo

        $datosusuariocliente = $_SESSION['usuarioCliente'];
        $datos_capacitacion = $model_capacitacion->getByCapacitacionCliente($datosusuariocliente['id_cliente']);


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/capacitacion/listado_respuesta_capacitacion.php";
        require_once "views/layout/footer.php";

    }

}