<?php


//<h2>Inserir</h2>
//
//
//<form method="post" action="?acao=inserir">
//
//
//    <input type="text" name="nome" id="nome"/>
//    <br>
//    <label for="descricao">Descricao</label>
//    <textarea name="descricao" id="descricao" cols="30" rows="3"> </textarea>
//    <br>
//    <input type="submit" name="gravar" value="gravar">
//</form>

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>cadastro</title>
</head>
<body>

<div class="form-login">

    <form method="post" action="?acao=cadastrar">
        <label for="nome">Nome</label>
        <br>
        <input type="text"     name="nome" placeholder="digite seu nome completo">
        <br><br>
        <label for="email">Email</label>
        <br>
        <input type="text"     name="email" placeholder="digite seu email">
        <br><br>
        <label for="senha">Senha</label>
        <br>
        <input type="password" name="senha" placeholder="digite sua senha">
        <br><br>
        <label for="numero">Número</label>
        <br>
        <input type="text"     name="celular" placeholder="digite seu numero">
        <br><br>
        <label for="apelido">Apelido</label>
        <br>
        <input type="text"     name="apelido" placeholder="digite seu apelido">
        <br><br>
        <label for="data">Data de nascimento</label>
        <br>
        <input type="date"     name="data_nasc" placeholder="digite a data de seu nascimento">

        <br><br>
        <input type="submit"   name="cadastrar" value="Cadastrar">

    </form>

</div>

</body>
</html