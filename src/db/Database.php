<?php

namespace App\Db;

use PDO;
use PDOException;

class Database 
{

    private static $_instance; // Instancia unica de la base de datos
    private PDO $_connection;

    private function __construct() {

        $config = [
            'host' => '127.0.0.1',
            'dbname' => 'dreadb',
            'username' => 'root',
            'password' => 'secreto',
            'charset' => 'utf8'
        ];

        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";

        try {
            $this->_connection = new PDO($dsn, $config['username'], $config['password']);
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error al conectar a la base de datos: ' . $e->getMessage();
            exit;
        }

    }
    
    public static function getInstance() {
        if (!self::$_instance) {
            self::$_instance = new Database();
        }

        return self::$_instance;
    }

    public function getConnection() {
        return $this->_connection;
    }

    public function checkConnection() {
        try {
            $stmt = $this->_connection->query('SELECT 1');
            return $stmt !== false;
        } catch (PDOException $e) {
            return false;
        }
    }

}