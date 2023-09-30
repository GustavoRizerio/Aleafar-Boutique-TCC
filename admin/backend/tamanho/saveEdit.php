<?php
    // isset -> serve para saber se uma variável está definida
    include_once('../../../config/config.php');
    if(isset($_POST['update']))
    {
        $id_tamanho = $_POST['id_tamanho'];
        $tamanho = $_POST['tamanho'];
        
        $sqlInsert = "UPDATE tamanho 
        SET tamanho='$tamanho'
        WHERE id_tamanho=$id_tamanho";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: ../../frontend/tamanho/tamanho.php');
