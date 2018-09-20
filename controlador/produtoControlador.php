<?php 
require 'modelo/produtoModelo.php';
require 'modelo/imagemModelo.php';
/**
anon
*/
function index(){
	$produtos = selecionarProduto();
	for ($i=0; $i < 12; $i++) { 
		$produtos[$i]["img"] = selecionarImagem($produtos[$i]["idimg"]);
	}
	$produtos["produtos"] = $produtos;
	exibir("produto/index", $produtos);
}
/**
admin
*/
function addProduto() {
	if ($_POST) {
		adicionarProduto($_POST["nomeproduto"], $_POST["preco"], $_POST["quantidade"], $_POST["descproduto"], $_POST["idimg"]);
		index();
	}else{
		exibir("produto/adicionarProduto");
	}
}
/**
admin
*/
function deleteProduto () {
	if ($_POST) {
		deletarProduto($_POST["nomeproduto"]);
		index();
	}else{
		exibir("produto/deletar");
	}
}
/**
admin
*/
function updateProduto () {
	if (@$_POST["preco"]) {
		alterarProduto($_POST["nomeproduto"], $_POST["preco"], $_POST["quantidade"], $_POST["descproduto"], $_POST["idimg"], $_POST["idproduto"]);
		index();
	}elseif (@$_POST["nome"]) {
		$registro["registro"] = selecionarProdutoPorId($_POST["nome"]);
		$_SESSION["condicional"] = 1;
		exibir("produto/alterarProduto", $registro);
	}else{
		$_SESSION["condicional"] = 0;
		exibir("produto/alterarProduto");
	}
}
/**
anon
*/
function selectProduto () {
	$produtos = selecionarProduto();
	$qtd = (int) contarProdutos();
	for ($i=0; $i < $qtd; $i++) { 
		$produtos[$i]["img"] = selecionarImagem($produtos[$i]["idimg"]);
	}
	$produtos["produtos"] = $produtos;
	exibir("produto/listar", $produtos);

}

function selectProdutoPerId ($nomeproduto) {
	return (selecionarProdutoPorId($nomeproduto));
}
/**
anon
*/
function contato (){
	exibir("contato");
}
/**
anon
*/
function detalhar ($nome) {
	$registro["registro"] = selecionarProdutoPorId($nome);
	$registro["registro"]["img"] = selecionarImagem($registro["registro"]["idimg"]);
	exibir("produto/detalhar", $registro);
}
/**
anon
*/
function carrinho ($nome) {
	$registro["registro"] = selecionarProdutoPorId($nome);
	$registro["registro"]["img"] = selecionarImagem($registro["registro"]["idimg"]);
	exibir("produto/carrinho", $registro);
}
/**
anon
*/
function busca ($nome) {
	$name = pesquisa($nome);
	exibir("produto/listar/$name");
}
?>
