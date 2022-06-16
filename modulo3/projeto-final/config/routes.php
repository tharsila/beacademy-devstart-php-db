<?php

use App\Controller\indexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;

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
  '/categorias' => createRoute(CategoryController::class, 'listAction'),
  '/categorias/novo' => createRoute(CategoryController::class, 'addAction'),
  '/categorias/excluir' => createRoute(CategoryController::class, 'removeAction')
];