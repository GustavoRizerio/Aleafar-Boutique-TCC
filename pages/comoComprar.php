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
    <link rel="stylesheet" href="../assets/css/components/instagram/insta.css">
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
            <div class="secao__contatos">
                <p class="contatos__login">
                    <a href="./formulario.php" class="contato__link">
                        Login ou Cadastro
                    </a>
                </p>
            </div>
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
                    <p class="informacoes__item-texto">Clique no botão de "Adicionar ao carrinho" ou "Comprar". O seu
                        produto será adicionado ao carrinho e você poderá seguir comprando, caso desejar.</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Você pode seguir adicionando outros produtos ao carrinho ou,
                        então, clicar em "Finalizar Compra".</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Complete com seus dados de contato e clique em "Continuar".</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Coloque o endereço de onde você deseja receber o produto. Logo
                        clique em "Continuar".</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Selecione a forma de frete que desejar e clique em "Continuar".
                        Os envios são feitos a partir dos Correios.</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Escolha o meio de pagamento.
                        Também poderá selecionar a opção de "Depósito / Transferência / cartão de credito.".
                        Uma vez que você tenha escolhido o meio de pagamento, clique "Continuar".</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Finalmente na Confirmação da compra você pode revisar toda a
                        informação sobre a mesma, inclusive os seus dados. Logo clique em "Continuar".</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Você será redirigido para outra tela para que complete os dados
                        sobre a forma de pagamento escolhida. Depois de confirmar a compra receberá um email da nossa
                        parte, esse não será um comprovante de pagamento.</p>
                </li>
                <li class="informacoes__item">
                    <p class="informacoes__item-texto">Uma vez creditado o pagamento, faremos um envio correspondente
                        dos produtos que você comprou.</p>
                </li>
            </ol>
        </div>
        <p class="duvida__contato">Alguma dúvida? entre em contato conosco! <br> <a href="./contato.html">Página de
                contato</a></p>
    </section>
    <!-- Fim das informações -->
    <div class="insta">
        <h3 class="feedback__titulo-instagram">Siga-nos</h3>
        <figure>
            <a href="https://www.instagram.com/foreich.technologies/" target="_blank"><img
                    src="/assets/img/instagramPinkIcon.png" alt="" class="feedback__instagram-icon"></a>
        </figure>
    </div>
    <!-- Começo footer  -->
    <footer class="rodape__container">
        <!-- <div class="div1">
            <h3>Roni decide</h3>
        </div> -->
        <div class="div1">
            <h3>Formas de pagamento</h3>
            <div class="textos__rodape">
                <p><i class="fa-solid fa-credit-card"></i> Cartão</p>
                <p><i class="fa-brands fa-pix"></i> PIX</p>
                <p><i class="fa-solid fa-money-bill"></i> Dinheiro</p>
            </div>

        </div>
        <div class="div2">
            <h3>Formas de Envio</h3>
            <div class="textos__rodape">
                <p><i class="fa-solid fa-box"></i> Correios</p>
                <p><i class="fa-solid fa-truck-fast"></i> Entrega Expressa</p>
                <p><i class="fa-solid fa-house"></i> Entregas Fisicas</p>
            </div>
        </div>
        <div class="div3">
            <h3>Contato</h3>
            <div class="textos__rodape">
                <p><i class="fa-solid fa-phone"></i> 4002-8922</p>
                <p><i class="fa-solid fa-phone"></i> 4002-8922</p>
                <p><i class="fa-solid fa-envelope"></i> foreich@suporte.com</p>
            </div>
        </div>
        <div class="div4">&copy; Todos os direitos reservados | Feito com ❤️ por ForEich LTDA</div>
    </footer>
    <!-- Fim do footer -->
    <script src="/assets/js/script.js"></script>
</body>

</html>