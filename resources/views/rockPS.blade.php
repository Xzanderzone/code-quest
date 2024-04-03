<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="css/rockPS.css" />
        <script src="js/script.js" defer></script>
        <title>A Web Dev Journey</title>
    </head>
    <body>
        @include("_partials.header") 
        <main class="game">
            <div class="terminal">
                <div class="popup terminal" id="lost" style="display: none">
                    <div class="bar">
                        <p>📟 YOU LOSE 😭</p>
                    </div>
                    <div class="content">
                        <p id='msgLost' class='matrix-text'> YOU LOSE </p>
                        <br>
                        <a id='msgLink'href="/story">> Not throwing away my shot!(try again)</a>
                        <button id='skip'>> SKIP</button>
                    </div>
                </div>
                <div class="popup terminal" id="warning" style="display: none">
                    <div class="bar">
                        <p>📟 WARNING: SKIP HAS IMPACT</p>
                    </div>
                    <div class="content">
                        <p class='matrix-text'>ARE YOU SURE YOU WANT TO SKIP THIS GAME ? </p> <br>
                        <p class='matrix-text'>THIS WILL NEGATIVELY IMPACT YOUR SCORE </p> <br>
                        <p class='matrix-text'>SKILL WILL NOT BE UNLOCKED: JavaScript </p> <br>
                        <a href="/story">> KEEP GOING </a><br><br>
                        <button id="animationButton" class="skipBtn">> I'M SURE! LET ME SKIP</button>
                    </div>
                </div>
                <div class="popup terminal" id="won" style="display: none">
                    <div class="bar">
                        <p >📟 YOU WIN 😁</p>
                    </div>
                    <div class="content">
                        <p id="msgWin"class='matrix-text'>📟 YOU WIN 😁</p>
                        <br>
                <form action="/rockps" method="POST">
                    @csrf
                    <input type="text" name='skill'id='skill' style="display:none" >
                    <!-- <input type="text" id='skill2' style="display:none" > -->
                    <button  class='nextBtn'>> NICE! CONTINUE</button>
                </form>
                    </div>
                </div>
                <div class="bar">
                    <p>📟 ROCK PAPER SCISSOR</p>
                </div>
                <div class="content">
                    @include("_partials.games.rockPS")
                </div>
            </div>
        </main>
    </body>
    </html>