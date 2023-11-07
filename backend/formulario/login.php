<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once(__DIR__ . '../../../config/config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Use instruções preparadas para evitar injeção de SQL
    $stmt = $conexao->prepare("SELECT * FROM cliente WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
        // Login falhou
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../../pages/login.php?erro=1');
    } else {
        // Login bem-sucedido
        $cliente = $result->fetch_assoc();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome_cliente'] = $cliente['nome'];
        $_SESSION['ultima_vez_login'] = $cliente['ultima_vez_login']; 

        // Adicione o seguinte código para incluir informações no localStorage
        echo "<script>";
        echo "localStorage.setItem('email', '{$_SESSION['email']}');";
        echo "localStorage.setItem('nome_cliente', '{$_SESSION['nome_cliente']}');";
        echo "localStorage.setItem('ultima_vez_login', '{$_SESSION['ultima_vez_login']}');";
        echo "</script>";

        header('Location: ../../index.php');
    }
} else {
    // Não acessa
    header('Location: ../../pages/login.php');
}
?>
