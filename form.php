<?php 

    if(isset($_POST['submit'])){
        include_once('config.php');

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        $envio = mysqli_query($con, "INSERT INTO formulario_test(nome, cpf, senha) VALUES('$nome', '$cpf', '$senha')");
    }
?>





<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST">

        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" class="input" placeholder="Seu nome">
        <label for="nome">Cpf: </label>
        <input type="text" id="cpf" name="cpf" class="input" placeholder="000.000.000-00">
        <label for="nome">Senha: </label>
        <input type="text" id="senha" name="senha" class="input" placeholder="Senha Segura"> 
        <input type="submit" id="submit" name="submit" class="input-submit"> 

    </form>
    
</body>
</html>