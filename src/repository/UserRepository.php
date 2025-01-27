<?php

namespace App\Repository;

require_once __DIR__ . '/../entity/User.php';

use App\Entity\User;
use PDO;

class UserRepository 
{

    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function save(User $user): bool
    {
        $stmt = $this->db->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');

        $username = $user->getUsername();
        $stmt->bindParam(':username', $username);

        $email = $user->getEmail();
        $stmt->bindParam(':email', $email);

        $password = $user->getPassword();
        $stmt->bindParam(':password', $password);
        
        return $stmt->execute();
    }

    public function findByEmail(string $email): ?User
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return null;
        }

        return new User
        (
            $result['username'],
            $email,
            $result['password']
        );
    }

    public function findAll(): array
    {
        $stmt = $this->db->query('SELECT * FROM users');
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $users = [];
        foreach ($results as $result) {
            $users[] = new User(
                $result['username'],
                $result['email'],
                $result['password']
            );
        }
    
        return $users;
    }

}