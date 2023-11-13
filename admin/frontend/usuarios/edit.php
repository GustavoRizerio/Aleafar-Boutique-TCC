<?php
    include_once('../../backend/edit.php')
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Formulário | GN</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/login.css">
    <style>
        p {
            font-size: 13px;
        }

        section .container {
            height: 550px;
        }

        #mostrarSenha {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        div i {
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="usuario container__cadastro">

                <div class="container__formulario">
                    <form action="../../backend/saveEdit.php" method="POST">
                        <h2>editar funcionario</h2>
                        <p>Nome completo:</p>
                        <input type="text" name="nome" id="nome" placeholder="Nome" required value="<?php echo $nome; ?>">

                        <p>Email:</p>
                        <input type="text" name="email" id="email" placeholder="Email" required value="<?php echo $email; ?>">

                        <p>Telefone:</p>
                        <input type="tel" name="fone" id="fone" placeholder="Telefone" required
                            oninput="limitaTelefone()" maxlength="11" value="<?php echo $fone; ?>">

                        <p>Senha:</p>
                        <input type="text" name="senha" id="senha" placeholder="Senha" required
                            value="<?php echo $senha; ?>">

                        <input type="hidden" name="id" value=<?php echo $id; ?>>
                        <input type="submit" name="update" id="submit" class="inputBotao">
                        <a href="./usuarios.php">Voltar</a>
                    </form>
                </div>
                <div class="container__img">
                    <img src="https://i.imgur.com/6hmUsfZ.jpeg" alt="" style="width: 100%;" />
                </div>
            </div>
        </div>
    </section>
    <script src="./usuarios/usuarios.js">
    </script>
</body>

</html>