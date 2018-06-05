<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Unify</title>
</head>
<body class="cadastro">
    <div class="container">
        <header>
            <img src="img/logo-min-colorido.png" alt="Unify" class="logo">
            <a href="/">
                <img src="img/close-button.png" alt="Fechar" class="close-button">
            </a>

        </header>
        
        <section class="welcome">
            <form action="cadastro.php" class="register-form">
                <input type="text"  placeholder="Nome completo" name="nome" class="text-field">
                <select placeholder="Escola" name="escola" class="text-field">
                    <option value="Escola" disabled selected>Escola</option>
                    <option value="Colégio Módulo">Colégio Módulo</option>
                </select>
                <input type="text" placeholder="Usuário" name="usuario" class="text-field">
                <input type="text" placeholder="E-mail" name="email" class="text-field">
                <input type="password" placeholder="Senha" name="senha" class="text-field">
                <input type="submit" class="button register-button" value="Cadastrar">
            </form>
        </section>
    </div>
   
</body>
</html>