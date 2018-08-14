<?php 
require 'produtoModelo';

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
	return (selecionarProduto());
}

function selectImagem ($idimg) {
	return (selecionarImagem($idimg));
}

function selectProdutoPerId ($nomeproduto) {
	return (selecionarProdutoPorId($nomeproduto));
}
?>