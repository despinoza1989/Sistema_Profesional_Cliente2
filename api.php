<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require "models/ClienteModel.php";
require "models/PersonalModel.php";
require "models/ChecklistModel.php";
require "models/CrearCapacitacionModel.php";
require "models/EstadoCivilModel.php";
require "models/GeneroModel.php";
require "models/MejoraModel.php";
require "models/PagoServicioModel.php";
require "models/PlanServicioModel.php";
require "models/RegistroContrato.php";
require "models/ReporteAccidenteModel.php";
require "models/RespuestaAsesoriaModel.php";
require "models/RubroModel.php";
require "models/SolicitudAsesoriaModel.php";
require "models/SolicitudCapacitacionModel.php";
require "models/TipoAsesoriaModel.php";
require "models/TipoDocumentoModel.php";
require "models/TipoPersonalCapacitacionModel.php";
require "models/TipoUsuarioModel.php";
require "models/VisitaTerrenoModel.php";
require "models/AsignacionProfesionalModel.php";
require "models/DetalleChecklistModel.php";
require "models/NotificacionModel.php";
require "models/ContratoModel.php";


$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization, authorization-x')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

header('Access-Control-Allow-Origin: *');

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

//MODELS CLIENTE

$app->get('/cliente', function (Request $request, Response $response, array $args) {
     
    $model_cliente = new ClienteModel();
    $datos = $model_cliente->getAll();
    return $response->withJson($datos);

});

$app->get('/cliente/{id_cliente}', function (Request $request, Response $response, array $args) {
    
    $id_cliente = $args['id_cliente'];    
    $model_cliente = new ClienteModel();
    $datos_cliente = $model_cliente->getById($id_cliente);
    return $response->withJson($datos_cliente);

});

//MODELS PERSONAL

$app->get('/personal', function (Request $request, Response $response, array $args) {
     
    $model = new PersonalModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/personal/{id_personal}', function (Request $request, Response $response, array $args) {
    
    $id_personal = $args['id_personal'];    
    $model = new PersonalModel();
    $datos = $model->getById($id_personal);
    return $response->withJson($datos);

});

$app->get('/personal_administrativo', function (Request $request, Response $response, array $args) {
    
    $model = new PersonalModel();
    $datos = $model->getAdministrativoAll();
    return $response->withJson($datos);

});
//MODELS CHECKLIST

$app->get('/check-list', function (Request $request, Response $response, array $args) {
     
    $model = new ChecklistModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/check-list/{id_check_list}', function (Request $request, Response $response, array $args) {
    
    $id_check_list = $args['id_check_list'];    
    $model = new ChecklistModel();
    $datos = $model->getById($id_check_list);
    return $response->withJson($datos);

});

$app->get('/detalle-check-list/id-check-list/{id_check_list_dcl}', function (Request $request, Response $response, array $args) {
    
    $id_check_list_dcl = $args['id_check_list_dcl'];    
    $model = new DetalleChecklistModel();
    $datos = $model->getByIdChecklist($id_check_list_dcl);
    return $response->withJson($datos);

});

$app->post('/check-list', function (Request $request, Response $response, array $args) {
        
    $model = new ChecklistModel();
    $model2 = new DetalleChecklistModel();
    $data_post = $request->getParsedBody();
    $datos = $model->create($data_post['check_list']);

    $detalles_checklist = $data_post['detalle_check_list'];
    foreach($detalles_checklist as $detalle){
        $detalle['id_check_list_dcl']=$datos['id'];
        $model2->create($detalle);
    }
    return $response->withJson($datos);

});

//MODELS CREAR CAPACITACI??N

$app->get('/crear-capacitacion', function (Request $request, Response $response, array $args) {
     
    $model = new CrearCapacitacionModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/crear-capacitacion/{id_crear_capacitacion}', function (Request $request, Response $response, array $args) {
    
    $id_crear_capacitacion = $args['id_crear_capacitacion'];    
    $model = new CrearCapacitacionModel();
    $datos = $model->getById($id_crear_capacitacion);
    return $response->withJson($datos);

});

