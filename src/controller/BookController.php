<?php

namespace App\Controller;

require_once __DIR__ . '/../service/BookService.php';
require_once __DIR__ . '/../db/Database.php';

use App\Service\BookService;
use App\Db\Database;

class BookController {

    public function searchBooks(): void {
        header('Content-Type: application/json');

        try {
            $query = $_GET['term'] ?? '';

            if (empty($query)) {
                echo json_encode([]);
                return;
            }

            $db = Database::getInstance();
            $bookService = new BookService($db->getConnection());
            $books = $bookService->search($query);

            echo json_encode($books);
        } catch (\Exception $e) {
            echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }
    }
}
