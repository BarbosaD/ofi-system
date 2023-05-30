<?php
session_start();
require_once 'connDb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);;
    $password = $_POST['password'];

    if(empty($username) || empty($password))
    {
        echo 'Por favor, preencha todos os campos';
    }
    else
    {
        $sql = "SELECT * FROM login where name = '$username' AND pass = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            $_SESSION['email'] = $username;
            header('Location: home.php');
            exit;
        } 
        else 
        {
            echo "Credenciais inválidas. Por favor, tente novamente.";
        }      
    }
}

$conn->close();

?>