$app->get('/detalle-capacitacion/{id_crear_capacitacion}', function (Request $request, Response $response, array $args) {
    
    $id_crear_capacitacion = $args['id_crear_capacitacion'];    
    $model = new CrearCapacitacionModel();
    $datos = $model->getByDetalleCapacitacion($id_crear_capacitacion);
    return $response->withJson($datos);

});

$app->post('/modificar-capacitacion', function (Request $request, Response $response, array $args) {
    
    $model = new CrearCapacitacionModel();
    $datos = $model->update($request->getParsedBody());
    return $response->withJson($datos);

});

//MODELS ESTADO CIVIL

$app->get('/estado-civil', function (Request $request, Response $response, array $args) {
     
    $model = new EstadoCivilModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/estado-civil/{id_estado_civil}', function (Request $request, Response $response, array $args) {
    
    $id_estado_civil = $args['id_estado_civil'];    
    $model = new EstadoCivilModel();
    $datos = $model->getById($id_estado_civil);
    return $response->withJson($datos);

});

//MODELS GENERO

$app->get('/genero', function (Request $request, Response $response, array $args) {
     
    $model = new GeneroModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/genero/{id_genero}', function (Request $request, Response $response, array $args) {
    
    $id_genero = $args['id_genero'];    
    $model = new GeneroModel();
    $datos = $model->getById($id_genero);
    return $response->withJson($datos);

});

//MODELS MEJORAS

$app->get('/mejoras', function (Request $request, Response $response, array $args) {
     
    $model = new MejoraModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/mejoras/{id_mejoras}', function (Request $request, Response $response, array $args) {
    
    $id_mejoras = $args['id_mejoras'];    
    $model = new MejoraModel();
    $datos = $model->getById($id_mejoras);
    return $response->withJson($datos);

});


//MODELS REPORTE ACCIDENTE

$app->get('/reporte-accidente', function (Request $request, Response $response, array $args) {
     
    $model = new ReporteAccidenteModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/reporte-accidente/{id_reporte_accidente}', function (Request $request, Response $response, array $args) {
    
    $id_reporte_accidente = $args['id_reporte_accidente'];    
    $model = new ReporteAccidenteModel();
    $datos = $model->getById($id_reporte_accidente);
    return $response->withJson($datos);

});

// MODELS RESPUESTA ASESORIA

$app->get('/respuesta-asesoria', function (Request $request, Response $response, array $args) {
     
    $model = new RespuestaAsesoriaModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/respuesta-asesoria/{id_respuesta_asesoria}', function (Request $request, Response $response, array $args) {
    
    $id_respuesta_asesoria = $args['id_respuesta_asesoria'];    
    $model = new RespuestaAsesoriaModel();
    $datos = $model->getById($id_respuesta_asesoria);
    return $response->withJson($datos);

});

//MODELS RUBRO 

$app->get('/rubro', function (Request $request, Response $response, array $args) {
     
    $model = new RubroModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/rubro/{id_rubro}', function (Request $request, Response $response, array $args) {
    
    $id_rubro = $args['id_rubro'];    
    $model = new RubroModel();
    $datos = $model->getById($id_rubro);
    return $response->withJson($datos);

});

//MODELS SOLICITUD ASESORIA

$app->get('/solicitud-asesoria', function (Request $request, Response $response, array $args) {
     
    $model = new SolicitudAsesoriaModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/solicitud-asesoria/{id_solicitud_asesoria}', function (Request $request, Response $response, array $args) {
    
    $id_solicitud_asesoria = $args['id_solicitud_asesoria'];    
    $model = new SolicitudAsesoriaModel();
    $datos = $model->getById($id_solicitud_asesoria);
    return $response->withJson($datos);

});

//MODELS SOLICITUD CAPACITACION

$app->get('/solicitud-capacitacion', function (Request $request, Response $response, array $args) {
     
    $model = new SolicitudCapacitacionModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/solicitud-capacitacion/{id_solicitud_capacitacion}', function (Request $request, Response $response, array $args) {
    
    $id_solicitud_capacitacion = $args['id_solicitud_capacitacion'];    
    $model = new SolicitudCapacitacionModel();
    $datos = $model->getById($id_solicitud_capacitacion);
    return $response->withJson($datos);

});

//MODELS TIPO ASESORIA

