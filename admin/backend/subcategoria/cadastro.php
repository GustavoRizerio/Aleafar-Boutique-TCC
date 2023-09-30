<?php

include_once('../../../config/config.php');

if (isset($_POST['submit'])) {


    $nome_subcatg = $_POST['nome_subcatg'];
    $descricao = $_POST['descricao'];

    $result = mysqli_query($conexao, "INSERT INTO subcategoria(nome_subcatg,descricao) 
        VALUES ('$nome_subcatg','$descricao')");

    header('Location: ../../frontend/subcategoria/subcategoria.php');
}
