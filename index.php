<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// framework slim
require 'vendor/autoload.php';

// aplicacion
$app = new \Slim\app();

// Configuracion ruta
$app->get('/clima/json', function (Request $request, Response $response, array $args) {
    $data = array('Name'=>'Pedraza Bonilla Alexsander','Numero Cuenta'=>'416021550');

    return $response->withJson($data);
});
// correr
$app->run();