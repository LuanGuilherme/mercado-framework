<?php

require 'modelo/pedidoModelo.php';

/**
  anon
 */
function index($qtd, $nomeproduto){
    $_SESSION['qtd'] = $qtd;
    $_SESSION['nomeproduto'] = $nomeproduto; 
    exibir("pedido/finalizar");
}

/**
  user
 */
function addPedido($qtd, $nomeproduto){
    adicionarPedido($qtd, $_SESSION['total'], $nomeproduto);
    $_SESSION['total'] = 0;
    $_SESSION['feio'] = null;
    unset($_SESSION['feio']);
    redirecionar("produto");
}

/**
  anon
 */
function calcularTotalPedido(){
    $valorcupom = pegarValorcupomPorNomecupom($_POST["nomecupom"]);
    $_SESSION['total'] = $_SESSION['total'] - ($valorcupom / 100 * $_SESSION['total']);
    print_r($valorcupom);
    exibir("pedido/finalizar");
}

/**
  admin
 */
function addCupom(){
    $nomecupom = $_POST["nomecupom"];
    $valorcupom = $_POST["valorcupom"];
    adicionarCupom($nomecupom, $valorcupom);
    exibir("usuario/admin");
}

/**
  admin
 */
function deleteCupom(){
    $nomecupom = $_POST["nomecupom"];
    deletarCupom($nomecupom);
    exibir("usuario/admin");
}
