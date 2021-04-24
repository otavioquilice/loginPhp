<?php
    $servidor = "162.241.203.157";
    $usuario =  "showde53_ninja";
    $senha = "digite a senha";
    $dbname = "digite o banco";

    //Criar conexao 
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    };
?>
