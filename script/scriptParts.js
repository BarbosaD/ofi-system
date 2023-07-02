//Seleciona a div correspodente ao fundo escuro
const modalBackground = document.getElementById('modal-background')

// Seleciona o botão/img "Adicionar Contato"
const newTicketButton = document.getElementById("new-ticket")

// Seleciona o modal e o botão "Fechar"
const modal = document.getElementById("modal");
const close = document.getElementsByClassName("close")[0];

// Adiciona um listener de click no botão "Criar Ticket"
newTicketButton.addEventListener
("click", () => {
  // Abre o modal
  modal.style.display = "flex";
  // "Adiciona" o fundo escuro, para melhor visibilidade do modal
  modalBackground.style.display ="block"  
});

// Adiciona um listener de click no botão "Fechar"
close.addEventListener("click", () => {
  // Fecha o modal
  modal.style.display = "none";
  // Retira o fundo escuro
  modalBackground.style.display ="none" 
});

// Adiciona um listener de submit no formulário do modal
const form = document.querySelector("#modal form");
form.addEventListener("submit", (event) => {
  event.preventDefault();

  // Pega os valores dos campos do formulário
  // const idPart = document.getElementById("id").value;
  const namePart = document.getElementById("name").value;
  const amount = document.getElementById("amount").value;
  
  // Cria uma nova linha na tabela com os valores preenchidos
  const table = document.getElementById("table").getElementsByTagName("tbody")[0];
  const newRow = table.insertRow(-1);
  // const cellIdPart = newRow.insertCell(0);
  const cellNamePart = newRow.insertCell(0);
  const cellAmount = newRow.insertCell(1);
  
  // cellIdPart.innerHTML = idPart;
  cellNamePart.innerHTML = namePart;
  cellAmount.innerHTML = amount;


  // Retira o fundo escuro
  modalBackground.style.display ="none"

  // Fecha o modal
  modal.style.display = "none";
  
  // Limpa os campos do formulário
  form.reset();
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

//BOTÃO COM FUNÇÃO DE EXPORTAR PDF
  document.querySelector(".export-pdf").addEventListener("click", function() {
    var table = document.getElementById("table");
    var rowData = [];
    
    for (var i = 0; i < table.rows.length; i++) {
      var row = table.rows[i];
      var rowDataItem = [];
      
      for (var j = 0; j < row.cells.length; j++) {
        var cellText = row.cells[j].innerText.trim();
        if (cellText !== "") {
          rowDataItem.push(cellText);
        }
      }
      
      if (rowDataItem.length > 0) {
        rowData.push(rowDataItem);
      }
    }
  
    var docDefinition = {
      content: [
        { text: 'Cotação de Peças', style: 'header' },
        {
          table: {
            widths: ['*', '*', '*'], 
            body: [
              ...rowData
            ],
          }
        }
      ],
      styles: {
        header: {
          fontSize: 18,
          bold: true,
          margin: [0, 0, 0, 10]
        }
      },
      pageOrientation: 'landscape' 
    };

    pdfMake.createPdf(docDefinition).download("cotacao.pdf");
  });


//BOTÃO COM FUNÇÃO DE IMPRIMIR
document.querySelector(".btn-print").addEventListener("click", function() {
  let originalContents = document.body.innerHTML;
  document.body.innerHTML = document.getElementById("table").outerHTML;
  window.print();
  document.body.innerHTML = originalContents;
});

