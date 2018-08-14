<?php 
@session_start();
if (!function_exists('conexao')){
	require 'PHP/cnx.php';
}
require 'clineteControlador.php';
visualizarCliente();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
</head>
<body>
	<ul>
		<img id="logo" title="Mercado" src="logo.png">
		<li><a href="index.php">Home</a></li>
		<li><a href="listarProduto.php">Todos os produtos</a></li>
		<?php $nome == "Admin" ? "<li><a href='formularioProduto.php'>Adicionar produto</a></li>": ""; ?>
		<?php $nome == "Admin" ? "<li><a href='PHP/selecionarAlterarProduto.php'>Alterar produto</a></li>": ""; ?>
		<?php $nome == "Admin" ? "<li><a href='PHP/selecionarProduto.php'>Deletar produto</a></li>": ""; ?>
		<?php $nome == "Admin" ? "": "<li><a href='contato.php'>Contato</a></li>"; ?>
		<?php $nome == "Logar" ? "<li><a href='cadastro.php'>Cadastrar</a></li>": ""; ?>
		<?php if ($nome != "Admin") : ?>
		<form id="busca">
			<?php require 'pesquisa.php'; ?>
		</form>
		<?php endif; ?>
		<li id="user"><?php $nome == "Logar" ? "<a href='login.php'>Logar</a><!--" : "<a href='edit.php'>$nome</a>"; ?>
			<ul id="sub">
				<?php $nome == "Admin" ? "" : "<li><a href='edit.php'>Editar</a></li>"; ?>
				<li><a href="PHP/logout.php">Sair</a></li>
			</ul>
			<?php $nome == "Logar" ? "-->" : ""; ?>
		</li>
		<?php $nome != "Admin" ? "<a href='carrinho.php'><img id='carrinho' src='img/carrinho.png'></a>": ""; ?>
	</ul>
</body>
</html>