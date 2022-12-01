<?php

class PagoController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/PagoServicioModel.php";
        $model_pago = new PagoServicioModel();

        //Llamar datos del modelo

       
        if(isset($_POST["accion"])){
            $model_pago->create($_POST);            
            return;
        }

        $datosusuariocliente = $_SESSION['usuarioCliente'];
        $datos_pago = $model_pago->getByIdCliente($datosusuariocliente['id_cliente']);

        
        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/pago/pagos.php";
        require_once "views/layout/footer.php";

    }

}