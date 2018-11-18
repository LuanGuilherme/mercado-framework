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
    if (!empty($nome) && !empty($senha)) {
        adicionarCliente($nome, $email, $senha, $dia, $mes, $ano, $cpf, $estado, $cidade, $rua, $numero);
        redirecionar("produto");
    }else{
        exibir("usuario/formulario");

    }
}
/**
user
*/
function removerCliente($id) {
    alert(deletarcliente($id));
    logout($id);
    alert("Removido com sucesso");
}
/**
user
*/
function editar($id) {
    if (!empty($_POST)) {
        @$nome = $_POST["nome"];
        @$email = $_POST["email"];
        @$idade = (date("Y") - $_POST["ano"]);
        @$endereco = $_POST["Cidade"]. " - ". $_POST["estado"];
        @atualizarCliente($nome, $email, $idade, $endereco, $_POST["senha"], $_POST["cpf"], $id);
        redirecionar("produto");
        $_SESSION["idcliente"]["nomecliente"] = $nome;
        alert("Foi");
    } else {
        @exibir("usuario/formulario", $dados);
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
    if (!empty($nome) && !empty($senha)) {
        $msg = login($nome, $senha);
        if ($_SESSION["idcliente"]) {
            authLogin($nome, $senha);
            redirecionar("produto");
        }elseif ($_SESSION["adm"]){
            redirecionar("produto");
        }else{    
          exibir("login/login");
          alert("N foi");  
        }
    }else{
        exibir("login/login");
    }
}
/**
anon
*/
function logout() {
    authLogout();
    alert("Deslogado com sucesso! ");
    redirecionar("produto");
}

function admin(){
    exibir("usuario/admin");
}