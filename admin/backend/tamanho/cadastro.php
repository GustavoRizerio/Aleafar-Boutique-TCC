<?php

include_once('../../../config/config.php');

if (isset($_POST['submit'])) {


    $tamanho = $_POST['tamanho'];

    $result = mysqli_query($conexao, "INSERT INTO tamanho(tamanho) 
        VALUES ('$tamanho')");

    header('Location: ../../frontend/tamanho/tamanho.php');
}
