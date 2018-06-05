<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" href="css/style.css">
    <title>Unify</title>
</head>
<body class="quiz">
    <div class="header-background"></div>
    <div class="container">

        <form action="#">
            <section class="quiz-container">

                <div class="question">
                    <div class="question-header">
                        <p class="question-num text-white text-thin">
                            Questão <?="1"?> de 10
                        </p>

                        <p class="question-ask text-white">
                            <?="Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit?"?>
                        </p>

                        <div class="asks-container">
                            <div class="ask-button">
                                <input name="q<?='1'?>" id="1" type="radio" class="ask-radio">
                                <label for="1">
                                    <?="Lorem ipsum"?>
                                </label>
                            </div>

                            <div class="ask-button">
                                <input name="q<?='1'?>" id="2" type="radio" class="ask-radio">
                                <label for="2">
                                    <?="Lorem ipsum"?>
                                </label>
                            </div>


                            <div class="ask-button">
                                <input name="q<?='1'?>" id="3" type="radio" class="ask-radio">
                                <label for="3">
                                    <?="Lorem ipsum"?>
                                </label>
                            </div>


                            <div class="ask-button">
                                <input name="q<?='1'?>" id="4" type="radio" class="ask-radio">
                                <label for="4">
                                    <?="Lorem ipsum"?>
                                </label>
                            </div>


                            <div class="timer-wrapper">
                                <figure class="clock-image">
                                    <img src="img/icons/ico-relogio.png" alt="Temporizador">
                                </figure>
                                <div class="timer-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <div class="question-header">
                        <p class="question-num text-white text-thin">
                            Questão <?="1"?> de 10
                        </p>

                        <p class="question-ask text-white">
                            <?="Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit?"?>
                        </p>

                        <div class="asks-container">
                            <div class="ask-button">
                                <input name="q<?='1'?>" id="1" type="radio" class="ask-radio">
                                <label for="1">
                                    <?="Lorem ipsum"?>
                                </label>
                            </div>

                            <div class="ask-button">
                                <input name="q<?='1'?>" id="2" type="radio" class="ask-radio">
                                <label for="2">
                                    <?="Lorem ipsum"?>
                                </label>
                            </div>


                            <div class="ask-button">
                                <input name="q<?='1'?>" id="3" type="radio" class="ask-radio">
                                <label for="3">
                                    <?="Lorem ipsum"?>
                                </label>
                            </div>


                            <div class="ask-button">
                                <input name="q<?='1'?>" id="4" type="radio" class="ask-radio">
                                <label for="4">
                                    <?="Lorem ipsum"?>
                                </label>
                            </div>


                            <div class="timer-wrapper">
                                <figure class="clock-image">
                                    <img src="img/icons/ico-relogio.png" alt="Temporizador">
                                </figure>
                                <div class="timer-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </form>

        <div class="controllers">
            <button type="button" class="slick-jump inverse-button">Pular</button>
            <button type="button" class="slick-next button">Próxima</button>
        </div>
    </div>
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="js/app.min.js"></script>
</body>
</html>