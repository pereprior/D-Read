<?php

namespace App;

class Router {
    private $routes = [];

    public function addRoute(string $method, string $path, callable $handler): void {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'handler' => $handler,
        ];
    }

    public function handleRequest(string $method, string $path): void {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $path) {
                call_user_func($route['handler']);
                return;
            }
        }

        // Si no se encuentra la ruta, devolver un error 404
        http_response_code(404);
        echo json_encode(['success' => false, 'message' => 'Ruta no encontrada']);
    }
}