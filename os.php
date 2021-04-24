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
	<meta charset="utf-8" />
	<title>O.S Tapeçaria Ninja</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-true" style="background-color:#9f9f9f">



<!-- Start Formoid form-->
<link rel="stylesheet" href="busca_files/formoid1/formoid-metro-cyan.css" type="text/css" />
<script type="text/javascript" src="busca_files/formoid1/jquery.min.js"></script>
<form action="envia.php" method="GET" class="formoid-metro-cyan" style="background-color:#e8e8e8;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#151515;max-width:480px;min-width:150px"><div class="title"><h2>O.S Tapeçaria Ninja</h2></div>
	<div class="element-name"><label class="title">Name<span class="required">*</span></label><span class="name_first"><input  type="text" size="8" name="nome_first" required="required"/><label class="subtitle">Primeiro</label></span><span class="name_last"><input  type="text" size="14" name="nome_last" required="required"/><label class="subtitle">Ultimo</label></span></div>
	<div class="element-phone"><label class="title">TELEFONE DE CONTATO<span class="required">*</span></label><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="telefone" required="required" value=""/></div>
	<div class="element-input"><label class="title">PLACA DO VEICULO<span class="required">*</span></label><input class="large" type="text" name="placa_veiculo" required="required"/></div>
	<div class="element-input"><label class="title">MODELO DO VEICULO<span class="required">*</span></label><input class="large" type="text" name="modelo_veiculo" required="required"/></div>
	<div class="element-input"><label class="title">VALOR ORÇAMENTO R$<span class="required">*</span></label><input class="large" type="text" name="valor_os" required="required"/></div>
	<div class="element-input"><label class="title">TIPO DE ORDEM<span class="required">*</span></label><input class="large" type="text" name="tipo_os" required="required"/></div>
	<div class="element-textarea"><label class="title">DESCRIÇÃO SOBRE O SERVIÇO<span class="required">*</span></label><textarea class="medium" name="descricao" cols="20" rows="5" required="required"></textarea></div>
<div class="submit"><input type="submit" value="Submit"/></div>
<button><a href='busca.php'>Pesquisar Dados</a> </button>
    <button><a href='sair.php'>Sair</a> </button>
</form><p class="frmd"><a href="http://formoid.com/v29.php">bootstrap form</a> Formoid.com 2.9</p><script type="text/javascript" src="busca_files/formoid1/formoid-metro-cyan.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
