<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styleHome.css">
    <title>Home</title>
</head>
<body>

    <!-- Cabeçalho da página, onde apresenta o usuário logado -->
    <header>
            <div class="header">
                <div id="info">
                    <img id="avatar" src="./imgs/avatar.png"/>
                    <span id="user"> Kairos </span>
                    <img id="arrow" src="./imgs/down-arrow.png"/>
                </div>
                <div id="dropdown">
                    <a href="logout.php"> Sair </a>
                    <!--span class="dp-list"> Sair </span-->
                </div>
            </div>
    </header>

    <!-- Área central da página, onde apresenta a logo e as opções do sistema -->
    <div class="center">
        <img id="logo" src="./imgs/Logo Ofi.png"/>


        <div class="list">

            <li><a href="./ticket.php"><button>
                <img class='icons' src="./imgs/os.png"/>ORDENS DE SERVIÇOS</button></a></li>


            <li><a href="./parts.php">  <button>
                <img class='icons' src="./imgs/cot.png"/>COTAÇÃO DE PEÇAS</button>
                </a></li>

            <li ><a href="./contact.php"><button id = 'contact'>
                <img class='icons' src="./imgs/contact.png"/>CONTATOS</button></a></li>
        </div>    


    </div>

<script src="./script/scriptHome.js"></script>    
</body>
</html>


