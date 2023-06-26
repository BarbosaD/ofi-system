<?php

class CrudLogin {
    private $conn;
    
    public function __construct($db)
    {
        $this->conn = $db->getConnection();
    }
    /**
     * Método reponsavel para ler qual usuario 
     */
    public function Read(){
        $sql = "SELECT * FROM login";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     /**
     * Método reponsavel para inserir dados
     */
    public function Insert($name, $password, $email){
        // Executa a consulta INSERT
        $sql = "INSERT INTO login (id, name, email, pass) VALUES (:id, :nome, :email, :pass)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":pass", $password);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }
     /**
     * Método reponsavel por obter usuarios 
     */
    public function ObterUser($id) {
        $sql = "SELECT * FROM login WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    /**
     * Método reponsavel por atualizar usuarios 
     */
    public function UpdateUser($id, $name, $password, $email) {
        $sql = "UPDATE login SET name = :name, pass = :pass, email = :email WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":pass", $password);
        $stmt->execute();
        return $stmt->rowCount();
    }
     /**
     * Método reponsavel por deletar usuarios 
     */
    public function Delete($id) {
        $sql = "DELETE FROM login WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function ValidateUser($email, $senha){
        $sql = "SELECT * FROM login where email = :email AND pass = :pass";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":email",$email, PDO::PARAM_STR);
        $stmt->bindParam(":pass",$senha, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }
}

?>