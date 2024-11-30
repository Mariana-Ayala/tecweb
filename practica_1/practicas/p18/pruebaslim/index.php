<?php
header("Content-Type: application/Json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Aloow-Headers: Origin, x-Request-With, Content-Type, Accept");

require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function ($request, $response, $args) {

    $response->write("Hola Mundo Slim!!!");
    return $response;

});


$app->run();
?>