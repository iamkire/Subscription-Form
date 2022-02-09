<?php

class Connection {
    public $servername;
    public $username;
    public $password;
    public $dbname;

    public function Connect()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "subscription";

        try {
            $dsn = "mysql:host=" . $this->servername . "; dbname=" . $this->dbname . ";";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection fail: " . $e->getMessage();
        }
    }
}