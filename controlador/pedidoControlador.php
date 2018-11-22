<?php

require 'modelo/pedidoModelo.php';

/**
  anon
 */
function index($qtd, $nomeproduto){
    $dados['qtd'] = $qtd;
    $dados['nomeproduto'] = $nomeproduto;
    exibir("pedido/finalizar", $dados);
}

/**
  anon
 */
function addPedido($qtd, $nomeproduto){
    adicionarPedido($qtd, $_SESSION['total'], $nomeproduto);
    index();
}

/**
  anon
 */
function calcularTotalPedido(){
    $valorcupom = pegarValorcupomPorNomecupom($_POST["nomecupom"]);
    $_SESSION['total'] = $_SESSION['total'] - $valorcupom;
}

function addCupom($nomecupom, $valorcupom){
    adicionarCupom($nomecupom, $valorcupom);
    exibir
}