$app->get('/tipo-asesoria', function (Request $request, Response $response, array $args) {
     
    $model = new TipoAsesoriaModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/tipo-asesoria/{id_tipo_asesoria}', function (Request $request, Response $response, array $args) {
    
    $id_tipo_asesoria = $args['id_tipo_asesoria'];    
    $model = new TipoAsesoriaModel();
    $datos = $model->getById($id_tipo_asesoria);
    return $response->withJson($datos);

});

//MODELS TIPO DOCUMENTO

$app->get('/tipo-documento', function (Request $request, Response $response, array $args) {
     
    $model = new TipoDocumentoModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/tipo-documento/{id_tipo_documento}', function (Request $request, Response $response, array $args) {
    
    $id_tipo_documento = $args['id_tipo_documento'];    
    $model = new TipoDocumentoModel();
    $datos = $model->getById($id_tipo_documento);
    return $response->withJson($datos);

});

//TIPO PERSONAL CAPACITACION

$app->get('/tipo-personal-capacitacion', function (Request $request, Response $response, array $args) {
     
    $model = new TipoPersonalCapacitacionModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/tipo-personal-capacitacion/{id_tipo_personal_capacitacion}', function (Request $request, Response $response, array $args) {
    
    $id_tipo_personal_capacitacion = $args['id_tipo_personal_capacitacion'];    
    $model = new TipoPersonalCapacitacionModel();
    $datos = $model->getById($id_tipo_personal_capacitacion);
    return $response->withJson($datos);

});

//MODELS TIPO USUARIO

$app->get('/tipo-usuario', function (Request $request, Response $response, array $args) {
     
    $model = new TipoUsuarioModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/tipo-usuario/{id_tipo_usuario}', function (Request $request, Response $response, array $args) {
    
    $id_tipo_usuario = $args['id_tipo_usuario'];    
    $model = new TipoUsuarioModel();
    $datos = $model->getById($id_tipo_usuario);
    return $response->withJson($datos);

});

//MODELS VISITA TERRENO 

$app->get('/visita-terreno', function (Request $request, Response $response, array $args) {
     
    $model = new VisitaTerrenoModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/visita-terreno/{id_visita_terreno}', function (Request $request, Response $response, array $args) {
    
    $id_visita_terreno = $args['id_visita_terreno'];    
    $model = new VisitaTerrenoModel();
    $datos = $model->getById($id_visita_terreno);
    return $response->withJson($datos);

});

//MODELS ASIGNACION PROFESIONAL

$app->get('/asignacion-profesional', function (Request $request, Response $response, array $args) {
     
    $model = new AsignacionProfesionalModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/asignacion-profesional/{id_asignacion_profesional}', function (Request $request, Response $response, array $args) {
    
    $id_asignacion_profesional = $args['id_asignacion_profesional'];    
    $model = new AsignacionProfesionalModel();
    $datos = $model->getById($id_asignacion_profesional);
    return $response->withJson($datos);

});

$app->get('/asignacion-profesional-cliente/{id_cliente}', function (Request $request, Response $response, array $args) {
    
    $id_cliente = $args['id_cliente'];    
    $model = new AsignacionProfesionalModel();
    $datos = $model->getAllByCliente($id_cliente);
    return $response->withJson($datos);

});

$app->post('/asignacion-profesional', function (Request $request, Response $response, array $args) {
    
    $model = new AsignacionProfesionalModel();
    $datos = $model->update($request->getParsedBody());
    return $response->withJson($datos);

});
//MODELS DETALLE CHECKLIST

$app->get('/detalle-check-list', function (Request $request, Response $response, array $args) {
     
    $model = new DetalleChecklistModel();
    $datos = $model->getAll();
    return $response->withJson($datos);

});

$app->get('/detalle-check-list/{id_detalle_check_list}', function (Request $request, Response $response, array $args) {
    
    $id_detalle_check_list = $args['id_detalle_check_list'];    
    $model = new DetalleChecklistModel();
    $datos = $model->getById($id_detalle_check_list);
    return $response->withJson($datos);

});

//MODELS NOTIFICACIONES

