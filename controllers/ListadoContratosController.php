<?php

class ListadoContratosController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo


        require_once "models/ContratoModel.php";
        $model_contrato = new ContratoModel();

        //Llamar datos del modelo
        $datosusuario = $_SESSION['usuarioCliente'];
        $datos_contrato = $model_contrato->getByIdCliente($datosusuario['id_cliente']);


        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/pago/listado_contratos.php";
        require_once "views/layout/footer.php";

    }

}