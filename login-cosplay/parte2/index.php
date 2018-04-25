<?php

    session_start();

        if(!isset($_SESSION['usuario_online']) OR !($_SESSION['usuario_online'] == true) ){
             header('Location: login.php');
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair">sair</a>



		<h3>Bem vindo <?=  $_SESSION['usuario_nome']; ?>!</h3>
	</div>

</body>
</html>



