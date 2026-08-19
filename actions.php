<?php
include "db.php";
function selecionarTabela($tabela){

    global $conexao;

    $sql = "SELECT * FROM $tabela";
    $resultado = mysqli_query($conexao, $sql);

    return $resultado;
}

function criarUsuario($nome) {
    global $conexao;

    $sql = "INSERT INTO  usuarios(nome) VALUES ('$nome')";
    $resultado = mysqli_query($conexao, $sql);

    return $resultado;
}

?>