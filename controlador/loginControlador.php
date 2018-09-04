<?php

require "modelo/clienteModelo.php";

function index() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        if (authLogin($nome, $senha)) {
            alert("Bem vindo" . $nome);
            redirecionar("index");
        } else {
            alert("Usuario ou senha invalidos!");
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    authLogout();
    alert("deslogado com sucesso!");
    redirecionar("usuario");
}

?>