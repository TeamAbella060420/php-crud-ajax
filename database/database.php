<?php

class Database
{
    private $servername = "localhost"; // Replace with your server name
    private $username = "your_username"; // Replace with your username
    private $password = "your_password"; // Replace with your password
    private $database = "your_database"; // Replace with your database name
    public $conn = '';

    public function __construct()
    {
        try {
            // Create a new PDO instance
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);

            // Set PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

?>
