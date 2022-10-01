<?php

class CheckListController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/checklist/check_list.php";
        require_once "views/layout/footer.php";

    }

    public function checklist(){

        //Llamar models del Personal
        
        require_once "models/ChecklistModel.php";
   
    }

}