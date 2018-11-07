<?php

require 'modelo/pedidoModelo.php';
/**
  anon
 */
function index(){
    exibir("pedido/finalizar");
}
/**
  anon
 */
function addPedido($nomeproduto, $qtd, $preco){
    adicionarPedido($nomeproduto, $qtd, $preco);
    index();
}

