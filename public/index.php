<?php

// Set the base path to the project directory
define('BASE_PATH', dirname(__DIR__));

// Autoload classes from the app directory
require_once BASE_PATH . '/vendor/autoload.php';
require '../app/Router.php';
require '../app/Controllers/StudentController.php';
// Include the router file
use App\Router;
use App\Controllers\UserController;
use App\Controllers\StudentController;
use App\Controllers\AttendanceController;
use App\Controllers\ReportController;

$router = new Router();

// Definisikan rute
$router->add('GET', '/users', [UserController::class, 'index']);
$router->add('GET', '/users/(\d+)', [UserController::class, 'show']);
$router->add('GET', '/students', [StudentController::class, 'index']);
$router->add('GET', '/students/(\d+)', [StudentController::class, 'show']);
$router->add('POST', '/attendances/store', [AttendanceController::class, 'store']);
$router->add('GET', '/reports/generate', [ReportController::class, 'generate']);

// Jalankan router
$router->dispatch();
