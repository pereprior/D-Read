<?php

require_once '../config/router.php';
require_once '../src/controller/UserController.php';

use App\Router;
use App\Controller\UserController;

// Modo depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configurar cabecera JSON
header('Content-Type: application/json');

try {
    $router = new Router();

    // Registrar rutas
    $router->addRoute('POST', '/register', [new UserController(), 'register']);

    // Obtener el path de la solicitud
    $method = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // Log para depuración
    error_log("Request URI: $uri");

    // Eliminar "/api.php" del path
    $uri = str_replace('/api.php', '', $uri);

    // Log para verificar el path procesado
    error_log("Processed URI: $uri");

    // Manejar la solicitud
    $router->handleRequest($method, $uri);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error interno: ' . $e->getMessage()]);
}
