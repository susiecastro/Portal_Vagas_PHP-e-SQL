
<?php

$servername = "localhost";
$username = "banco_vagas";
$password = "123456";
$dbname = "bancodevagas";
$conexaobd = new MySQLi($servername,$username, $password, $dbname);
if($conexaobd->connect_error){
   echo "Erro de conexão com o servidor! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "";
}
?>



