<?php
    // isset -> serve para saber se uma variável está definida
    include_once('../../../config/config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $sexo = $_POST['sexo'];
        
        $sqlInsert = "UPDATE sexo
        SET sexo='$sexo'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: ../../frontend/sexo/sexo.php');

