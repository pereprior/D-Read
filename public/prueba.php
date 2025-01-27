<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../src/db/Database.php';
require_once '../src/repository/UserRepository.php';
require_once '../src/entity/User.php';

use App\Db\Database;
use App\Repository\UserRepository;

$db = Database::getInstance();

if ($db->checkConnection()) {
    echo 'Conexión a la base de datos exitosa.<br>';
    $userRepository = new UserRepository($db->getConnection());
    $users = $userRepository->findAll();
    
    if ($users) {
        foreach ($users as $user) {
            echo 'Nombre: ' . $user->getUsername() . '<br>';
            echo 'Email: ' . $user->getEmail() . '<br>';
            echo 'Password: ' . $user->getPassword() . '<br><br>';
        }
    } else {
        echo 'No se encontraron usuarios.';
    }
} else {
    echo 'Error al conectar a la base de datos.';
}