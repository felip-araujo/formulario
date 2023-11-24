<?php 

    $host = '162.241.203.8'; 
    $user = 'felp_dev';
    $password = '$senhadev';
    $dbname = 'evolud85_colab'; 

    $con = mysqli_connect($host, $user, $password, $dbname);
    if(!$con){
        echo("Falha ao Conectar");
    } else {
        echo("Conectado com Sucesso");
    }

?>