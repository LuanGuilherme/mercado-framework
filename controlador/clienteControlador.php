<?php
session_start();

require "modelo/clienteModelo.php";

/**
anon
*/
function index() {
    $_SESSION["nome"] = selecionarCliente();
    redirecionar("produto");
}

function addCliente($nome, $email, $idade, $endereco, $senha, $cpf) {
    adicionarCliente($nome, $email, $idade, $endereco, $senha, $cpf);
}

function removerCliente($id) {
    alert(deletarcliente($id));
    redirecionar("visao/login");
}

function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = (date("Y") - $_POST["ano"]);
        atualizarCliente($nome, $email, $idade, $_POST["senha"], $_POST["estado"], $_POST["Cidade"], $_POST["Rua"], $_POST["numero"]);
        redirecionar("cliente/index");
    } else {
        $dados['cliente'] = selecionarCliente();
        $dados['acao'] = "./cliente/editar/$id";
        exibir("cliente/formulario", $dados);
    }
}

function visualizarCliente() {
    return(selecionarCliente());
}