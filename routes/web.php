<?php

use App\Router;
use App\Controllers\StudentController;
use App\Controllers\AttendanceController;
use App\Controllers\ReportController;

$router = new Router();

// Student routes
$router->add('GET', '/students', [StudentController::class, 'index']);
$router->add('GET', '/students/create', [StudentController::class, 'create']);
$router->add('POST', '/students/store', [StudentController::class, 'store']);
// Rute untuk menampilkan detail siswa berdasarkan ID
$router->add('GET', '/students/(\d+)', [StudentController::class, 'show']);

// Attendance routes
$router->add('GET', '/attendances', [AttendanceController::class, 'index']);
$router->add('POST', '/attendances/store', [AttendanceController::class, 'store']);

// Report route
$router->add('GET', '/reports/generate', [ReportController::class, 'generate']);

$router->dispatch();
