<?php
        $css = "./css/styleParts.css" ;
        $title = 'Cotação de Peças';
        $script_pdf_1 = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.3/pdfmake.min.js"></script>';
        $script_pdf_2 = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.3/vfs_fonts.js"></script>';
        include 'header.php' ;
?>

    
        
<?php
        $title_page = "Cotação de Peças";
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
                        <img src="./imgs/more.png" class="more" alt="Buscar" title="Adicionar Peça"/>
                    </div>
                    <div class="export-pdf"> 
                      <img src="./imgs/pdf.png" class='icon-action' alt="Buscar" title="Exportar PDF"/>
                        <span class='title-button-export' > Exportar </span>
                    </div>
                    <div class="btn-print"> 
                      <img src="./imgs/printer.png" class='icon-action' alt="Buscar" title="Exportar PDF"/>
                        <span class='title-button-export' > Imprimir </span>
                    </div>
            </div>
            <div class="table-style">
                <table id="table">
                    <thead>
                      <tr>
                        <th>NOME PEÇA</th>
                        <th>QUANTIDADE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>BENGALA DIREITA</td>
                        <td>1</td>                     
                      </tr>
                    </tbody>
                  </table>   
            </div>
    </div>
    </div>   
 
    <!-- JANELA MODAL - ADICIONAR PEÇA -->
    <div id="modal" class="modal">
      <div class="modal-content">
        <div class="title-modal">
        <h4>Adicionar peça na cotação</h4>
        </div>
        <img  id="x-close" class='close' src="./imgs/x.png" />
        <form>
          <!-- <label for="id">ID:</label> -->
          <input type="hidden" id="id" id="id"><br>
    
          <label for="name">Nome da peça:</label>
          <input type="text" id="name" name="name"><br>

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