$app->get('/notificaciones/user/{custom_user_id}', function (Request $request, Response $response, array $args) {
     
    $custom_user_id = $args["custom_user_id"];  
    $model = new NotificacionModel();
    $datos = $model->getByUser($custom_user_id);
    return $response->withJson($datos);

});

$app->get('/notificaciones/{id_notificaciones}', function (Request $request, Response $response, array $args) {
    
    $id_notificaciones = $args["id_notificaciones"];    
    $model = new NotificacionModel();
    $datos = $model->getById($id_notificaciones);
    return $response->withJson($datos);

});

$app->get('/notificaciones/cantidad/{custom_user_id}', function (Request $request, Response $response, array $args) {
     
    $custom_user_id = $args["custom_user_id"];  
    $model = new NotificacionModel();
    $datos = $model->getByUserCount($custom_user_id);
    return $response->withJson($datos);

});


$app->post('/notificaciones', function (Request $request, Response $response, array $args) {
    
    $model = new NotificacionModel();
    $datos = $model->create($request->getParsedBody());
    return $response->withJson($datos);

});

$app->put('/notificaciones/{id_notificaciones}', function (Request $request, Response $response, array $args) {

    $id_notificaciones = $args["id_notificaciones"];
    $model = new NotificacionModel();
    $datos = $model->updateEstado($id_notificaciones);
    return $response->withJson($datos);

});

//MODELS CONTRATO

$app->get('/contrato', function (Request $request, Response $response, array $args) {
     
    $model_cliente = new ContratoModel();
    $datos = $model_cliente->getAll();
    return $response->withJson($datos);

});

$app->get('/contrato/{id_contrato}', function (Request $request, Response $response, array $args) {
    
    $id_contrato = $args['id_contrato'];    
    $model_contrato = new ContratoModel();
    $datos_contrato = $model_contrato->getById($id_contrato);
    return $response->withJson($datos_contrato);

});

$app->put('/contrato', function (Request $request, Response $response, array $args) {
    
    $model = new ContratoModel();
    $datos = $model->update($request->getParsedBody());
    return $response->withJson($datos);

});

$app->post('/contrato', function (Request $request, Response $response, array $args) {
    
    $model = new ContratoModel();
    $datos = $model->create($request->getParsedBody());
    return $response->withJson($datos);

});

//MODEL PLAN DE SERVICIO

$app->get('/plan-servicio', function (Request $request, Response $response, array $args) {
     
    $model_contrato = new PlanServicioModel();
    $datos = $model_contrato->getAll();
    return $response->withJson($datos);

});

$app->get('/plan-servicio/{id_plan_servicio}', function (Request $request, Response $response, array $args) {
    
    $id_plan_servicio = $args['id_plan_servicio'];    
    $model_contrato = new PlanServicioModel();
    $datos_contrato = $model_contrato->getById($id_plan_servicio);
    return $response->withJson($datos_contrato);

});

$app->post('/plan-servicio', function (Request $request, Response $response, array $args) {
    
    $model = new PlanServicioModel();
    $datos = $model->update($request->getParsedBody());
    return $response->withJson($datos);

});

//MODEL PAGO DE SERVICIO

$app->get('/pago-servicio', function (Request $request, Response $response, array $args) {
     
    $model_pago = new PagoServicioModel();
    $datos = $model_pago->getAll();
    return $response->withJson($datos);

});

$app->get('/pago-servicio/{id_pago_servicio}', function (Request $request, Response $response, array $args) {
    
    $id_pago_servicio = $args['id_pago_servicio'];    
    $model_pago = new PagoServicioModel();
    $datos_pago = $model_pago->getById($id_pago_servicio);
    return $response->withJson($datos_pago);

});

$app->get('/pago-servicio/cliente/{id_cliente_c}', function (Request $request, Response $response, array $args) {
    
    $id_cliente_c = $args['id_cliente_c'];    
    $model_pago = new PagoServicioModel();
    $datos_pago = $model_pago->getByIdCliente($id_cliente_c);
    return $response->withJson($datos_pago);

});


$app->post('/pago-servicio', function (Request $request, Response $response, array $args) {
    
    $model = new PagoServicioModel();
    $datos = $model->update($request->getParsedBody());
    return $response->withJson($datos);

});

$app->run();