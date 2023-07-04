// Obter a referência para a tabela
var table = document.getElementById("table");
    
// Adicionar uma linha à tabela
function addRow(id, name, email, phone, cpf) {
  var row = table.insertRow(-1); // Insere a linha no final da tabela
  
  // Células da linha
  var idCell = row.insertCell (0)
  var nameCell = row.insertCell(1);
  var emailCell = row.insertCell(2);
  var phoneCell = row.insertCell(3);
  var cpfCell = row.insertCell(4);
  var actionsCell = row.insertCell(5);
  
  // Preenche as células com os valores fornecidos
  idCell.innerHTML = id;
  nameCell.innerHTML = name;
  emailCell.innerHTML = email;
  phoneCell.innerHTML = phone;
  cpfCell.innerHTML = cpf;
  
  // Botões de ação
  var editButton = document.createElement("button");
  editButton.innerHTML = '<span> teste </span>'; // Ícone de editar
  editButton.addEventListener("click", function() {
    // Lógica para editar a linha
    // Implemente a funcionalidade desejada aqui
  });
  
  var deleteButton = document.createElement("button");
  deleteButton.innerHTML = '<i class="fas fa-trash"></i>'; // Ícone de excluir
  deleteButton.addEventListener("click", function() {
    // Lógica para excluir a linha
    // Implemente a funcionalidade desejada aqui
    table.deleteRow(row.rowIndex);
  });
  
  actionsCell.appendChild(editButton);
  actionsCell.appendChild(deleteButton);
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
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var cpf = document.getElementById("cpf").value;
  
  // Adicionar a nova linha à tabela
  addRow(id,name, email, phone, cpf);

  // Limpar os campos do formulário
  document.getElementById("id").value = "";
  document.getElementById("name").value = "";
  document.getElementById("email").value = "";
  document.getElementById("phone").value = "";
  document.getElementById("cpf").value = "";
  
  // Fechar o modal
  closeModal();
});


//Evento de busca na tabela
document.getElementById('searchContact').addEventListener('input', function() {
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
