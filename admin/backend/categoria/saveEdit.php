<?php
    // isset -> serve para saber se uma variável está definada
    include_once('../../../config/config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        
        $sqlInsert = "UPDATE categoria
        SET nome='$nome'
        WHERE ID_categoria=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: ../../frontend/categoria/categoria.php');
