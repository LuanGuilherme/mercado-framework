<?php 
require 'modelo/produtoModelo.php';
require 'modelo/imagemModelo.php';
/**
anon
*/
function index(){
	$produtos = selecionarProduto();
	for ($i=0; $i < 20; $i++) { 
		$produtos[$i]["img"] = selecionarImagem($produtos[$i]["idimg"]);
	}
	$produtos["produtos"] = $produtos;
	exibir("produto/index", $produtos);
}

function addProduto($nomeproduto, $preco, $quantidade, $descproduto, $idimg) {
	adicionarProduto($nomeproduto, $preco, $quantidade, $descproduto, $idimg);
	exibir("index");
}

function deleteProduto ($nomeproduto) {
	deletarProduto($nomeproduto);
	exibir("index");
}

function upadateProduto ($nomeproduto, $preco, $quantidade, $descproduto, $idimg, $idproduto) {
	alterarProduto($nomeproduto, $preco, $quantidade, $descproduto, $idimg, $idproduto);
	exibir("index");
}

function selectProduto () {
	$produtos = selecionarProduto();
	print_r($produtos);
	for ($i=0; $i < 20; $i++) { 
		$produtos[$i]["img"] = selecionarImagem($produtos[$i]["idimg"]);
	}
	$produtos["produtos"] = $produtos;
	//exibir("produto/listar", $produtos);

}

function selectProdutoPerId ($nomeproduto) {
	return (selecionarProdutoPorId($nomeproduto));
}
?>