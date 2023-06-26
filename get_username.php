<?php
session_start();
require_once 'DbConnection.php';
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
}

try {
    $db = new DbConnection();
    $conn = $db->getConnection();

    $id = $_SESSION;

    $sql = "SELECT * FROM login WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id,PDO::PARAM_INT);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        #$username = $user['name'];
        $fullName = $user['name'];
        $nameParts = explode(' ',$fullName);
        #$username = $nameParts[0];
        $firstRwoNames = array_slice($nameParts, 0, 2);
        $username = implode(' ', $firstRwoNames);
        #$username = $firtsName['name'];
    } else {
        $username = "Usuário não encontrado";
    }

} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>