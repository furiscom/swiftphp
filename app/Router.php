<?php

namespace App;

class Router
{
    // Array untuk menyimpan rute
    private $routes = [];

    // Menambahkan rute ke dalam array
    public function add($method, $route, $callback)
    {
        $this->routes[] = [
            'method' => $method,
            'route' => $route,
            'callback' => $callback
        ];
    }

    // Mencocokkan rute yang ada dengan request
    public function dispatch()
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Ambil path dari URI

        foreach ($this->routes as $route) {
            // Menggunakan preg_match untuk mencocokkan rute dengan request URI
            if ($route['method'] == $requestMethod && preg_match("#^" . $route['route'] . "$#", $requestUri, $matches)) {
                array_shift($matches); // Menghapus elemen pertama (selalu berupa string yang cocok)
                
                // Eksekusi callback dengan parameter yang diambil dari URI
                call_user_func_array($route['callback'], $matches);
                return;
            }
        }

        // Jika rute tidak ditemukan
        http_response_code(404);
        echo "404 - Page Not Found";
    }
}
