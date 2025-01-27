<?php

namespace App\Service;

require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../entity/User.php';

use App\Repository\UserRepository;
use App\Entity\User;

class UserService {
    private $userRepository;

    public function __construct($db) {
        $this->userRepository = new UserRepository($db);
    }

    public function register(string $username, string $email, string $password): void {
        if ($this->userRepository->findByEmail($email)) {
            throw new \Exception('El correo ya está registrado.');
        }

        $user = new User($username, $email, $password);

        $this->userRepository->save($user);
    }
}