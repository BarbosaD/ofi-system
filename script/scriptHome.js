//Código destinado a mostrar e ocultar o menu drop down:

//Seleciona a div correspodente que irá "receber" a ação do click, e mostrar o menu
const info = document.getElementById('arrow')

//Seleciona o menu drop down
const dropDown = document.getElementById('dropdown')

//Adiciona um listener de "click" na nossa div escolhida
info.addEventListener('click', () => {

    //Exibe o menu
    dropDown.style.visibility = "visible"
})

//Adiciona um listener de "click" no documento como um todo, para minimizar o menu quando clicar fora da div correspodente
document.addEventListener('click', function(event) {

    
    const targetElement = event.target // armazena o elemento clicado

     // verifica se o elemento clicado não é a div específica
    if (info === targetElement) {
        dropDown.style.visibility = "visible"
    } else {
        dropDown.style.visibility = "hidden"     
    }
    
})