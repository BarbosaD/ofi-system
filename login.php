<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once 'DbConnection.php';
    require_once 'CrudLogin.php';
    require_once 'CrudTicket.php';

    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);;
    $password = $_POST['password'];
    $senha = md5($password);
    $db = new DbConnection();
    $conn = $db->getConnection();

    $crudConn = new CrudLogin($db);

    if(empty($email) || empty($senha))
    {
        //$ticked = new CrudTicket($db);
        //$ticketId = $ticked->createTicket("João Vitor","Teste Descrição","MVJP65V",);
        //echo "Ticket criado com ID: " . $ticketId;
        echo 'Por favor, preencha todos os campos';
    }
    else
    {
        $login = $crudConn->ValidateUser($email, $senha);
        if ($login == 1 ) 
        {
            $_SESSION['email'] = $email;
            header('Location: home.php');
        } 
        else 
        {
            echo "Credenciais inválidas. Por favor, tente novamente.";
        }      
    }
}

?>
