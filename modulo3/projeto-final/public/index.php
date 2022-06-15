<?php

include '../vendor/autoload.php';

USE App\Connection\Connection;

$connection = Connection::getConnection();

$query = 'SELECT * FROM tb_category';
$prepare = $connection->prepare($query);
$prepare->execute();

while($registers = $prepare->fetch()) {
  var_dump($registers);
}

/* use App\Controller\indexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0] ;

function createRoute(string $controllerName, string $methodName){
  return [
    'controller' => $controllerName,
    'method' => $methodName,
  ];
}

$routes = [
  '/' => createRoute(IndexController::class, 'indexAction' ),
  '/produtos' => createRoute(ProductController::class, 'listAction'),
  '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
  '/categoria' => createRoute(CategoryController::class, 'addCategory')
];


if (false === isset($routes[$url])) {
  (new ErrorController()) -> notFoundAction();
  exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName()) -> $methodName(); */
