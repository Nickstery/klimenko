<?php

/** Include needed classes */
require_once('../smarty/Smarty.class.php');
require_once('../controller/MainController.php');

/** Global initialization of smarty template engine */
$smarty = new Smarty();

/** Sets the views folder (HTML pages location) */
$smarty->setTemplateDir('../views');


$config = json_decode(file_get_contents('config.json'),true);
/**
 * Gets the user's request parameters as string
 * http://localhost/test/123 => test/123
 *
 * IF url = http://www.imath.kiev.ua/~algebra/iacu2017/
 * config json must contain replace_path = /~algebra/iacu2017/
 */

$request_uri = explode("?",$_SERVER['REQUEST_URI'])[0];
$request_uri = str_replace($config['replace_path'], '', $request_uri);


/** strip string to array http://localhost/{route}/{action} => array(route,action)*/
$route_pieces = explode("/", $request_uri);


/**
 * Gets the route from the request http://localhost/{route}/{action} => route
 */
$route = (empty($route_pieces)) ? 'main' : array_shift($route_pieces);

$controller = new MainController();

/**
 * Gets the action from the request http://localhost/{route}/{action} => action
 */
$action = (empty($route_pieces)) ? 'index' : array_shift($route_pieces);

/**
 * Checks if requested route for existence
 */
if(!method_exists($controller, $route)) {
    $controller->not_found();
    return;
}


if($route === 'image') {
    $controller->$route($action);
} else {
    $controller->$route();
}
