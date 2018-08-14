<?php

require "modelo/clienteModelo.php";

function index() {
    $dados["clientes"] = pegarTodosclientes();
    exibir("cliente/listar", $dados);
}

function addCliente($nome, $email, $idade, $endereco, $senha, $cpf) {
    adicionarCliente($nome, $email, $idade, $endereco, $senha, $cpf);
}

function removerCliente($id) {
    alert(deletarcliente($id));
    redirecionar("cliente/index");
}

function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        alert(atualizarCliente($nome, $email, $_POST["senha"], $_POST["estado"], $_POST["Cidade"], $_POST["Rua"], $_POST["numero"]));
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