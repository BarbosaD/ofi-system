
<form action="login.php">
    <div id="session">
        <img id="avatar" src="./imgs/avatar.png"/>
        <span id="user"><?php include 'get_username.php'; echo $username; ?></span>
        <img id="arrow" src="./imgs/down-arrow.png"/>
    </div>
</form>
<a href="logout.php">
    <div id="dropdown"> 
        <span class="dp-list"> Sair </span>
    </div>
</a>

<!--form action="Name.php">
    <div id="session">
        <img id="avatar" src="./imgs/avatar.png"/>
        <span id="user"> edilberto </span>
        <img id="arrow" src="./imgs/down-arrow.png"/>
    </div>
</form>
<a href="logout.php">
    <div id="dropdown"> 
        <span class="dp-list"> Sair </span>
    </div>
</a>

