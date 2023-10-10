<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'aleafar';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_error()) {
    die("Database Connection Error");
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
        // Crie um objeto "produto" e coloque os dados dentro dele
        $produto = array(
            'id' => $row['ID'],
            'nome_produto' => $row['nome_produto'],
            'descricao' => $row['descricao'],
            'estoque' => $row['estoque'],
            'valorvenda' => $row['valorvenda'],
            'id_catg' => $row['id_catg'],
            'id_tamanho' => $row['id_tamanho'],
            'productImg' => '',
            'productImg2' => '',
            'productImg3' => '',
        );

        // Adicione o objeto "produto" ao array de dados
        $dados[] = $produto;
    }

    // caminho completo do arquivo para salvar o JSON
    $caminhoCompleto = 'C:\xampp\htdocs\Aleafar-Boutique\config\json/dados.json';

    // Converte o array para JSON com identação de 2 espaços
    $json_data = json_encode($dados, JSON_PRETTY_PRINT);

    // Salva o JSON no local especificado
    file_put_contents($caminhoCompleto, $json_data);

    echo "Arquivo JSON gerado com sucesso em $caminhoCompleto.";
} else {
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão
$conexao->close();

?>
