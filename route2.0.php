<?php

require_once 'Route.php';
require_once 'api/TaskApiController.php';
require_once 'Controller/PaginaController.php';

$r = new Router();

// rutas de la api
$r->addRoute("categorias","GET", "TaskApiController", "getCategories");
$r->addRoute("","GET", "PaginaController", "showCategories");

//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
