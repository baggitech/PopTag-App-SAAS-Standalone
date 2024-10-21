<?php

class Database
{
    // Variável que guarda a conexão PDO
    protected static $db;

    private function __construct()
    {
        define('DB_DRIVER', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'poptag_app_db');
        define('DB_USER', 'poptag_admin'); // poptag_admin
        define('DB_PASS', 'BQAmiev@v!QT'); // BQAmiev@v!QT

        try {
            $options = [
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
            ];

            $dsn = sprintf('%s:host=%s;dbname=%s', DB_DRIVER, DB_HOST, DB_NAME);
            self::$db = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
        }
    }

    public static function getConnect()
    {
        if (!self::$db) {
            new Database();
        }
        return self::$db;
    }
}

$db = Database::getConnect();
