<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/webroot/css/style.css">
    <title>Unify</title>
</head>
<body class="home">
    <div class="container">
    <?php include('pages/header.php') ?>

        <section class="welcome">
            <div class="greetings">
                <h1 class="title">
                    Bem-vindo!
                </h1>
                <p class="subtitle">
                    Faça o login para continuar.
                </p>
            </div>
            <form action="login.php" class="login-form">
                <input type="text" placeholder="Usuário" class="text-field">
                <input type="password" placeholder="Senha" class="text-field">
                <input type="submit" class="button login-button" value="ENTRAR">
            </form>

            <div class="functions">
                <a href="#" class="text-orange text-bold">Esqueceu sua senha?</a> <br>
                <p class="text-grey">Ainda não tem uma conta?</p> <a href="/cadastro.php" class="text-bold text-orange">Crie uma.</a>
            </div>
        </section>
    </div>

</body>
</html>
