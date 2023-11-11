<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widtsh, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="usuario container__login">
                <div class="container__img"><img src="./img/selfie.jpg" alt="" /></div>
                <div class="container__formulario">
                    <form action="../backend/testLogin.php" method="POST">
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

</html>