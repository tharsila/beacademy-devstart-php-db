<?php

include '../vendor/autoload.php';
include '../config/routes.php';

use App\Controller\ErrorController;

/* USE App\Connection\Connection;

$connection = Connection::getConnection();

$query = 'SELECT * FROM tb_category';
$prepare = $connection->prepare($query);
$prepare->execute();

while($registers = $prepare->fetch()) {
  var_dump($registers);
} */

$url = explode('?', $_SERVER['REQUEST_URI'])[0] ;

if (false === isset($routes[$url])) {
  (new ErrorController()) -> notFoundAction();
  exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName()) -> $methodName();
