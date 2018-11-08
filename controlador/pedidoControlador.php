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
function addPedido($qtd){
    adicionarPedido($qtd, $_SESSION['total']);
    index();
}

