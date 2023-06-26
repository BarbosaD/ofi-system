<?php
        $css = "./css/styleContact.css" ;
        $title = 'Contatos';
        include 'header.php' ;
?>

        
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
                        <img src="./imgs/more.png" class="more" alt="Buscar" title="Criar ticket"/>
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

<!-- MODAL ADICIONAR CONTATO -->
<div id="modal" class="modal">
  <div class="modal-content">
     <div class="title-modal">
          <h4> Adicionar Contato </h4>
      </div>
      <img  id='x-close' class='close' src="./imgs/x.png" />

      <form>
      <label for="id"></label>
      <input type="hidden" id="id" ID><br>

      <label for="name">Nome:</label>
      <input type="text" id="name" name="name" ><br>

      <label for="number">Número (Tel):</label>
      <input type="text" id="number" name="number"><br>

      <label for="number">E-mail:</label>
      <input type="text" id="number" name="number"><br>

      <label for="cpf">CPF:</label>
      <input type="tel" id="cpf" name="cpf"><br>
      <input id='save' type="submit" value="Salvar">
    </form>
  </div>
</div>

 <!-- FUNDO MODAL ESCURO ENQUANTO ESTIVER ABERTO -->
 <div id='modal-background'> </div> 

 <?php
        $script="./script/scriptContact.js";
        include 'footer.php';
    ?>
