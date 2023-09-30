<?php

include_once('../../../config/config.php');

if (isset($_POST['submit'])) {


    $sexo = $_POST['sexo'];

    $result = mysqli_query($conexao, "INSERT INTO sexo(sexo) 
        VALUES ('$sexo')");

    header('Location: ../../frontend/sexo/sexo.php');
}
