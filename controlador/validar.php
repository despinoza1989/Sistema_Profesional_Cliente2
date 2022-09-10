<?php
include('../modelo/db.php');
include('scripts.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","sistema_administrativo");

$consulta="SELECT*FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
$consulta2="SELECT*FROM cliente where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$resultado2=mysqli_query($conexion,$consulta2);

$filas=mysqli_num_rows($resultado);
$filas2=mysqli_num_rows($resultado2);


if($filas || $filas2){
  
    header("location:../vista/home.php");

}else{
    echo '<script>
        Swal.fire({
         icon: "error",
         title: "ERROR",
         text: "El nombre de usuario o la contraseña no son correctos, favor intentar nuevamente!",
         showConfirmButton: true,
         confirmButtonText: "Aceptar"
         }).then(function(result){
            if(result.value){                   
             window.location = "../index.php";
            }
         });
        </script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);

