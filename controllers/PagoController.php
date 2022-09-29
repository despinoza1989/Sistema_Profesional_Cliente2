<?php

class PagoController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo
        
        require_once "models/ReporteAccidenteModel.php";
        $model_pago = new ReporteAccidenteModel();
        require_once "models/PlanServicioModel.php";
        $model_plan = new PlanServicioModel();
        require_once "models/TipoPagoModelo.php";
        $model_tipopago = new TipoPagoModelo();
        require_once "models/TipoDocumentoModel.php";
        $model_plan = new TipoDocumentoModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();

        //Llamar datos del modelo
        
        if(isset($_POST["accion"])){
            $model_accidente->create($_POST);            
            return;
        }
        
        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/pagos/pagos.php";
        require_once "views/layout/footer.php";

    }

}