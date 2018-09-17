<?php

require "modelo/clienteModelo.php";

error_reporting(0);

/**
anon
*/
function index() {
    $_SESSION["nome"] = selecionarCliente();
    redirecionar("produto");
}
/**
anon
*/
function addCliente() {
    extract($_POST);
    if ($nome && $senha) {
        adicionarCliente($nome, $email, $senha, $dia, $mes, $ano, $cpf, $estado, $cidade, $rua, $numero);
        redirecionar("produto");
        alert("Foi");
    }else{
        exibir("usuario/formulario");
        alert("N foi");
    }
}

function removerCliente($id) {
    alert(deletarcliente($id));
    redirecionar("visao/login");
}
/**
anon
*/
function editar($id) {
    if (ehPost()) {
        @$nome = $_POST["nome"];
        @$email = $_POST["email"];
        @$idade = (date("Y") - $_POST["ano"]);
        @atualizarCliente($nome, $email, $idade, $_POST["senha"], $_POST["estado"], $_POST["Cidade"], $_POST["Rua"], $_POST["numero"]);
        exibir("cliente/index");
    } else {
        @$dados['cliente'] = selecionarCliente();
        @$dados['acao'] = "./cliente/editar/$id";
        @exibir("cliente/formulario", $dados);
    }
}

function visualizarCliente() {
    return(selecionarCliente());
}

/**
anon
*/
function entrar(){
    extract($_POST);
    if ($nome && $senha) {
        Login($nome, $senha);
        redirecionar("produto");
    }else{
        exibir("login/login");
    }
}

function logout() {
    authLogout();
    alert("deslogado com sucesso!");
    redirecionar("usuario");
}