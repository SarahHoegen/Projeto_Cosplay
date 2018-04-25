<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>cadastro</title>
</head>
<body>

<div class="form-login">

    <form method="post" action="cadastrando.php">
        Nome
        <br />
        <input type="text"     name="nome" placeholder="digite seu nome completo">
        <br />
        Email
        <input type="text"     name="email" placeholder="digite seu email">
        <br/>
        Senha
        <input type="password" name="senha" placeholder="digite sua senha">
        <br />
        Número
        <input type="text"     name="celular" placeholder="digite seu numero">
        <br>
        Apelido
        <input type="text"     name="apelido" placeholder="digite seu apelido">
        <br />
        Data de nascimento
        <input type="text"     name="data" placeholder="digite a data de seu nascimento">

        <br>
        <input type="submit"   name="cadastro" value="Cadastrar">

    </form>

</div>

</body>
</html>