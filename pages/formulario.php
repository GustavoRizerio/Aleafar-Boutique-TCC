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

  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/formulario/formulario.css">

  <!-- Icone da pagina -->
  <link rel="icon" href="icon-tcc.png">

  <!-- icons -->
  <script src="https://kit.fontawesome.com/5cb800ca59.js" crossorigin="anonymous"></script>

</head>
  <body>
    <a href="../index.php" class="link__voltar">
      <i class="fa-solid fa-arrow-left fa-xl" style="color: #000;"></i>
    </a>
    <section>
      <div class="container">
        <div class="usuario container__login">
          <div class="container__img"><img src="https://i.imgur.com/F2FAzLp.jpg" alt="" /></div>
          <div class="container__formulario">
            <form action="">
              <h2>Login</h2>
              <input type="text" name="" placeholder="Nome" class="input__login" required/>
              <input type="password" name="" placeholder="Senha" class="input__login" required/>
              <input type="submit" name="" value="Entrar" class="input__login" />
              <p class="conta__botao">
                Não tem uma conta ?
                <a href="#" onclick="cadastro();">Se cadastre.</a>
              </p>
            </form>
          </div>
        </div>
        <div class="usuario container__cadastro">
          <div class="container__formulario">
            <form action="">
              <h2>Crie sua conta</h2>
              <input type="text" name="" placeholder="Nome" required/>
              <input type="email" name="" placeholder="Email" required/>
              <input type="password" name="" placeholder="Senha" required/>
              <input type="password" name="" placeholder="Confirme sua senha" required/>
              <input type="submit" name="" value="Cadastro" />
              <p class="conta__botao">
                Ja tem uma conta ?
                <a href="#" onclick="login();">Faça login.</a>
              </p>
            </form>
          </div>
          <div class="container__img"><img src="https://i.imgur.com/6hmUsfZ.jpeg" alt="" /></div>
        </div>
      </div>
    </section>

  <script src="../assets/js/formulario.js"></script>
  <script src="../../tests/formularioTeste.js"></script>
</body>

</html>