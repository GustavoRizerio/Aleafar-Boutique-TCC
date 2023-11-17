<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>CodePen - &lt;Table&gt; Responsive</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap para o botao -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/usuarios.css">
    <link rel="stylesheet" href="../css/cabecalhos.css">

</head>

<body>
    <!-- Cabecalho -->
    <header class="cabecalho">
        <section class="cabecalho__secao">
            <nav class="secao__navegacao">
                <ul class="navegacao__lista" id="side__menu">
                    <li class="navegacao__lista-item"><a href="../usuarios/usuarios.php"
                            class="navegacao__lista-link">Funcionarios</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="../cliente/cliente.php" class="navegacao__lista-link">Cliente</a>
                    </li>
                    <li class="navegacao__lista-item"><a href="../subcategoria/subcategoria.php"
                            class="navegacao__lista-link">Subcategoria</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="../categoria/categoria.php" class="navegacao__lista-link">Categoria</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="../sexo/sexo.php" class="navegacao__lista-link">Sexo</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="../produtos/produtos.php" class="navegacao__lista-link">Produtos</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="../tamanho/tamanho.php" class="navegacao__lista-link">Tamanho</a>
                    </li>
                    <li class="navegacao__lista-item linkselect">
                        <a href="./contato.php" class="navegacao__lista-link">Contato</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="../../home.php" class="navegacao__lista-link" style="color: red;">Sair</a>
                    </li>
                    <i class="fa-solid fa-xmark" id="botao__fechar"></i>
                </ul>
                <i class="fa-solid fa-bars" id="menu__botao" onclick="openMenu()"></i>
            </nav>
        </section>
    </header>

    <h1 style="margin-top: 30px;"><span class="blue">&lt;</span>Contato<span class="blue">&gt;</span></h1>

    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </button>
    </div>

    <table class="container">
        <thead>
            <tr>
                <th>
                    <h1>id</h1>
                </th>
                <th>
                    <h1>nome</h1>
                </th>
                <th>
                    <h1>email</h1>
                </th>
                <th>
                    <h1>telefone</h1>
                </th>
                <th>
                    <h1>mensagem</h1>
                </th>
            </tr>
        </thead>

        <?php

        include_once('../../../backend/contato/exibir.php');


        while ($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['id'] . "</td>";
            echo "<td>" . $user_data["nome"] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['telefone'] . "</td>";
            echo "<td>" . $user_data['mensagem'] . "</td>";
            echo "<td>
            <a class='btn btn-sm btn-danger' href='../../backend/contato/delete.php?id=$user_data[id]' title='Deletar'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
            </svg>
        </a>
            </td>";
            echo "</tr>";
        }

        ?>
    </table>

    <script src="contato.js"></script>
</body>

</html>