<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OfiSystem - Login</title>
    <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styleLogin.css">
</head>
<body>
    
      <!-- CÓDIGO DESTINADO A "CAIXA" DE LOGIN-->
        <div class="boxlogin">
                <img id="logo_login" src="./imgs/Logo Ofi.png"/>
                <!-- ÁREA DO FORMULÁRIO -->
                <form action="login.php" method="post">

                <!--input type="text" name="username" placeholder="Nome de usuário"><br>
                <input type="password" name="password" placeholder="Senha"><br>
                <input type="submit" value="Login"-->
                    <div class="field">
                    <label for="email"> E-mail</label>
                    <input  type="email" id="email" name="email"
                    placeholder="kairin@ifes.com.br"/>
                    </div>

                    <div class="field">

                    <label id="password" for="password"> Senha </label>
                    <input  type="password" id="password" name="password"
                    placeholder="Digite sua senha"/>
                    </div>

                    <button> Login </button>
                    <a id ="password" href="#"> <p> Esqueci a senha</p></a>
                 </form>
        </div>
    </div>    
        

</html>

<?php
require_once 'login.php';
// Verifica se o botão de logout foi clicado
//if (isset($_POST['email'])) {
//   header('Location: home.php');
//   exit;
//}
//echo ' Bem-vindo,'.$_SESSION['email']. '! Esta é a pagina home.';
//$nome = filter_input(INPUT_POST,'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
///$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
//$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);


?>