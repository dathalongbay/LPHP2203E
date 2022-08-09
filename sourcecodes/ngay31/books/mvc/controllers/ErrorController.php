<?php
namespace MVC\Controllers;

class ErrorController {

    public function notFoundAction(){
        $message = '404 not found';

        //include_once '../views/error/notFound.php';

        include_once 'mvc/views/error/notFound.php';
    }

}
