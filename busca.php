<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   
} else {
    //Váriavel global recebendo a mensagem de erro
    $_SESSION['loginErro'] = "Insira um login e senha validos";
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>

	<title>Busca de Ordem de Serviço</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="blurBg-false" style="background-color:#EBEBEB">



	<!-- Start Formoid form-->
	<link rel="stylesheet" href="busca_files/formoid1/formoid-solid-green.css" type="text/css" />
	<script type="text/javascript" src="busca_files/formoid1/jquery.min.js"></script>
	<form class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" action="buscar.php" method="POST">
		<div class="title">
			<h2>Busca de Frequentadores</h2>
		</div>
		<div class="element-multiple"><label class="title"></label>
			<div class="item-cont">
				<div class="large">
					<select data-no-selected="Selecione uma opção" name="op_busca" >						
					
						<option value="selecione">Selecione</option>
						<option value="id">Ordem de Serviço</option>
						<option value="placa_veiculo">Placa do veiculo</option>
						<option value="modelo_veiculo">Modelo do Veiculo</option>
						<option value="telefone">Telefone</option>
						<option value="nome_first">Primeiro Nome</option>
						<option value="nome_last">Sobrenome</option>
						<option value="date">Data</option>
					</select><span class="icon-place"></span></div>
			</div>
		</div>
		<div class="element-input"><label class="title"></label>
			<div class="item-cont"><input class="large" type="text" name="valor_digitado" placeholder="Digite " /><span
					class="icon-place"></span></div>
		</div>
		<div class="submit"><input type="submit" value="Submit" /></div>
		
		<button><a href='os.php'>Voltar Cadastro de OS</a> </button>
		<script type="text/javascript" src="busca_files/formoid1/formoid-solid-green.js"></script>
	</form>
	<br>
	<a href="sair.php">Sair</a>
	<script type="text/javascript" src="busca_files/formoid1/formoid-solid-green.js"></script>
	<!-- Stop Formoid form-->



</body>

</html>