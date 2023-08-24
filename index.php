<?php
session_start();
$app = [];

require 'connection.php';
$app['db'] = (new database())->db;

$routes = [
    '/'=>'controllers/register.php',
    '/register'=>'controllers/register.logic.php',
    '/home'=>"controllers/home.php",
    '/logout'=>"controllers/logout.php",
    '/loginpage'=>"controllers/login.php",
    '/login'=>'controllers/login.logic.php',
    '/about'=>'controllers/about.php'
//    '/' => 'controller/signuppage.php',
//    '/login'=>'controller/loginpage.php',
//    '/loginquery' => 'controller/loginquery.php',
//    '/signuppage' => 'controller/signuppage.php',
//    '/signupquery' => 'controller/signupquery.php',
//    '/home' => 'controller/home.php',
//    '/logout' => 'controller/logout.php',
//    '/about'=>'controller/about.php'
];

if (array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    require $routes[$_SERVER['REQUEST_URI']];
}
else {
    http_response_code(404);
    require 'view/errors/404view.php';
}

?>