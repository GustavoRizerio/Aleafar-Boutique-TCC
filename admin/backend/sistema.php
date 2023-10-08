<?php

session_start();

//caminho absoluto
include_once( __DIR__. '../../../config/config.php');

if((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = $sql = "SELECT c.*, s.*
        FROM cliente c
        LEFT JOIN sexo s ON c.id_sexo = s.id
        WHERE c.id LIKE '%$data%' OR c.nome LIKE '%$data%' OR s.id LIKE '%$data%'
        ORDER BY c.id DESC";
    }
    else
    {
        $sql = $sql = "SELECT c.*, s.*
        FROM cliente c
        LEFT JOIN sexo s ON c.id_sexo = s.id";
    }
    
    
    $result = $conexao->query($sql);