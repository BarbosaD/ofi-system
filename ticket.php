<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordens de Serviços</title>
     
    <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleTicket.css">
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
    Ordens de Serviços 
</h1>
</div>

 <!-- Área de visualização dos tickets e container de navegação  --> 
<div class="center">
    
    <!-- Área de navegação -->
    <div class="nav"> 

    <a href="./home.php">
    <div class="nav-list">
        <img class="icon"src="./imgs/arrow-left-black.png" title="Menu Inicial"/>
    </div>
    </a>

    <a href="./parts.php">
    <div class="nav-list">
        <img class="icon"src="./imgs/cot.png" title="Contação de Peças"/>
    </div>
    </a>

    <a href="./contact.php">
    <div class="nav-list">
        <img class="icon"src="./imgs/contact.png" title="Contatos"/>
    </div>
    </a>

    </div>
    
    <!-- Área de visualização/busca dos tickets -->
    <div class="container">
            <div class="header_container"> 
                    <div id="search">
                        <input type="text" id="txt" placeholder="Buscar ticket..."/>
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
                        <th>Número de Ticket</th>
                        <th>Contato</th>
                        <th>Categoria</th>
                        <th>Início</th>
                        <th>Status</th>
                        <th>Placa</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>João</td>
                        <td>Troca de Peça</td>
                        <td>22/04/2023</td>
                        <td>Em andamento</td>
                        <td>KXU 8D73</td>
                        
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
        <label for="number-ticket">Número do Ticket:</label>
        <input type="text" id="number-ticket" name="number-ticket"><br>
  
        <label for="contact">Contato:</label>
        <input type="text" id="contact" name="contact"><br>
  
        <label for="category">Categoria:</label>
        <input type="text" id="category" name="category"><br>
  
        <label for="inicio">Início:</label>
        <input type="date" id="inicio" name="inicio"><br>
  
        <label for="status">Status:</label>
        <select id="status" name="status">
          <option >Em andamento</option>
          <option >Aguardando Cliente</option>
          <option >Concluído</option>
        </select><br>
  
        <label for="plate">Placa:</label>
        <input type="text" id="plate" name="plate"><br>
  
        <input id='save' type="submit" value="Salvar">
      </form>
    </div>
  </div>

   <!-- FUNDO MODAL ESCURO ENQUANTO ESTIVER ABERTO -->
   <div id='modal-background'> </div> 

  <script src="./script/scriptTicket.js"></script>
</body>
</html>