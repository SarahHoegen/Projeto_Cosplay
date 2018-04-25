
<?php

require_once '../models/DBConnection.php';

$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$celular= $_POST['celular'];
$apelido= $_POST['apelido'];
$data_nasc= $_POST['data'];


$sql= mysql_query("INSERT INTO usuarios (nome,email,senha,celular,apelido,data) VALUES ('$nome' , '$email' , '$senha' , '$celular' , '$apelido' , '$data_nasc') " );
