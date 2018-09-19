<?php

define('AUTENTICADOR', true);

function authLogin($login, $passwd) {
    if ($login === "Administrador" && $passwd == "rodartsinimda") {
        $_SESSION["auth"] = array("user" => "admin", "role" => "admin");
        return true;
    }
    if ($login === $_SESSION['idcliente']['nomecliente'] && $passwd == $_SESSION['idcliente']['senha']) {
        $_SESSION["auth"] = array("user" => "user", "role" => "user");
        return true;
    }
    return false;
}

function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"]) or isset($_SESSION["idcliente"])) {
        $_SESSION["auth"] = null;
        $_SESSION["idcliente"] = null;
        $_SESSION["adm"] = null;
        unset($_SESSION["auth"]);
        unset($_SESSION["idcliente"]);
        unset($_SESSION["adm"]);
        redirecionar("produto");
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}
