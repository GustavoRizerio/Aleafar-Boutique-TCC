<?php
    // isset -> serve para saber se uma variável está definida
    include_once('../../../config/config.php');
    if(isset($_POST['update']))
    {
        $ID_tamanho= $_POST['ID_tamanho'];
        $tamanho = $_POST['tamanho'];
        
        $sqlInsert = "UPDATE tamanho
        SET tamanho='$tamanho'
        WHERE ID_tamanho=$ID_tamanho";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: ../../frontend/tamanho/tamanho.php');
