<?php

require 'modelo/produtoModelo.php';
require 'modelo/imagemModelo.php';

//error_reporting(0);
//ini_set("display_errors", 0);

/**
  anon
 */
function index() {
    $produtos = selecionarProduto();
    for ($i = 0; $i < 12; $i++) {
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
        $nome = 'publico/img/' . $_FILES['img']['name'];
        $destino = 'publico/img/' . $_FILES['img']['name'];
        $arquivo_tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file( $arquivo_tmp, $destino  );
        
        adicionarProduto($_POST["nomeproduto"], $_POST["preco"], $_POST["quantidade"], $_POST["descproduto"], $nome, $_POST["Categoria"]);
        index();
    } else {
        exibir("produto/adicionarProduto");
    }
}

/**
  admin
 */
function deleteProduto() {
    if ($_POST) {
        deletarProduto($_POST["nomeproduto"]);
        index();
    } else {
        exibir("produto/deletar");
    }
}

/**
  admin
 */
function updateProduto() {
    if (@$_POST["preco"]) {
        $nome = 'publico/img/' . $_FILES['img']['name'];
        $destino = 'publico/img/' . $_FILES['img']['name'];
        $arquivo_tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file( $arquivo_tmp, $destino  );
        
        alterarProduto($_POST["nomeproduto"], $_POST["preco"], $_POST["quantidade"], $_POST["descproduto"], $nome, $_POST["idproduto"], $_POST["Categoria"]);
        index();
    } elseif (@$_POST["nome"]) {
        $registro["registro"] = selecionarProdutoPorId($_POST["nome"]);
        $_SESSION["condicional"] = 1;
        exibir("produto/alterarProduto", $registro);
    } else {
        $_SESSION["condicional"] = 0;
        exibir("produto/alterarProduto");
    }
}

/**
  anon
 */
function selectProduto() {
    $produtos = selecionarProduto();
    $qtd = (int) contarProdutos();
    for ($i = 0; $i < $qtd; $i++) {
        $produtos[$i]["img"] = selecionarImagem($produtos[$i]["idimg"]);
    }
    $produtos["produtos"] = $produtos;
    exibir("produto/listar", $produtos);
}

function selectProdutoPerId($nomeproduto) {
    return (selecionarProdutoPorId($nomeproduto));
}

/**
  anon
 */
function contato() {
    exibir("contato");
}

/**
  anon
 */
function detalhar($nome) {
    $registro["registro"] = selecionarProdutoPorId($nome);
    $registro["registro"]["img"] = selecionarImagem($registro["registro"]["idimg"]);
    exibir("produto/detalhar", $registro);
}

/**
  anon
 */
function carrinho($nome) {
    if ($nome) {
        $registro["reg"] = selecionarProdutoPorId($nome);
        $registro["reg"]["img"] = selecionarImagem($registro["reg"]["idimg"]);
        $registro["reg"]["qtd"] = 1;

        if (@$_SESSION["feio"]) {
            foreach ($_SESSION["feio"] as $indice => $aux) {
                if ($nome == $aux["nomeproduto"]) {
                    $registro["reg"]["qtd"] = 1 + $aux["qtd"];
                    $_SESSION["feio"][$indice] = null;
                    unset($_SESSION["feio"][$indice]);
                }
            }
        }
        exibir("produto/carrinho", $registro);
    } else {
        exibir("produto/carrinho");
    }
}

/**
  anon
 */
function busca($busca) {
    if ($busca) {
        detalhar($busca);
    } else {
        index();
    }
}

/**
  anon
 */
function tirar($indice) {
    $_SESSION["feio"][$indice] = null;
    unset($_SESSION["feio"][$indice]);
    exibir("produto/carrinho");
}

/**
  anon
 */
function email($msg) {
    mail("admin@mercadois.dx.am", "Projeto WEB", $msg, "De: Usuario");
    exibir("contato");
}

?>
