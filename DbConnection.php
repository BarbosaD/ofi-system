<?php

class DbConnection{
    private $servername = "localhost";
    private $username = "root";
    private $password = "123456";
    private $dbname = "bancosystem";
    private $conn;

    public function __construct()
    {
        try{
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            die("Falha na conexão: " . $e->getMessage());
        }
    }

    public function getConnection(){
        return  $this->conn;
    }
}

?>