<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos - OfiSystem</title>
    <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleContact.css">
</head>
<body>
=======
<?php
        $css = "./css/styleContact.css" ;
        $title = 'Contatos';
        include 'header.php' ;
?>
>>>>>>> 01e0efd2825443d4cb5c7124f724755e6686894b

        
<?php
        $title_page = "Contatos";
        include 'title.php';
?>

    
   <!-- Área de visualização dos contatos e container de navegação  --> 
    <div class="center">
    
    <!-- Área de navegação -->
    <div class="nav"> 
    
      <a href="./home.php">
      <div class="nav-list">
          <img class="icon"src="./imgs/arrow-left-black.png" title="Menu Inicial"/>
      </div>
      </a>
      
      <a href="./ticket.php">
      <div class="nav-list">
          <img class="icon" src="./imgs/os.png" title="Ordens de Serviços"/>
      </div>
      </a>
      
      <a href="./parts.php">
      <div class="nav-list">
          <img class="icon"src="./imgs/cot.png" title="Cotação de Peças"/>
      </div>
      </a>
    
    </div>
    <!-- Área de visualização/busca dos contatos -->
    <div class="container">
            <div class="header_container"> 
                    <div id="search">
                        <input type="text" id="txt" placeholder="Buscar contato..."/>
                        <img src="./imgs/lupa.png" id="lupa" alt="Buscar"/>
                    </div>
                    <div id="new-ticket">
                        <img src="./imgs/more.png" id="more" alt="Buscar" title="Criar ticket"/>
            </div>
            </div>
            <div class="table-style">
                <table id="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>Gabriel</td>
                        <td>99744460</td>
                        <td>01716188732</td>
                      
                      </tr>
                    </tbody>
                  </table>   
            </div>
    </div>
    </div>   

<!-- MODAL -->
<div id="modal" class="modal">
  <div class="modal-content">
    <span class="close"><img  id='x-close' src="./imgs/x.png" /></span>
    <form>
      <label for="id">ID:</label>
      <input type="text" id="id" id="id"><br>

      <label for="name">Nome:</label>
      <input type="text" id="name" name="name"><br>

      <label for="number">Número:</label>
      <input type="text" id="number" name="number"><br>

      <label for="cpf">CPF:</label>
      <input type="tel" id="cpf" name="cpf"><br>
      <input id='save' type="submit" value="Salvar">
    </form>
  </div>
</div>

 <!-- FUNDO MODAL ESCURO ENQUANTO ESTIVER ABERTO -->
 <div id='modal-background'> </div> 

<<<<<<< HEAD

<script src="./script/scriptContact.js"></script>
</body>
</html>

<?php
//session_start();

?>
=======
 <?php
        $script="./script/scriptContact.js";
        include 'footer.php';
    ?>
>>>>>>> 01e0efd2825443d4cb5c7124f724755e6686894b
