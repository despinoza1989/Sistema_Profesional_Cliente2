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

                case 'listado-visita-profesional':
                    require_once "controllers/ListadoVisitaProfesionalController.php";
                    $ctrl = new ListadoVisitaProfesionalController();
                    break;

                case 'detalle-visita-profesional':
                    require_once "controllers/DetalleVisitaProfesionalController.php";
                    $ctrl = new DetalleVisitaProfesionalController();
                    break;

                case 'solicitar-capacitacion':
                    require_once "controllers/SolicitarCapacitacionController.php";
                    $ctrl = new SolicitarCapacitacionController();
                    break;       
                    
                case 'listar-solicitud-capacitacion':
                    require_once "controllers/ListarSolicitudesCapacitacionesController.php";
                    $ctrl = new ListarSolicitudesCapacitacionesController();
                    break;    

                case 'listar-respuesta-capacitacion':
                    require_once "controllers/ListarRespuestaCapacitacionesController.php";
                    $ctrl = new ListarRespuestaCapacitacionesController();
                    break;    

                case 'detalle-capacitaciones':
                    require_once "controllers/DetalleCapacitacionController.php";
                    $ctrl = new DetalleCapacitacionController();
                    break;

                case 'listado-mejora':
                    require_once "controllers/ListadoMejoraController.php";
                    $ctrl = new ListadoMejoraController();
                    break;

                case 'detalle-mejora':
                    require_once "controllers/DetalleMejorasController.php";
                    $ctrl = new DetalleMejorasController();
                    break;

                case 'solicitar-asesoria':
                    require_once "controllers/SolicitudAsesoria.php";
                    $ctrl = new SolicitudAsesoria();
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

                case 'listado-check-list':
                    require_once "controllers/ListadoCheckListController.php";
                    $ctrl = new ListadoCheckListController();
                    break;

                case 'detalle-check-list':
                    require_once "controllers/DetalleCheckListController.php";
                    $ctrl = new DetalleCheckListController();
                    break;

                case 'detalle-respuesta-asesoria':
                    require_once "controllers/DetalleRespuestaAsesoriaController.php";
                    $ctrl = new DetalleRespuestaAsesoriaController();
                    break;
                
                case 'listar-respuesta-asesoria':
                    require_once "controllers/ListadoRespuestaAsesoriaController.php";
                    $ctrl = new ListadoRespuestaAsesoriaController();
                    break;    

                case 'notificaciones':
                    require_once "controllers/NotificacionesController.php";
                    $ctrl = new NotificacionesController();
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