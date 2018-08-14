<?php

/** anon */
function index() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        if (authLogin($nome, $senha)) {
            alert("Bem vindo" . $nome);
            redirect("usuario");
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