<?php
    session_start();   
    unset(
        $_SESSION['userId'],
        $_SESSION['userNome'],
        $_SESSION['userNiveisAcessoId'],
        $_SESSION['userEmail'],
        $_SESSION['userSenha'],
        $_SESSION['resultado1'],
        $_SESSION['sessao'],
        $_SESSION['logado']
    );   
    $_SESSION['deslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: index.php");
?>