<?php

require 'modelo/pedidoModelo.php';

function index(){
    exibir("pedido/finalizar");
}

function addPedido($nomeproduto, $qtd, $preco){
    adicionarPedido($nomeproduto, $qtd, $preco);
    index();
}

