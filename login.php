<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once 'DbConnection.php';
    require_once 'CrudLogin.php';

    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);;
    $password = $_POST['password'];
    $senha = md5($password);
    $db = new DbConnection();
    $conn = $db->getConnection();

    $teste = new CrudLogin($db);
    $t = $teste->Read();

    if(empty($email) || empty($senha))
    {
        echo 'Por favor, preencha todos os campos';
    }
    else
    {
        //SELECT `id`, `name`, `email`, `pass` FROM `login` WHERE 1
        $sql = "SELECT * FROM login where email = :email AND pass = :pass";
        $result = $conn->prepare($sql);
        $result->bindParam(":email",$email, PDO::PARAM_STR);
        $result->bindParam(":pass",$senha, PDO::PARAM_STR);
        $result->execute();

        if ($result->rowCount() == 1 ) 
        {
            $_SESSION['email'] = $email;
            header('Location: home.php');
            exit;
        } 
        else 
        {
            echo "Credenciais inválidas. Por favor, tente novamente.";
        }      
    }
}

?>
