<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | aleafar boutique</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="usuario container__cadastro">
                <div class="container__formulario">
                    <form action="../../backend/subcategoria/cadastro.php" method="POST">
                        <h2>Cadastre subcategoria</h2>
                        <input type="text" name="nome_subcatg" id="nome_subcatg" placeholder="Nome" required />
                        <input type="text" name="descricao" id="descricao" placeholder="Descricao" required />
                        <input type="submit" name="submit" id="submit" value="Cadastro" />
                        <p class="conta__botao">
                            Não quer cadastrar ?
                            <a href="subcategoria.php">Voltar.</a>
                        </p>
                    </form>
                </div>
                <div class="container__img"><img src="../img/selfie2.jpg" alt="" style="width: 100%;"/></div>
            </div>
        </div>
    </section>

    <script>
        function limitaTelefone() {
            var input = document.getElementById("fone");
            var valor = input.value.replace(/\D/g, ''); // Remove qualquer coisa que não seja dígito
            var limite = 11;

            if (valor.length > limite) {
                valor = valor.slice(0, limite); // Limita o número de dígitos
            }

            input.value = valor;
        }
    </script>
</body>

</html>