<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// dd($uri);

$routes = [
    '/'=> 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

function abort($code = 404){
    http_response_code($code);
    require "controllers/$code.php";
    exit();
}

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
