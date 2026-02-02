<?php

class Database {
    private static $instance = null;
    private $connection;

    private $host = "localhost";
    private $db_name = "todo_app";
    private $username = "root";
    private $password = "";

    private function __construct() {
        try {
       $this->connection = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
       $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
       echo "Problème de connexion : " . $exception->getMessage();
    }
}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance->connection;
    }
}