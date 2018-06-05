<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Unify</title>
</head>
<body class="dashboard">
    <div class="container">
        <?php include('header.php') ?>
        
        <section class="greeting">
            <h1 class="title">
                Olá, <?='Bruno'?>!
            </h1>
        </section>
        <section class="school-rank">
            <h2 class="section-title">
                Melhores Escolas
            </h2>

            <div class="school">
                <div class="school-logo-wrapper">
                    <img src="<?='img/escola-logo.jpg'?>" alt="Logo da escola">
                </div>
                <div class="datas">
                    <p class="text-white school-name">
                        <?='Colégio Módulo'?>
                    </p>
                    <p class="text-white text-thin school-points">
                        <?='1500'?>pts
                    </p>
                </div>
                <p class="school-position text-white">
                    #1
                </p>
            </div>
        </section>
            
        <section class="students-rank">
            <h2 class="section-title">
                Melhores Alunos
            </h2>
            <ol class="rank">
                <a href="/student-profile.php">
                    <li class="student">
                            <p class="position">
                                1
                            </p>
                            <div class="stutend-img-wrapper">
                                <img src="<?='img/lorem-person.png'?>" alt="Foto do estudante">
                            </div>
                            <div class="datas">
                                <p class="name">
                                    <?='Vinicius Felippe'?>
                                </p>
                                <p class="school">
                                    <?='Instituto Bradesco'?>
                                </p>
                            </div>
                            <p class="points">
                                <?='850'?>pts
                            </p>
                    </li>
                </a>
            </ol>
        </section>
        <section class="cta">
            <a href="quiz.php" class="button">Participe do Quiz</a>
        </section>
    </div>
   
</body>
</html>