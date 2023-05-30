<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "bancosystem";

$conn = new mysqli($servername,$username,$password, $dbname);

if($conn->connect_error){
    echo "Falha na conexão: ".$conn->connect_error;
}
?>