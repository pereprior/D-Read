<?php

namespace App\Repository;

require_once __DIR__ . '/../entity/Book.php';

use App\Entity\Book;
use PDO;

class BookRepository 
{

    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function save(Book $book): bool
    {
        $stmt = $this->db->prepare('INSERT INTO books (title, author, publication_year, genre, price) VALUES (:title, :author, :year, :genre, :price)');

        $title = $book->getTitle();
        $stmt->bindParam(':title', $title);

        $author = $book->getAuthor();
        $stmt->bindParam(':author', $author);

        $year = $book->getPublicationYear();
        $stmt->bindParam(':year', $year);

        $genre = $book->getGenre();
        $stmt->bindParam(':genre', $genre);

        $price = $book->getPrice();
        $stmt->bindParam(':price', $price);
        
        return $stmt->execute();
    }

    public function findByTitle(string $title): ?Book
    {
        $stmt = $this->db->prepare("SELECT * FROM books WHERE title = :title");
        $stmt->execute(['title' => $title]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return null;
        }

        return new Book(
            $result['id'],
            $title,
            $result['author'],
            $result['publication_year'],
            $result['genre'],
            $result['price']
        );
    }

    public function findAll(): array
    {
        $stmt = $this->db->query('SELECT * FROM books');
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $books = [];
        foreach ($results as $result) {
            $books[] = new Book(
                $result['id'],
                $result['title'],
                $result['author'],
                $result['publication_year'],
                $result['genre'],
                $result['price']
            );
        }
    
        return $books;
    }

}