<?php

namespace App\Service;

require_once __DIR__ . '/../repository/BookRepository.php';
require_once __DIR__ . '/../entity/Book.php';

use App\Repository\BookRepository;
use App\Entity\Book;

class BookService {
    private $repository;

    public function __construct($db) {
        $this->repository = new BookRepository($db);
    }

    public function findAll(): array {
        return $this->repository->findAll();
    }

    public function findByTitle(string $title): Book {
        return $this->repository->findByTitle($title);
    }
}