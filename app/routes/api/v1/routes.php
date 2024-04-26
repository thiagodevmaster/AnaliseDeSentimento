<?php
use App\Controller\LoginController;

$public = [
    "GET|/" => LoginController::class
];

$routes = [
    "public" => $public
];

return $routes;