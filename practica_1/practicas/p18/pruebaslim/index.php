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

$app->get("/hola[/{nombre}]", function($request, $response, $args){
    $response->write("hola, " . $args["nombre"]);
    return $response;
});

$app->post("/pruebapost", function($request, $response, $args){
    $reqPost = $request->getParsedBody();
    $val1 = $reqPost["val1"];
    $val2 = $reqPost["val2"];

    $response->write("valores: ".$val1 ." ".$val2);
    return $response;
});

$app->get("/testjson", function($request, $response, $args){
    $data[0]["nombre"]="Kenai";
    $data[0]["apellidos"]="Perez Garcia";
    $data[1]["nombre"]="Mika";
    $data[0]["apellidos"]="Gomez Torrez";
    $response->write(json_encode($data, JSON_PRETTY_PRINT));
    return $response;
});

$app->run();
?>