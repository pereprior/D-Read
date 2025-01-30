<?php

namespace App\Service;

require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../entity/User.php';

use App\Repository\UserRepository;
use App\Entity\User;

class UserService {
    private $repository;

    public function __construct($db) {
        $this->repository = new UserRepository($db);
    }

    public function register(string $username, string $email, string $password): void {
        if ($this->repository->findByEmail($email)) {
            throw new \Exception('El correo ya está registrado.');
        }

        $user = new User($username, $email, $password);

        $this->repository->save($user);
    }

    public function validateUser(string $email, string $password): ?User {
        $user = $this->repository->findByEmail($email);
    
        if (!$user) {
            error_log("Login failed: No user found for email " . $email);
            return null;
        }
    
        error_log("Comparing passwords:");
        error_log("Entered: " . $password);
        error_log("Expected: " . password_hash($password, PASSWORD_BCRYPT));
        error_log("Stored: " . $user->getPassword());
    
        if (!password_verify($password, $user->getPassword())) {
            error_log("Login failed: Password mismatch for email " . $email);
            return null;
        }
    
        error_log("Login successful for email " . $email);
        return $user;
    }    
    
}