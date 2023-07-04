

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
console.log(cells)

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
