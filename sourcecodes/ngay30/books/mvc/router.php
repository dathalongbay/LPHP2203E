<?php
namespace MVC;

use MVC\Controllers\ErrorController;

class Router {


    public function redirectRouter(){

        // index.php?controller=book&action=edit&id=8
        // index.php?controller=book&action=add
        // index.php?controller=book&action=index
        // index.php?controller=book&action=delete&id=8

        // index.php?controller=user&action=edit&id=8
        // index.php?controller=product&action=edit&id=8
        // index.php?controller=category&action=edit&id=8

        $controllerName = $_REQUEST['controller'] ? $_REQUEST['controller'] : 'index';
        // book -> BookController
        //
        $controllerName = "\\MVC\\Controllers\\".ucfirst($controllerName).'Controller';

        if (class_exists($controllerName)) {
            $controllerObject = new $controllerName();

            $actionName = $_REQUEST['action'] ? $_REQUEST['action'] : 'index';
            $actionName .= 'Action';

            if (method_exists($controllerObject, $actionName)) {
                return $controllerObject->$actionName();
            }
        }

        $controllerObject = new ErrorController();
        return $controllerObject->notFoundAction();
    }





}
