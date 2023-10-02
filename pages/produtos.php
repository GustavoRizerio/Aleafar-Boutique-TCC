<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="shortcut icon" href="../assets/img/Logo.jpeg" />

    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/components/cabecalho/cabecalho.css">
    <link rel="stylesheet" href="../assets/css/components/botaoTopo/botaoTopo.css">
    <link rel="stylesheet" href="../assets/css/components/rodape/rodape.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components/instagram/insta.css">
    <link rel="stylesheet" href="../assets/css/produtos/produtos.css">

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
                        <a href="produtos.php" class="navegacao__lista-link linkselect">Produtos</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./contato.php" class="navegacao__lista-link">Contato</a>
                    </li>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./comoComprar.php"class="navegacao__lista-link">Como Comprar</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./perguntas.php"class="navegacao__lista-link">Perguntas Frequentes</a>
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

    <div class="pesquisa__barra">
        <div class="pesquisa">
            <form class="pesquisa__form">
                <input type="text" class="pesquisa__texto" placeholder="Pesquisar">
                <button type="submit" class="pesquisa__botao">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <h1 class="produtos__titulo">Produtos</h1>

    <div class="produtos__container">
        <div class="card">
            <div class="container__imagem">
                <img src="../img/jaqueta cinza.png" alt="" class="imagem__teste">
            </div>
            <div class="container__informacoes">
                <h3>Jaqueta</h3>
                <h2 class="preco">R$ 48<small>.99</small></h2>
                <a href="#" class="comprar">Comprar Agora</a>
            </div>
        </div>
        <div class="card">
            <div class="container__imagem">
                <img src="../img/conjuntoJeans.jpg" alt="">
            </div>
            <div class="container__informacoes">
                <h3>Conjunto Jeans</h3>
                <h2 class="preco">R$ 48<small>.99</small></h2>
                <a href="#" class="comprar">Comprar Agora</a>
            </div>

        </div>
        <div class="card">
            <div class="container__imagem">
                <img src="../img/bda1f8c81ca717a6bb7816406701fee0.jpg" alt="">
            </div>
            <div class="container__informacoes">
                <h3>Conjunto Jeans</h3>
                <h2 class="preco">R$ 48<small>.99</small></h2>
                <a href="#" class="comprar">Comprar Agora</a>
            </div>
        </div>
        <div class="card">
            <div class="container__imagem">
                <img src="../img/fbdfbcd697a23485c07884f15787192f.jpg" alt="">
            </div>
            <div class="container__informacoes">
                <h3>Conjunto Jeans</h3>
                <h2 class="preco">R$ 48<small>.99</small></h2>
                <a href="#" class="comprar">Comprar Agora</a>
            </div>
        </div>
        <div class="card">
            <div class="container__imagem">
                <img src="../img/jaqueta preta.png" alt="">
            </div>
            <div class="container__informacoes">
                <h3>Conjunto Jeans</h3>
                <h2 class="preco">R$ 48<small>.99</small></h2>
                <a href="#" class="comprar">Comprar Agora</a>
            </div>
        </div>
        <div class="card">
            <div class="container__imagem">
                <img src="../img/6252ffa2e0cc7bb51d40039a2c94fe6c.jpg" alt="">
            </div>
            <div class="container__informacoes">
                <h3>Lora Gata</h3>
                <h2 class="preco">R$ 48<small>.99</small></h2>
                <a href="#" class="comprar">De graça pro Roni</a>
            </div>
        </div>
        <div class="card">
            <div class="container__imagem">
                <img src="../img/8c7618d1eeefd492443a585e0b2039c7.jpg" alt="">
            </div>
            <div class="container__informacoes">
                <h3>Legging</h3>
                <h2 class="preco">R$ 48<small>.99</small></h2>
                <a href="#" class="comprar">Comprar</a>
            </div>
        </div>
        <div class="card">
            <div class="container__imagem">
                <img src="../img/7bb73f972d007ee4b69f70a9574f4b6a.jpg" alt="">
            </div>
            <div class="container__informacoes">
                <h3>Casaco</h3>
                <h2 class="preco">R$ 71<small>.99</small></h2>
                <a href="#" class="comprar">Comprar</a>
            </div>
        </div>
        <div class="card">
            <div class="container__imagem">
                <img src="../img/b0477e418c9bb9831ac98d274f793b9d.jpg" alt="">
            </div>
            <div class="container__informacoes">
                <h3>Blusa Lã de Carneiro</h3>
                <h2 class="preco">R$ 135<small>.68</small></h2>
                <a href="#" class="comprar">Comprar</a>
            </div>
        </div>
        <div class="card">
            <div class="container__imagem">
                <img src="../img/selfie.jpg" alt="">
            </div>
            <div class="container__informacoes">
                <h3>Top sem decote</h3>
                <h2 class="preco">R$ 25<small>.48</small></h2>
                <a href="#" class="comprar">Comprar</a>
            </div>
        </div>
    </div>

    <div class="insta">
        <h3 class="feedback__titulo-instagram">Siga-nos</h3>
        <figure>
            <a href="https://www.instagram.com/foreich.technologies/" target="_blank"><img
                    src="/assets/img/instagramPinkIcon.png" alt="" class="feedback__instagram-icon"></a>
        </figure>
    </div>

    <!-- Começo footer  -->
    <footer class="rodape__container">
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