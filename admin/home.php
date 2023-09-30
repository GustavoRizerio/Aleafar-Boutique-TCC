<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | GN</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #efd2d7;
            text-align: center;
            color: white;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid #efd2d7;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover {
            background-color: #ff5d78;
        }
    </style>
</head>

<body>
    <div class="box">
        <a href="./frontend/login.php">Login</a>
        <a href="./frontend/formulario.php">Cadastrar usuario</a>
    </div>
</body>

</html>