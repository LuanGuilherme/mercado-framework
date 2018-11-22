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
        adicionarCliente();
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
/**
admin
*/
function admin() {
    exibir("usuario/admin");
}
/**
admin
*/
function qtdProdutosEstoque (){
    $array["produtos"] = produtosEstoque();
    exibir("usuario/produtosEstoque", $array);
}
/**
admin
*/
function categoriaProdutos (){
    $array["produtos"] = produtosCategoria();
    exibir("usuario/produtosCategoria", $array);
}
/**
admin
*/
function vendasIntervaloDatas() {
    if (!empty($_POST)) {
        $data1 = $_POST['ano1'] . "-" . $_POST['mes1'] . "-" . $_POST['dia1'];
        $data2 = $_POST['ano2'] . "-" . $_POST['mes2'] . "-" . $_POST['dia2'];
        $array["produtos"] = pedidosEntreDatas($data1, $data2);
        exibir("usuario/intervaloDatas", $array);
    } else {
        exibir("usuario/vendasIntervaloDatas");
    }
}
/**
admin
*/
function vendasMunicipio () {
     if (!empty($_POST)) {
        $municipio = $_POST["cidade"];
        $array["produtos"] = pedidosMunicipio($municipio);
        exibir("usuario/vendasPorMunicipio", $array);
    } else {
        exibir("usuario/vendasMunicipio");
    }   
}
/**
admin
*/
function vendasPeriodo () {
    if (!empty($_POST)) {
        $data = $_POST['ano'] . "-" . $_POST['mes'] . "-" . $_POST['dia'];
        $array["produtos"] = pedidosPeriodo($data);
        exibir("usuario/vendasPorPeriodo", $array);
    } else {
        exibir("usuario/vendasPeriodo");
    }    
}