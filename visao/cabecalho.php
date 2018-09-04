<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
</head>
<body>
	<ul>
		<img id="logo" title="Mercado" src="./publico/img/logo.png">
		<li><a href="index.php">Home</a></li>
		<li><a href="./produto/selectProduto">Todos os produtos</a></li>
		<?= $_SESSION["nome"] == "Admin" ? "<li><a href='formularioProduto.php'>Adicionar produto</a></li>": ""; ?>
		<?= $_SESSION["nome"] == "Admin" ? "<li><a href='PHP/selecionarAlterarProduto.php'>Alterar produto</a></li>": ""; ?>
		<?= $_SESSION["nome"] == "Admin" ? "<li><a href='PHP/selecionarProduto.php'>Deletar produto</a></li>": ""; ?>
		<?= $_SESSION["nome"] == "Admin" ? "": "<li><a href='contato.php'>Contato</a></li>"; ?>
		<?= $_SESSION["nome"] == "Logar" ? "<li><a href='./login/cadastro.visao.php'>Cadastrar</a></li>": ""; ?>
		<?php if ($_SESSION["nome"] != "Admin") : ?>
		<form id="busca">
			<?php //require 'pesquisa.php'; ?>
		</form>
		<?php endif; 
		$nome = $_SESSION['nome'];
		print_r($_SESSION);
		?>
		<li id="user"><?php $_SESSION["nome"] == "Logar" ? "<a href='login/index.visao.php'>Logar</a><!--" : "<a href='login/edit.visao.php'>$nome</a>"; ?>
			<ul id="sub">
				<?php $_SESSION["nome"] == "Admin" ? "" : "<li><a href='login/edit.visao.php'>Editar</a></li>"; ?>
				<li><a href="PHP/logout.php">Sair</a></li>
			</ul>
			<?php $_SESSION["nome"] == "Logar" ? "-->" : ""; ?>
		</li>
		<?php $_SESSION["nome"] != "Admin" ? "<a href='produto/carrinho.php'><img id='carrinho' src='publico/img/carrinho.png'></a>": ""; ?>
	</ul>
</body>
</html>