<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação de Peças</title>
    <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleParts.css">
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
            <span class="dp-list"> Sair </span>
        </div>
    </div>
  </header>
    
        
  <!-- Título da página  -->
    <div class="title">
    <h1 >
    Cotação de peças
    </h1>
    </div>
    
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
        
        <a href="./contact.php">
        <div class="nav-list">
            <img class="icon" src="./imgs/contact.png" title="Contatos"/>
        </div>
      </a>
    
    </div>
    
    <!-- Área de visualização das peças, para cotação -->
    <div class="container">
            <div class="header_container"> 
                    <div id="new-ticket">
                        <img src="./imgs/more.png" id="more" alt="Buscar" title="Adicionar Peça"/>
                    </div>
            </div>
            <div class="table-style">
                <table id="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>NOME PEÇA</th>
                        <th>QUANTIDADE</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>Gabriel</td>
                        <td>1</td>                     
                      </tr>
                    </tbody>
                  </table>   
            </div>
    </div>
    </div>   
 
    <!-- JANELA MODAL -->
    <div id="modal" class="modal">
      <div class="modal-content">
        <span class="close"><img  id='x-close' src="./imgs/x.png" /></span>
        <form>
          <label for="id">ID:</label>
          <input type="text" id="id" id="id"><br>
    
          <label for="name">Nome da peça:</label>
          <select id="name" name="name">
              <option >Seta Esquerda</option>
              <option >Bloco do Farol</option>
              <option >Manete Freio</option>
          </select><br>

          <label for="amount">Quantidade:</label>
          <input type="number" id="amount" name="amount"><br>
        
          <input id='save' type="submit" value="Salvar">
        </form>
      </div>
    </div>
    
     <!-- FUNDO MODAL ESCURO ENQUANTO ESTIVER ABERTO -->
     <div id='modal-background'> </div> 

    <script src="./script/scriptParts.js"></script>
</body>
</html>