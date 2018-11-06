<?php
function getRoute($request)
{
    $controllerPrefix = 'Default';
    $actionPrefix     = 'default';
    $route            = getPathArray($request['path']);
    $controller       = CONTROLLER_DIR . $controllerPrefix . 'Controller.php';
    $action           = $actionPrefix . 'Action';
    $model            = '';

    if (!empty($route)) {
        if (isset($route[0]) and $route[0] == INDEX_NAME) {
            unset($route[0]);
            $route = array_values($route);
        }
        if ((isset($route[0])) && ($route[0])) {
            $controller = str_replace($controllerPrefix, ucfirst(strtolower($route[0])), $controller);
        }
        if ((isset($route[1])) && ($route[1])) {
            $action = str_replace($actionPrefix, strtolower($route[1]), $action);
        }
        if ((isset($route[2])) && ($route[2])) {
            $model = $route[2];
        }
    }
    return array('controller' => $controller, 'action' => $action, 'model' => $model);
}

function getPathArray($pathString)
{
    return array_filter(explode('/', $pathString));
}

function getPathString($pathArray)
{
    return implode('/', $pathArray);
}
