<?php

class DatosProfesionalController{
    function __construct(){
        //echo "esto funciona";

        $id_personal = "";

        if(isset($_GET['id_personal']) || !is_null($_GET['id_personal'])){

            $id_personal = $_GET['id_personal'];

        }
        //Lo primero es llamar el modelo
        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel();

        $datos_cliente = $model_personal->getById($id_personal);


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/pago/datos_profesional.php";
        require_once "views/layout/footer.php";
        
    }

}