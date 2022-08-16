<?php
session_start();
// index.php thuộc namespace toàn cục

// https://domain.com
define("SITE_URL", "http://localhost:8081/LPHP2203e/sourcecodes/ngay30/books/index.php");

include_once "mvc/router.php";
include_once "mvc/controllers/BookController.php";
include_once "mvc/controllers/IndexController.php";
include_once "mvc/controllers/ErrorController.php";
include_once "mvc/models/Connect.php";
include_once "mvc/models/BookModel.php";

use \MVC\Router;
$router = new Router();
$router->redirectRouter();


