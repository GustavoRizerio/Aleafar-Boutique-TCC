<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'aleafar';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if (mysqli_connect_error()) {
        die ("Database Connection Error");
    }
