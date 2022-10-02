<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require "models/ClienteModel.php";


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

//MODELS PROFESIONAL





















$app->run();