<?php
session_start();

//libs obrigatorias
require_once 'bibliotecas/mysqli.php';
require_once 'bibliotecas/view.php';
require_once 'bibliotecas/utils.php';

//libs opcionais
require_once 'bibliotecas/alert.php';
//require_once 'bibliotecas/auth.php';

define('CONTROLADOR_PADRAO', 'usuario');
define('BASE_URL', 'http://localhost:8080/noopmvc/');