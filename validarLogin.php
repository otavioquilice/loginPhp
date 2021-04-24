<?php
    session_start();   
        
    include_once("conexao.php");   //Incluindo a conexão com banco de dados 

    // Campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']); 
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);
        
        //Buscar na tabela usuario um usuario existente
        $result_usuario = "SELECT * FROM usuarios WHERE uname = '$usuario' && pwd = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrando um usuário então passa no if e as variaveis globais recebem valores
        if(isset($resultado)){
            $_SESSION['userId'] = $resultado['id'];
            $_SESSION['userNome'] = $resultado['nome'];
            $_SESSION['userNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            $_SESSION['userEmail'] = $resultado['email'];
            $_SESSION['logado'] = true;
            
            if($_SESSION['userNiveisAcessoId'] == "1"){
                header("Location: os.php");
            }

            //caso tenha mais um tipo de acesso, então validar de acordo com o nivel de acesso
            //Segue exemplo abaixo

            /**elseif($_SESSION['userNiveisAcessoId'] == "2"){
                header("Location: colaborador.php");
            }else{
                header("Location: cliente.php");
            }
            **/

        //Se não encontrar nenhum usuário na validação com os dados digitados será redirecionado o usuario para a página de login e tentar o acesso novamente.
        
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['erroLogin'] = "Usuário ou senha Inválido";
            header("Location: index.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['erroLogin'] = "Usuário ou senha inválido";
        header("Location: index.php");
    }
?>