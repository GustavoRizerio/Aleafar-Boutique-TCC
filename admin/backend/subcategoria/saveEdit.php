<?php
    // isset -> serve para saber se uma variável está definida
    include_once('../../../config/config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome_subcatg = $_POST['nome_subcatg'];
        $descricao = $_POST['descricao'];
        
        $sqlInsert = "UPDATE subcategoria 
        SET nome_subcatg='$nome_subcatg',descricao='$descricao'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: ../../frontend/subcategoria/subcategoria.php');

