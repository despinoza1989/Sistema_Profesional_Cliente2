<?php
/*require_once 'autoload.php';*/
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Profesional - Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link href="assents/css/login.css" rel="stylesheet" />
    <link rel="stylesheet" href="assents/css/footers.css"/>
    <script src="assents/js/validacion.js"></script>    
    
</head>
<body>
    <?php
        if(!isset($_SESSION["activa"])){

            require_once "controllers/LoginController.php";
            $ctrl = new LoginController();

        }else{

            $request= "";

            if(!isset($_GET['view']) || is_null($_GET['view'])){
                $request= "/";
            }else{
                $request = $_GET['view'];
            }          

            switch ($request) {
                case '':
                case '/':
                    require_once "controllers/HomeController.php";
                    $ctrl = new HomeController();
                    break;
                
                case 'home':
                    require_once "controllers/HomeController.php";
                    $ctrl = new HomeController();
                    break;

                case 'crear-visita':
                    require_once "controllers/VisitaController.php";
                    $ctrl = new VisitaController();
                    break;

                case 'crear-capacitacion':
                    require_once "controllers/CrearCapacitacionController.php";
                    $ctrl = new CrearCapacitacionController();
                    break;

                case 'solicitar-capacitacion':
                    require_once "controllers/SolicitarCapacitacionController.php";
                    $ctrl = new SolicitarCapacitacionController();
                    break;

                case 'crear-mejora':
                    require_once "controllers/CrearMejoraController.php";
                    $ctrl = new CrearMejoraController();
                    break;

                case 'listado-mejora':
                    require_once "controllers/ListadoMejoraController.php";
                    $ctrl = new ListadoMejoraController();
                    break;

                case 'crear-asesoria':
                    require_once "controllers/CrearAsesoriaController.php";
                    $ctrl = new CrearAsesoriaController();
                    break;

                case 'listar-asesoria':
                    require_once "controllers/ListarAsesoriaController.php";
                    $ctrl = new ListarAsesoriaController();
                    break;  
    
                case 'respuesta-asesoria':
                    require_once "controllers/RespuestaAsesoriaController.php";
                    $ctrl = new RespuestaAsesoriaController();
                    break; 

                case 'reporte-accidente':
                    require_once "controllers/ReporteAccidenteController.php";
                    $ctrl = new ReporteAccidenteController();
                    break;

                case 'lista-accidente':
                    require_once "controllers/ListadoAccidenteController.php";
                    $ctrl = new ListadoAccidenteController();
                    break;

                case 'pago-servicio':
                    require_once "controllers/PagoController.php";
                    $ctrl = new PagoController();
                    break;

                case 'check-list':
                    require_once "controllers/CheckListController.php";
                    $ctrl = new CheckListController();
                    break;

                case 'listado-check-list':
                    require_once "controllers/ListadoCheckListController.php";
                    $ctrl = new ListadoCheckListController();
                    break;

                case 'detalle-respuesta-asesoria':
                    require_once "controllers/DetalleRespuestaAsesoriaController.php";
                    $ctrl = new DetalleRespuestaAsesoriaController();
                    break;

                
                case 'logout':
                    session_unset();
                    header("refresh: 1; url=index.php");
                    break;

                default :
                    require_once "controllers/HomeController.php";
                    $ctrl = new HomeController();
                    break;
                    
            }
                
        }
        
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>