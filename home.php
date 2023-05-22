
    <?php
        $css = "./css/styleHome.css" ;
        $title = 'Home';
        include 'header.php' ;
    ?>

    <!-- Área central da página, onde apresenta a logo e as opções do sistema -->
    <div class="center">
        <img id="logo" src="./imgs/Logo Ofi.png"/>


        <div class="list">
            <li><a href="./ticket.php">
                <button>
                <img class='icons' src="./imgs/os.png"/>ORDENS DE SERVIÇOS</button></a></li>


            <li><a href="./parts.php">  <button>
                <img class='icons' src="./imgs/cot.png"/>COTAÇÃO DE PEÇAS</button>
                </a></li>

            <li ><a href="./contact.php"><button id = 'contact'>
                <img class='icons' src="./imgs/contact.png"/>CONTATOS</button></a></li>
        </div>    
    </div>

    <?php
        $script="./script/scriptHome.js";
        include 'footer.php';
    ?>

    <script src="./script/scriptHome.js"></script>     
