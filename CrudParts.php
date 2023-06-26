<?php

class Parts{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db->getConnection();
    }
    public function createParts($nome)
    {
        try
        {
            $sql = "INSERT INTO parts (name) VALUES (:name)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nome',$nome);
            $stmt->execute();
            return $stmt->rowCount() > 0;
    
        }
        catch(PDOException $e)
        {
            echo "Erro ao criar nome da peça: ".$e->getMessage();
        }
    }
    public function getParts($id)
    {
        try {
            $sql = "SELECT parts WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Não foi possivel consultador";
        }
        
    }
    public function updateParts($id, $nome){
        try {
            $sql = "UPDATE parts SET name = :name WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':nome',$nome);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    public function deleteParts($id){
        try {
            $sql = "DELETE FROM parts WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            return $stmt->rowCount() > 0;
            
        } catch (PDOException $e) {
            throw $e;
        }
    }
}

?>