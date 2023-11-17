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
                    <form action="login.php" method="POST">
                        <h2>Esqueceu a senha</h2>
                        <input type="text" name="nome" placeholder="nome" class="input__login" required />
                        <input type="email" name="email" placeholder="email" class="input__login" required />
                        <input type="submit" name="submit" value="Enviar" class="input__login" />
                        <p class="conta__botao">
                            lembrou a senha?
                            <a href="login.php">faça login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>