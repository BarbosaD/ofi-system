<?php

class Clients{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db->getConnection();
    }

    public function createClient($nome, $email, $telefone, $cpf)
    {
        $sql = "INSERT INTO contact(name, email, tel, cpf) VALUES (:name, :email, :tel, :cpf)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':tel', $telefone);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function getClient($id)
    {
        $sql = "SELECT FROM contact WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateClients($id,$nome, $email, $telefone, $cpf)
    {
        $sql = "UPDATE contact SET id = :id , name = :name, email = :email, tel = :tel, cpf = :cpf ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':tel', $telefone);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function deleteClients($id)
    {
        $sql = "DELETE FROM contact WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function listClient()
    {
        $sql = "SELECT * FROM contact";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); //retorna uma matriz de valores 
    }
}


?>