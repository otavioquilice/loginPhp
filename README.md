# loginPhp

Informações para implementação.

Configurar conexão com banco de dados no arquivo conexao.php

No banco de dados:

  Necessário uma tabela chamada usuarios(uname, pwd, id, nome, niveis_acesso_id, email);
    "uname" é o nome de usuario para login; 
    "pwd" é a senha;
    
   Necessário uma tabela chamada os(primeiro_nome, ultimo_nome, telefone, placa_veiculo, modelo_veiculo, valor_os, descricao, tipo_os);
  
 _____________________________________________________________________________________________
 Deixei paginas base como estrutura, podem ser mudadas de acordo com o front-end desejável. os.php, buscar.php, index.php;

Pagina de Login index.php: 
  No formulário de login é utilizado o método POST. 
    No imput do usuário o name="usuario".
    No imput do senha o name="senha".
    
  Pagina os.php:
    Se atentar com o formulário de cadastro quando mudar o front-end;
    
  pagina buscar.php:
    pode personalizar a busca de acordo com a necessidade;
    
 _____________________________________________________________________________________________

Sobre as demais paginas .php
conexao.php: cria a conexao com o banco de dados;
validarLogin.php: Faz a validação do usuario e senha digitados;
busca.php: Faz a consulta no banco de dados;
envia.php: Faz o cadastro de ordem de serviços;
  
 _____________________________________________________________________________________________

  
                  
                  
