<?php

class CheckListController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/ChecklistModel.php";
        $model_check_list = new ChecklistModel();

        //Llamar datos del modelo

        if(isset($_POST["accion"])){
            $model_check_list->create($_POST);            
            return;
        }


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/checklist/check_list.php";
        require_once "views/layout/footer.php";

    }

}