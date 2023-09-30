<?php
    // isset -> serve para saber se uma variável está definida
    include_once('../../../config/config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idsubcategoria = $_POST['idsubcategoria'];
        
        $sqlInsert = "UPDATE categoria 
        SET nome='$nome'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: ../../frontend/categoria/categoria.php');
