<?php
class Conn {
    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "parth";
    private $dbname = "bitnami_pm";
    public $conn;
    // Create connection
    public function __construct() {
         $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } 
       // $this->conn->close();
    }
   
    // Check connection
   
}
?>