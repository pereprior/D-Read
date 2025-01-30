<?php

namespace App\Controller;

require_once __DIR__ . '/../service/UserService.php';
require_once __DIR__ . '/../db/Database.php';

use App\Service\UserService;
use App\Db\Database;

class UserController {

    public function register(): void {
        header('Content-Type: application/json');

        try {
            $data = json_decode(file_get_contents('php://input'), true);

            if (empty($data['username']) || empty($data['email']) || empty($data['password'])) {
                echo json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios.']);
                return;
            }

            $db = Database::getInstance();
            $userService = new UserService($db->getConnection());
            $userService->register($data['username'], $data['email'], $data['password']);

            echo json_encode(['success' => true, 'message' => 'Registro exitoso. Ahora puedes iniciar sesión.']);
        } catch (\Exception $e) {
            echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }
    }

    public function login(): void {
        header('Content-Type: application/json');
    
        try {
            $data = json_decode(file_get_contents('php://input'), true);
            error_log("Login attempt: " . json_encode($data));

    
            if (empty($data['email']) || empty($data['password'])) {
                echo json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios.']);
                return;
            }
    
            $db = Database::getInstance();
            $userService = new UserService($db->getConnection());
    
            $user = $userService->validateUser($data['email'], $data['password']);
    
            if ($user) {
                session_start();
                $_SESSION['user'] = [
                    'username' => $user->getUsername(),
                    'email' => $user->getEmail(),
                ];
                echo json_encode(['success' => true, 'message' => 'Inicio de sesión exitoso.']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Credenciales incorrectas.']);
            }
        } catch (\Exception $e) {
            echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }
    }    
    
}