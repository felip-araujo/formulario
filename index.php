<?php

    if(isset($_POST['submit'])){
        include_once('config.php'); 

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $setor = $_POST['setor'];
        $tipo_colaborador = $_POST['tipo_colaborador'];
        $salario = $_POST['salario']; 

        $envio = mysqli_query($con, "INSERT INTO colaboradores(id, nome, email, telefone, setor, tipo_colaborador, salario) VALUES('$id', '$nome', '$email', '$telefone', '$setor', '$tipo_colaborador', '$salario')");
        if(!$envio){
            echo("Falha ao Enviar os Dados!");
        } else {
            echo ("Dados Enviados com Sucesso!");
        }
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body> 
    <div class="titulo" id="titulo"><h1>Cadastro de Colaboradores: </h1></div>
    <section class="sessao-formulario">
        <form action="colaboradores.php" class="formulario" method="post">
            
            <label for="id" class="label" id="label">Id: </label> 
            <input type="text" class="input" id="id" name="id"> 
            
            <label for="nome" class="label" id="label">Nome: </label> 
            <input type="text" class="input" id="nome" name="nome"> 
            
            <label for="email" class="label" id="label">E-mail: </label> 
            <input type="text" class="input" id="email" name="email"> 
            
            <label for="telefone" class="label" id="label">Telefone: </label> 
            <input type="text" class="input" id="telefone" name="telefone"> 
            
            <label for="setor" class="label" id="label">Setor: </label> 
            <input type="text" class="input" id="setor" name="setor"> 
            
            <label for="tipo_colaborador" class="label" id="label">Tipo de Colaborador: </label> 
            <input type="text" class="input" id="tipo_colaborador" name="tipo_colaborador"> 
            
            <label for="salario" class="label" id="label">Salario</label> 
            <input type="text" class="input" id="salario" name="salario">  

            <input type="submit" class="input-btn" id="submit" name="submit">

        </form>
    </section>

</body>

</html>
