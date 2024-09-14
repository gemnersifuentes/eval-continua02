<?php
// routes.php

// Definición de rutas
$routes = [
    '/evaluacion-continua02/' => 'home',           // Ruta principal que apunta al controlador 'home'
    '/evaluacion-continua02/about' => 'about',
    '/evaluacion-continua02/practicas'=> 'practicas',     // Ruta '/about' que apunta al controlador 'about'
];

// Obtener la ruta actual
$request_uri = $_SERVER['REQUEST_URI'];
//echo $request_uri;
$request_uri = parse_url($request_uri, PHP_URL_PATH); // Solo la parte del pat
// Verificar si la ruta existe en las rutas definidas
if (array_key_exists($request_uri, $routes)) {
    // Obtener el controlador correspondiente
    $controller = $routes[$request_uri];
    // Incluir el controlador
    require "controllers/{$controller}.php";
} else {
    // Si no se encuentra la ruta, mostrar un error 404
    return  http_response_code(404);
    //echo "404 - Página no encontrada";
}
?>
