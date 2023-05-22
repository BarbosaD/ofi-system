<?php
        $css = "./css/styleParts.css" ;
        $title = 'Cotação de Peças';
        include 'header.php' ;
?>

    
        
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

     <?php
        $script="./script/scriptParts.js";
        include 'footer.php';
    ?>