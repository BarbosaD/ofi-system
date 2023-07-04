// Obter a referência para a tabela
var table = document.getElementById("table");
    
// Adicionar uma linha à tabela
function addRow(id, contact, description, inicio, status, plate) {
  var row = table.insertRow(-1); // Insere a linha no final da tabela
  
  // Células da linha
  var idCell = row.insertCell (0)
  var contactCell = row.insertCell(1);
  var descriptionCell = row.insertCell(2);
  var inicioCell = row.insertCell(3);
  var statusCell = row.insertCell(4);
  var plateCell = row.insertCell(5);
  var actionsCell = row.insertCell(6);

  // Preenche as células com os valores fornecidos
  idCell.innerHTML = id;
  contactCell.innerHTML = contact;
  descriptionCell.innerHTML = description;
  inicioCell.innerHTML = inicio;
  statusCell.innerHTML = status;
  plateCell.innerHTML = plate;
  
  // Botões de ação
  var iconsActions = document.createElement("div");
  iconsActions.innerHTML ='<div class="icons-action">' +
                            '<div id="btn-edit">' +
                                '<img src="./imgs/edit.png" class="icon-act"/>' +
                            '</div>' +
                           '<div id="btn-delete">' +
                              '<img src="./imgs/delete.png" class="icon-act"/>' +
                           '</div>' +
                          '</div>';
  
  actionsCell.appendChild(iconsActions);
}

// Abrir o modal
function openModal() {
  document.getElementById("modal").style.display = "block";
  document.getElementById("modal-background").style.display = "block";
}

// Fechar o modal
function closeModal() {
  document.getElementById("modal").style.display = "none";
  document.getElementById("modal-background").style.display = "none";
}

// Manipular o envio do formulário
document.getElementById("form").addEventListener("submit", function(event) {
  event.preventDefault(); // Impede o envio do formulário
  
  // Obter os valores do formulário
  var id = document.getElementById("id").value;
  var contact = document.getElementById("contact").value;
  var description = document.getElementById("description").value;
  var inicio = document.getElementById("inicio").value;
  var status = document.getElementById("status").value;
  var plate = document.getElementById("plate").value;
  
  // Adicionar a nova linha à tabela
  addRow(id,contact, description, inicio, status, plate);

  // Limpar os campos do formulário
  document.getElementById("id").value = "";
  document.getElementById("contact").value = "";
  document.getElementById("description").value = "";
  document.getElementById("inicio").value = "";
  document.getElementById("status").value = "";
  document.getElementById("plate").value = "";
  
  // Fechar o modal
  closeModal();

});




//Evento de busca na tabela
document.getElementById('txt').addEventListener('input', function() {
  var filter = this.value.toLowerCase();
  var table = document.getElementById('table');
  var rows = table.getElementsByTagName('tr');

  for (var i = 0; i < rows.length; i++) {
    if (rows[i].classList.contains('headerRow')) {
      // Pula a iteração se a linha for o cabeçalho
      continue;
    }

    var cells = rows[i].getElementsByTagName('td');
    var found = false;

    for (var j = 0; j < cells.length; j++) {
      var cellText = cells[j].innerText || cells[j].textContent;

      if (cellText.toLowerCase().indexOf(filter) > -1) {
        found = true;
        break;
      }
    }

    rows[i].style.display = found ? '' : 'none';
  }
});

// Obtém todos os elementos <td> que contêm o status
const cells = document.querySelectorAll('td');

// Itera sobre os elementos e adiciona a classe correta de acordo com o valor do status
cells.forEach(cell => {
  if (cell.textContent.trim() === 'Aguardando cliente') {
    cell.classList.add('aguardando');
  } else if (cell.textContent.trim() === 'Em andamento') {
    cell.classList.add('em-andamento');
  } else if (cell.textContent.trim() === 'Finalizado') {
    cell.classList.add('finalizado');
  }
});

//Código destinado a exibir e ocultar o menu drop down:

//Seleciona a div correspodente que irá "receber" a ação do click, e mostrar o menu
const info = document.getElementById('arrow');

//Seleciona o menu drop down
const dropDown = document.getElementById('dropdown');

//Adiciona um listener de "click" na nossa div escolhida
info.addEventListener('click', () => {

    //Exibe o menu
    dropDown.style.visibility = "visible";
})

//Adiciona um listener de "click" no documento como um todo, para minimizar o menu quando clicar fora da div correspodente
document.addEventListener('click', function(event) {

    
  const targetElement = event.target // armazena o elemento clicado

   // verifica se o elemento clicado não é a div específica
  if (info === targetElement) {
      dropDown.style.visibility = "visible";
  } else {
      dropDown.style.visibility = "hidden" ;    
  }
  
});

// Abrir o modal delete
function openModalDelete() {
  document.getElementById("modal-delete").style.display = "block";
  document.getElementById("modal-background").style.display = "block";
}


// Fechar o modal delete
function closeModalDelete() {
  document.getElementById("modal-delete").style.display = "none";
  document.getElementById("modal-background").style.display = "none";
}


// Abrir o modal Editar
function openModalEdit() {
  document.getElementById("modal-edit").style.display = "block";
  document.getElementById("modal-background").style.display = "block";
}

// Fechar o modal Editar
function closeModalEdit() {
  document.getElementById("modal-edit").style.display = "none";
  document.getElementById("modal-background").style.display = "none";
}