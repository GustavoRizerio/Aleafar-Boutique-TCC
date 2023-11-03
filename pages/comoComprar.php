<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como comprar</title>
    <link rel="shortcut icon" href="/assets/img/Logo.jpeg" />

    <!-- css -->
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components/cabecalho/cabecalho.css">
    <link rel="stylesheet" href="../assets/css/components/botaoTopo/botaoTopo.css">
    <link rel="stylesheet" href="../assets/css/comoComprar/comoComprar.css">
    <link rel="stylesheet" href="../assets/css/components/rodape/rodape.css">

    <script src="https://kit.fontawesome.com/5cb800ca59.js" crossorigin="anonymous"></script>
</head>

<body>
    <button id="back-to-top-btn"></button>
    <!-- Cabecalho -->
    <header class="cabecalho">
        <section class="cabecalho__secao">
            <figure class="secao__figure">
                <img src="../assets/img/LogoTcc.png" alt="" class="secao__img">
            </figure>
            <nav class="secao__navegacao">
                <ul class="navegacao__lista" id="side__menu">
                    <li class="navegacao__lista-item">
                        <a href="../index.php" class="navegacao__lista-link">Inicio</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./produtos.php" class="navegacao__lista-link">Produtos</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./contato.php" class="navegacao__lista-link">Contato</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="" class="navegacao__lista-link linkselect">Como Comprar</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./perguntas.php" class="navegacao__lista-link">Perguntas Frequentes</a>
                    </li>
                    <i class="fa-solid fa-xmark" id="botao__fechar"></i>
                </ul>
                <i class="fa-solid fa-bars" id="menu__botao" onclick="openMenu()"></i>
            </nav>
            <?php
        include_once '../includes/carrinho.php'
            ?>
        </section>
    </header>
    <!-- Fim do cabecalho -->
    <!-- Inicio da section de informações -->
    <section>
        <h1 class="titulo">Como Comprar</h1>
        <div class="">
            <ol class="lista__informacoes">
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Escolha o produto que deseja comprar.</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Clique no botão de "Comprar". O seu
                        produto será redirecionado ao whatsapp.</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Complete com seus dados no whatsapp.</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Coloque o endereço de onde você deseja receber o produto.</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Selecione a forma de frete que desejar.
                        Os envios são feitos a partir dos Correios.</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Escolha o meio de pagamento.
                        Também poderá selecionar a opção de "Depósito / Transferência / cartão de credito.".
                        Uma vez que você tenha escolhido o meio de pagamento, nossa atendente ira te ajudar.</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Finalmente na Confirmação da compra você pode revisar toda a
                        informação sobre a mesma, inclusive os seus dados. Logo clique em "Continuar".</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Uma vez creditado o pagamento, faremos um envio correspondente
                        dos produtos que você comprou.</p>
                </li>
            </ol>
        </div>
        <p class="duvida__contato">Alguma dúvida? entre em contato conosco! <br> <a href="./contato.php">Página de
                contato</a></p>
    </section>
    <!-- Fim das informações -->

    <!-- Insta -->

    <?php
    include_once '../includes/insta.php'
    ?>

    <!-- Fim do insta -->

    <!-- Começo footer  -->
    <?php
    include_once '../includes/footer.php'
    ?>
    <!-- Fim do footer -->
    <script src="../assets/js/script.js"></script>
</body>

</html>