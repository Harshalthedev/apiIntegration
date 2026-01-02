<?php

// app/core/Database.php

class Database
{
    private $pdo;

    public function __construct()
    {
        $config = require APP_PATH . 'config/database.php';

        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";

        try {
            $this->pdo = new PDO($dsn, $config['username'], $config['password'], $config['options']);
        } catch (PDOException $e) {
            // In production, log this instead of showing
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Return PDO instance for queries
    public function getConnection()
    {
        return $this->pdo;
    }
}

?>
