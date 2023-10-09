<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <meta name="description" content="e-commerce de roupas femininas">
    <meta name="keywords" content="roupas, mulher, rosa, e-commerce">
    <meta name="author" content="ForEich">
    <title>Perguntas Frequentes</title>

    <!-- icone da pagina -->
    <link rel="shortcut icon" href="../../assets/img/icon-tcc.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/components/cabecalho/cabecalho.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css//components/botaoTopo/botaoTopo.css">
    <link rel="stylesheet" href="../assets/css/perguntasFrequentes/perguntasFrequentes.css">
    <link rel="stylesheet" href="../assets/css/components/rodape/rodape.css">

    <script src="https://kit.fontawesome.com/5cb800ca59.js" crossorigin="anonymous"></script>
</head>

<body>
    <button id="back-to-top-btn"></button>
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
                        <a href="./comoComprar.php" class="navegacao__lista-link">Como Comprar</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="perguntas.php" class="navegacao__lista-link linkselect">Perguntas Frequentes</a>
                    </li>
                    <i class="fa-solid fa-xmark" id="botao__fechar"></i>
                </ul>
                <i class="fa-solid fa-bars" id="menu__botao" onclick="openMenu()"></i>
            </nav>
           <!--  <div class="secao__contatos">
                <p class="contatos__login">
                    <a href="./formulario.php" class="contato__link">
                        Login ou Cadastro
                    </a>
                </p>
            </div> -->
        </section>
    </header>
    <!-- Fim do cabecalho -->
    <!-- Inicio da section de informações -->
    <section>
        <h1 class="titulo">Perguntas Frequentes</h1>
        <div class="">
            <ol class="perguntas__faq">
                <li class="perguntas">
                    <p class="perguntas__texto">Como faço para fazer uma compra no seu site?</p>
                    <ul>
                        <li>
                            <p class="respostas__faq">Para comprar em nosso site basta seguir o tutorial da <a href="./comoComprar.php">página de compras</a></p>
                        </li>
                    </ul>
                </li>
                <li class="perguntas">
                    <p class="perguntas__texto">Como posso entrar em contato com o serviço de atendimento ao cliente em
                        caso de dúvidas ou problemas?</p>
                    <ul>
                        <li>
                            <p class="respostas__faq">Para entrar em contato conosco basta acessar o formulário de <a href="./contato.php">contato</a></p>
                        </li>
                    </ul>
                </li>
                <li class="perguntas">
                    <p class="perguntas__texto">Como posso saber se um item está em estoque?</p>
                    <ul>
                        <li>
                            <p class="respostas__faq">Quando um item está forá de estoque ele é retirado da página de
                                produtos</p>
                        </li>
                    </ul>
                </li>
                <li class="perguntas">
                    <p class="perguntas__texto">Onde posso receber meu pedido?</p>
                    <ul>
                        <li>
                            <p class="respostas__faq">Realizamos envio para todo o país</p>
                        </li>
                    </ul>
                </li>
                <li class="perguntas">
                    <p class="perguntas__texto">Oque devo fazer se o produto não chega em bom estado?</p>
                    <ul>
                        <li>
                            <p class="respostas__faq">Entre em contato conosco pela <a href="./contato.php">página de contato</a></p>
                        </li>
                    </ul>
                </li>
                <li class="perguntas">
                    <p class="perguntas__texto">Vocês fazem trocas?</p>
                    <ul>
                        <li>
                            <p class="respostas__faq">Não realizamos trocas.</p>
                        </li>
                    </ul>
                </li>
                <li class="perguntas">
                    <p class="perguntas__texto">Como as compras são enviadas?</p>
                    <ul>
                        <li>
                            <p class="respostas__faq">os envios são feitos pelos correios</p>
                        </li>
                    </ul>
                </li>
                <li class="perguntas">
                    <p class="perguntas__texto">Qual é o custo de envio?
                    <ul>
                        <li>
                            <p class="respostas__faq">O custo de envio será decidido com base ao total da compra e sua
                                localização, no whatszapp.</p>
                        </li>
                    </ul>
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

    <!-- Rodape -->

    <?php
        include_once '../includes/footer.php'
    ?>

    <!-- Fim do rodape -->

    <script src="../assets/js/script.js"></script>
</body>

</html>