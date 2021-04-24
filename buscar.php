<?php
	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
session_start();
    
// conecta ao banco de dados
include_once("conexao.php");

// cria a instrução SQL que vai selecionar os dados


if ( ! empty( $_POST ) ) {
    
    $op_busca=$_POST['op_busca'];
    $valor_digitado=$_POST['valor_digitado'];
    
    $consulta = "SELECT * FROM os 
    WHERE $op_busca LIKE '%$valor_digitado%'
    ORDER BY $op_busca ASC";
    
    $resultado_pesquisa = mysqli_query($conn, $consulta);
    
} else {
        
  // Se nada for postado, aparece a mensagem
  echo 'Não foi postado informação.'. '<br>';
}


?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Busca de Ordem de Serviço</title>
	
	
</head>

<body>
    <div class="title">
		<h2>Resultado de Pesquisa</h2>
	</div>
	<div class="element-multiple"><label class="title"></label>
		<div class="item-cont">
			<div class="large">
                <table border="2">
                    <tr>
                        <td>Primeiro Nome</td>
                        <td>Ultimo Nome</td>
                        <td>Telefone</td>
                        <td>Placa Veiculo</td>
                        <td>Modelo Veiculo</td>
                        <td>Valor O.S</td>
                        <td>Descrição</td>
                        <td>Ordem de Serviço</td>
                        <td>Tipo de Serviço</td>
                        <td>Data</td>
                    </tr>    
                <?php while($dado = $resultado_pesquisa->fetch_array()){ ?>
                <tr>
                    <td><?php echo $dado['primeiro_nome']; ?></td>
                    <td><?php echo $dado['ultimo_nome']; ?></td>
                    <td><?php echo $dado['telefone']; ?></td>
                    <td><?php echo $dado['placa_veiculo']; ?></td>
                    <td><?php echo $dado['modelo_veiculo']; ?></td>
                    <td><?php echo $dado['valor_os']; ?></td>
                    <td><?php echo $dado['descricao']; ?></td>
                    <td><?php echo $dado['tipo_os']; ?></td>
                    <td><?php echo $dado['id']; ?></td>
                    <td><?php echo $dado['date']; ?></td>
                </tr>    
                <?php } ?>   
                </table>
                
                
                
                </div>
                </div></div>
    
  <br>
  <button><a href='busca.php'>Voltar Cadastro de OS</a> </button>
  <button><a href='sair.php'>Deslogar</a> </button>
    

    

    
</body>
</html>
