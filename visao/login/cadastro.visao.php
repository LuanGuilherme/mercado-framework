<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<?php require '../cabecalho.php'; ?>
	<div class="cadastro">
	<h1>Cadastro</h1><br>
		<?php require 'usuario/formulario.visao.php'; ?>
	</div>
	<?php require '../rodape.php'; ?>
</body>
</html>
<script>
function validacao(){
	senha = document.form.senha.value
	senhad = document.form.senhad.value
	if (senha != senhad){
		alert ('As senhas devem ser iguais!');
		document.form.getElementById('senhad').focus();
		document.getElementById('form').action = "";
	}else{
		document.getElementById('form').action = <?php addCliente($_POST["nome"], $_POST["email"], $_POST["idade"], $_POST["endereco"], $_POST["senha"], $_POST["cpf"]); ?>;
	}
}
</script>
