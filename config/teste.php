<?php
// Configurações do banco de dados
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'aleafar';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if (mysqli_connect_error()) {
        die ("Database Connection Error");
    }


// Consulta SQL
$sql = "SELECT * FROM produtos";
$resultado = $conexao->query($sql);

// Verifica se a consulta foi bem-sucedida
if ($resultado->num_rows > 0) {
    // Array para armazenar os dados
    $dados = array();

    // Loop pelos resultados
    while ($row = $resultado->fetch_assoc()) {
        $dados[] = $row;
    }

    // Converte o array para JSON
    $json_data = json_encode($dados);

    // Salva o JSON em um arquivo
    file_put_contents('dados.json', $json_data);

    echo "Arquivo JSON gerado com sucesso.";
} else {
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão
$conexao->close();