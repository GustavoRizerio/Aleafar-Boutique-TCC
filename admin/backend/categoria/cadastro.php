<?php

include_once('../../../config/config.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeCategoria = $_POST["nomeCategoria"];
    $idSubcategoria = $_POST["subcategoria"];

    $sqlCategoria = "INSERT INTO categoria (id_subcatg, nome) VALUES ('$idSubcategoria', '$nomeCategoria')";
    if ($conexao->query($sqlCategoria) === TRUE) {
        header('Location: ../../frontend/categoria/categoria.php');
    } else {
        echo "Erro ao cadastrar categoria: " . $conexao->$error;
    }

    $conexao->close();
}
