<?php

require_once 'controller/HomeController.php';
require_once 'controller/ActivitiesController.php';
require_once 'controller/ParentsController.php';
require_once 'controller/InformationController.php';
require_once 'controller/ContactController.php';


preg_match('/\/kuekennest2\/(?<controller>[^\/]*)(\/(?<action>[^\/]*))?/', $_SERVER['REQUEST_URI'], $matches);

$controllerName = $matches['controller'];
$controllerClassName = "kuekennest2\\controller\\{$controllerName}Controller";

$controllerInstance = new $controllerClassName();

$actionName = $controllerName;
$actionMethodName = 'action' . $actionName;

$controllerInstance->$actionMethodName();
