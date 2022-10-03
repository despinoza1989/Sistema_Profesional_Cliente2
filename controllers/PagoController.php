<?php

class PagoController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/PagoServicioModel.php";
        $model_pago = new PagoServicioModel();
        require_once "models/PlanServicioModel.php";
        $model_plan = new PlanServicioModel();
        require_once "models/TipoPagoModel.php";
        $model_tipopago = new TipoPagoModel();
        require_once "models/TipoDocumentoModel.php";
        $model_tipodocumento = new TipoDocumentoModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();      
        

        //Llamar datos del modelo

       
        if(isset($_POST["accion"])){
            $model_pago->create($_POST);            
            return;
        }

        $datosusuariocliente = $_SESSION['usuarioCliente'];
        $datos_montoplan = $model_plan->getMontoTotal('total');
        $datos_plan = $model_plan->getAll();
        $datos_tipopago = $model_tipopago->getAll();
        $datos_tipodocumento = $model_tipodocumento->getAll();
        
        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/pago/pagos.php";
        require_once "views/layout/footer.php";

    }

}