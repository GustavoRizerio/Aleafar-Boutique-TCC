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
    <title>Contato</title>

    <!-- icone da pagina -->
    <link rel="shortcut icon" href="../../assets/img/icon-tcc.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components/cabecalho/cabecalho.css">
    <link rel="stylesheet" href="../assets/css/components/botaoTopo/botaoTopo.css">
    <link rel="stylesheet" href="../assets/css/Contato/contato.css">
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
                        <a href="contato.php" class="navegacao__lista-link linkselect">Contato</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./comoComprar.php" class="navegacao__lista-link">Como Comprar</a>
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

    <div class="container">
        <h2 class="titulo">Contato</h2>
        <form id="contact" action="" method="post">
            <fieldset>
                <input placeholder="Seu nome" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Endereço de email" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Numero de telefone" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Escreva sua mensagem aqui...." class="teste" tabindex="5" required></textarea>
            </fieldset>
            <fieldset class="fieldButton">
                <button name="enivar" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
            </fieldset>
        </form>
        <div class="insta">
            <h3 class="feedback__titulo-instagram">Siga-nos</h3>
            <figure>
                <a href="https://www.instagram.com/foreich.technologies/" target="_blank"><img
                        src="/assets/img/instagramPinkIcon.png" alt="" class="feedback__instagram-icon"></a>
            </figure>
        </div>
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
    <!-- Fim do cabecalho -->
    <script src="/assets/js/script.js"></script>
</body>

</html>