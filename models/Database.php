<?php

class Database {
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $port;
    private $pdo;

    public function __construct() {
        $config = require_once __DIR__ . "/../config/config.php";
        $this->host = $config['host'];
        $this->dbname = $config['dbname'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->port = $config['port'];

        $dsn = "mysql:host={$this->host};dbname={$this->dbname};port={$this->port}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO{
        return $this->pdo;
    }

    public function closeConnection(): void{
        $this->pdo = null;
    }
}