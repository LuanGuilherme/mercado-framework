<?php

define('AUTENTICADOR', true);

function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}
