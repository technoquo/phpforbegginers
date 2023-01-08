<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



$route = [

    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];



function routetoController($uri,$route){
    if (array_key_exists($uri,$route)) {
        require $route[$uri];
   } else {
         abort();
   }

}

routetoController($uri,$route);


function abort($code = 404){
    http_response_code($code);
    
    require "views/{$code}.php";

    die();
    
}
