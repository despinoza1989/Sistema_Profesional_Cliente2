<?php
include('sweetAlert.php');
class LoginController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

        //Llamar a la vista 

        require_once "views/layout/login/login.php";

    }

    public function validarCliente($usuario, $password){

        require_once "models/AutentificacionModel.php";

        $model= new AutentificacionModel();
        $respuestaCliente= $model->doLoginCliente($usuario, $password);


        if($respuestaCliente['isvalid']=='1'){

            $datosusuariocliente= $model->obtenerUsuarioCliente($respuestaCliente['id_cliente']);
            $_SESSION['usuarioCliente']=$datosusuariocliente;
            $_SESSION["activa"]=true;
            header("refresh: 1; url=index.php?view=home");
            
        }else{

            echo '<script>
            Swal.fire({
             icon: "error",
             title: "ERROR",
             text: "El usuario o la contraseña no son correctos. Favor intentar nuevamente!",
             showConfirmButton: true,
             confirmButtonText: "Cerrar"
             }).then(function(result){
                if(result.value){                   
                 window.location = "";
                }
             });
            </script>';
        }
    }

}