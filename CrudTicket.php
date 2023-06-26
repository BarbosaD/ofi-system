<?php

class CrudTicket {
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db->getConnection();
    }

    public function createTicket($name, $description, $plate){
        try
        {
            date_default_timezone_set('America/Sao_Paulo');
            $currentTime = date('d/m/Y H:i:s', strtotime('now')); // Obtém a data e hora atualizada formatada 
            $sql = "INSERT INTO ticket(name, description, plate, stardate) 
            VALUES (:name, :description, :plate, :stardate)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":plate", $plate);
            $stmt->bindParam(":stardate", $currentTime);
            $stmt->execute();

            return $this->conn->lastInsertId();

        }catch(PDOException $e){
            echo "Erro ao criar o ticket: asdasdas ".$e->getMessage();
        }
    }

    public function getTicket($id){
        try
        {
            $sql = "SELECT * FROM ticket WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt ->bindParam(':id', $id);
            $stmt ->execute();
            return $stmt-> fetch(PDO:: FETCH_ASSOC);
        }
        catch (PDOException $e)
        {
            echo "Erro ao buscar ticket: ".$e->getMessage();
        }
    }

    public function updateTicket (){

    }

    public function deleteTicket($id){
        $sql = "DELETE FROM ticket WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt ->bindParam(':id', $id);
        $stmt ->execute();

        echo "Ticket excluído com sucesso: ".$id;
    }
}

?>