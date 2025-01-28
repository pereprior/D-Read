<?php

require_once '../config/router.php';
require_once '../src/controller/UserController.php';
require_once '../src/controller/BookController.php';

use App\Router;
use App\Controller\UserController;
use App\Controller\BookController;

// Modo depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

try {
    $router = new Router();

    $router->addRoute('POST', '/register', [new UserController(), 'register']);
    $router->addRoute('GET', '/search-books', [new BookController(), 'searchBooks']);

    $method = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = str_replace('/api.php', '', $uri);

    $router->handleRequest($method, $uri);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error interno: ' . $e->getMessage()]);
}
