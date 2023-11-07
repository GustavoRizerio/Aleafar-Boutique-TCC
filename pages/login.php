<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widtsh, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="../admin/frontend/css/login.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="usuario container__login">
                <div class="container__img"><img src="../admin/frontend/img/selfie.jpg" alt="" /></div>
                <div class="container__formulario">
                    <form action="../backend/formulario/login.php" method="POST" onsubmit="salvarLocalStorage()">
                        <h2>Login</h2>
                        <input type="text" name="email" placeholder="Email" class="input__login" required />
                        <input type="password" name="senha" placeholder="Senha" class="input__login" required />
                        <input type="submit" name="submit" value="Enviar" class="input__login" />
                        <p class="conta__botao">
                            Não tem uma conta ?
                            <a href="formulario.php">Se cadastre.</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const emailInput = document.querySelector('input[name="email"]');
        const senhaInput = document.querySelector('input[name="senha"]');
        // Verifica se há dados salvos no localStorage
        const savedEmail = localStorage.getItem('savedEmail');
        const savedSenha = localStorage.getItem('savedSenha');
        if (savedEmail && savedSenha) {
            emailInput.value = savedEmail;
            senhaInput.value = savedSenha;
            // Redireciona para a página principal se houver dados salvos
            window.location.href = '../frontend/usuarios/usuarios.php';
        }
    });
    // Função chamada ao clicar no botão "Mostrar Dados Salvos"
    function mostrarDadosLocalStorage() {
        const savedEmail = localStorage.getItem('savedEmail');
        const savedSenha = localStorage.getItem('savedSenha');
        if (savedEmail && savedSenha) {
            alert('Email: ' + savedEmail + '\nSenha: ' + savedSenha);
        } else {
            alert('Nenhum dado salvo no localStorage.');
        }
    }
    // Função chamada ao enviar o formulário
    function salvarLocalStorage() {
        const emailInput = document.querySelector('input[name="email"]');
        const senhaInput = document.querySelector('input[name="senha"]');
        // Salva os dados no localStorage
        localStorage.setItem('savedEmail', emailInput.value);
        localStorage.setItem('savedSenha', senhaInput.value);
    }
</script>

</html>