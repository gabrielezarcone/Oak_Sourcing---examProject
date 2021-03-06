<?php session_start(); ?>
<!DOCTYPE html5>

<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once("lib/header.php")?>
    <?php include_once("lib/navbarHome.php")?>
    <title>Oak_Sourcing</title>
</head>
<body>
    


    <div class="uk-section uk-section-primary uk-preserve-color section worker">
        <div class="uk-container" >
            <div uk-grid >
                <div class="uk-width-1-2" uk-parallax="y: +100%">
                    <div class="uk-card uk-card-default uk-card-body myCard" uk-parallax="y: -50%">
                        <h2 class="uk-card-title" style="color: var(--worker-color)">Louis Armstrong, a sad and powerful voice</h2>
                        <p>Valuta il \"sentiment\" del messaggio sottostante.<br /> Sentiment <b>positivo</b>: il messaggio esprime un giudizio positivo rispetto all'argomento trattatp<br />Sentiment <b>negativo</b>: il messaggio esprime un giudizio negativo rispetto all'argomento trattato<br />Sentiment <b>neutro</b> (caso 1): il messaggio NON esprime un giudizio positivo o negativo rispetto all'argomento trattato<br />Sentiment <b>neutro</b> (caso 2): il messaggio esprime SIA un giudizio positivo SIA un giudizio negativo rispetto all'argomento trattato<br /><br />Ricorda che l'obiettivo è valutare il sentiment espresso dall'autore e non esprimere il proprio sentiment rispetto al messaggio.</p>
                        <input type="radio" name="trial" checked> Positivo<br>
                        <input type="radio" name="trial"> Negativo<br>
                        <input type="radio" name="trial"> Neutro<br>
                        <button class="uk-button uk-button-default worker">Submit Aswer</button>
                    </div>
                </div>
                <div class="uk-width-1-2 uk-text-center" style="padding: 5%;" uk-parallax="y: 100%">
                    <h1 style="color: white;">Answer and get paid helping others 💱</h1>
                    <h3>Partecipate to campaigns and answer to any question you receive! In this way you can help people to obtain a crowd response to their problems. <b>Be a part of the crowd!</b> </h3>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="uk-section uk-section-primary uk-preserve-color section requester">
        <div class="uk-container">
            <div uk-grid >
                <div class="uk-width-1-2 uk-text-center" style="padding: 5%;" uk-parallax="y: 200">
                    <h1 style="color: white;">Ask whatever you want to the crowd and collect the answers 🏟</h1>
                    <h3>Use for your evil porpouse the power of the crowd. Ask and you will receive!</h3>
                </div>
                <div class="uk-width-1-2" uk-parallax="y: +200">
                    <div class="uk-card uk-card-default uk-card-body myCard">
                        <h2 class="uk-card-title" style="color: var(--worker-requester)">Louis Armstrong, a sad and powerful voice</h2>
                        <p>Valuta il \"sentiment\" del messaggio sottostante.<br /> Sentiment <b>positivo</b>: il messaggio esprime un giudizio positivo rispetto all'argomento trattatp<br />Sentiment <b>negativo</b>: il messaggio esprime un giudizio negativo rispetto all'argomento trattato<br />Sentiment <b>neutro</b> (caso 1): il messaggio NON esprime un giudizio positivo o negativo rispetto all'argomento trattato<br />Sentiment <b>neutro</b> (caso 2): il messaggio esprime SIA un giudizio positivo SIA un giudizio negativo rispetto all'argomento trattato<br /><br />Ricorda che l'obiettivo è valutare il sentiment espresso dall'autore e non esprimere il proprio sentiment rispetto al messaggio.</p>
                        <input type="radio" name="trial" checked> Positivo -> 60% ✅<br>
                        <input type="radio" name="trial"> Negativo -> 30%<br>
                        <input type="radio" name="trial"> Neutro -> 10%<br>
                        <button class="uk-button uk-button-default worker">Submit Aswer</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

</body>
</html>