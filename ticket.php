<?php
        $css = "./css/styleTicket.css" ;
        $title = "Ordens de Serviços";
        $script_pdf_1 = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.3/pdfmake.min.js"></script>';
        $script_pdf_2 = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.3/vfs_fonts.js"></script>';
        include 'header.php' ;
?>

        

<?php
$title_page = "Ordens de serviços";
include 'title.php';
?>


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
        <img class="icon"src="./imgs/cot.png" title="Cotação de Peças"/>
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
                    <div id="new-ticket" onclick="openModal()">
                        <img src="./imgs/more.png" class="more" alt="Buscar" title="Criar ticket"/>
                    </div>
            </div>
            <div class="table-style">
                <table id="table">
                    <thead>
                      <tr class='headerRow'>
                        <th>Número de Ticket</th>
                        <th>Contato</th>
                        <th>Descrição</th>
                        <th>Início</th>
                        <th>Status</th>
                        <th>Placa</th>
                        <th> # </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>João</td>
                        <td>Revisão</td>
                        <td>04/07/2023</td>
                        <td>Finalizado</td>
                        <td>YAG FD33</td>
                        <td>
                          <div class="icons-action">
                              <div id="btn-edit " onclick='openModalEdit()'>
                                  <img src="./imgs/edit.png" class="icon-act"/>
                              </div>
                              <div id="btn-delete" onclick='openModalDelete()'>
                                  <img src="./imgs/delete.png" class="icon-act"/>
                              </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>002</td>
                        <td>Gabriel</td>
                        <td>Troca de óleo - Yamalube 10w40 </td>
                        <td>04/07/2023</td>
                        <td>Em andamento</td>
                        <td>KXU 8D73</td>
                        <td>
                          <div class="icons-action">
                              <div id="btn-edit" onclick='openModalEdit() '>
                                  <img src="./imgs/edit.png" class="icon-act"/>
                              </div>
                              <div id="btn-delete" onclick='openModalDelete()'>
                                  <img src="./imgs/delete.png" class="icon-act"/>
                              </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>003</td>
                        <td>Gabriel</td>
                        <td> Instalação Eliminador de Rabeta </td>
                        <td>04/07/2023</td>
                        <td>Aguardando cliente</td>
                        <td>TRG 3DX3</td>
                        <td>
                          <div class="icons-action" >
                              <div id="btn-edit" onclick='openModalEdit()' >
                                  <img src="./imgs/edit.png" class="icon-act"/>
                              </div>
                              <div id="btn-delete" onclick='openModalDelete()'>
                                  <img src="./imgs/delete.png" class="icon-act"/>
                              </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>   
            </div>

    </div>
</div>   

<!-- MODAL ADICIONAR TICKET -->
<div id="modal" class="modal">
    <div class="modal-content">
      <div class="title-modal">
          <h4> Adicionar Nova Ordem de Serviço </h4>
      </div>
        <img  onclick='closeModal()' id='x-close' class='close' src="./imgs/x.png" />
      <form id='form'>

        <input type="hidden" id="id" value='004' ><br>
  
        <label for="contact">Contato:</label>
        <input type="text" id="contact" name="contact" placeholder='Selecione um Contato'><br>
  
        <label for="description">Descrição</label>
        <textarea type="text" id="description" name="description" > </textarea>
  
      
        <input type="hidden" id="inicio" name="inicio" value="04/07/2023" ><br>
  
        <label for="status">Status:</label>
        <select id="status" name="status">
          <option >Em andamento</option>
          <option >Aguardando cliente</option>
          <option >Finalizado</option>
        </select><br>
  
        <label for="plate">Placa:</label>
        <input type="text" id="plate" name="plate" placeholder='Placa de veículo'><br>
  
        <input id='save' type="submit" value="Salvar">
      </form>
    </div>
  </div>

  <!-- MODAL EXCLUIR CONTATO -->
<div id="modal-delete" class="modal">
  <div class="modal-content-dlt">
  <img src="./imgs/delete-msg.png" class='icon-dlt' />
  <span class='txt-dlt' > Tem certeza que deseja excluir o contato? </span>
  <button id="dlt-yes">
     Excluir
  </button>
  <button  onclick='closeModalDelete()' id="dlt-no">
     Cancelar
  </button>
  </div>
</div>

<!-- MODAL EDITAR CONTATO -->
<div id="modal-edit" class="modal">
  <div class="modal-content">
     <div class="title-modal">
          <h4> Editar Ordem de Serviço </h4>
      </div>
      <img onclick='closeModalEdit()' id='x-close-dlt' class='close' src="./imgs/x.png" />

      <form id='edit-form'>
              <input type="hidden" id="id" value='004' ><br>
          
          <label for="contact">Contato:</label>
          <input type="text" id="contact" name="contact" placeholder='Selecione um Contato'><br>

          <label for="description">Descrição</label>
          <textarea type="text" id="description" name="description" > </textarea>


          <input type="hidden" id="inicio" name="inicio" value="4/07/2023" ><br>

          <label for="status">Status:</label>
          <select id="status" name="status">
            <option >Em andamento</option>
            <option >Aguardando cliente</option>
            <option >Finalizado</option>
          </select><br>

          <label for="plate">Placa:</label>
          <input type="text" id="plate" name="plate" placeholder='Placa de veículo'><br>

          <input id='save' type="submit" value="Salvar">
    </form>
  </div>
</div>

   <!-- FUNDO MODAL ESCURO ENQUANTO ESTIVER ABERTO -->
   <div id='modal-background'> </div> 

   <?php
        $script="./script/scriptTicket.js";
        include 'footer.php';
    ?>