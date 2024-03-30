
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
        <script src="js/script.js" defer></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css" />
        <title>A Web Dev Journey</title>
    </head>
    <body>
        @include("_partials.header") 
        <main class="game">
            <div class="terminal">
                <!-- warning -->
                <div class="popup terminal" id="warning" style="display: none">
                    <div class="bar">
                        <p>📟WARNING: SKIP HAS IMPACT</p>
                    </div>
                    <div class="content">
                        <p class='matrix-text'>ARE YOU SURE YOU WANT TO SKIP THIS GAME ? </p>
                        <p class='matrix-text'>THIS WILL NEGATIVELY IMPACT YOUR SCORE </p> 
                        <button id='continueGame'>> KEEP GOING </button>
                        <a href="/story">> Reset puzzle </a><br>
                        <a href="/next">> I'M SURE! LET ME SKIP</a>
                    </div>
                </div>
                <!-- extra info  -->
                <div class="popup terminal" id="info" style="display: none">
                    <div class="bar">
                        <p>📟Slider puzzle info </p>
                    </div>
                    <div class="content">
                        <p class='matrix-text'>The goal of this game is to restore the image, <br>
                           starting in the top left and working row by row is advised.</p> 
                        <button id='return'>>Got it!</button>
                    </div>
                </div>
                <!-- winning  -->
                <div class="popup terminal" id="won" style="display: none">
                    <div class="bar">
                        <p >📟 YOU WIN 😁</p>
                    </div>
                    <div class="content">
                        <p id="msgWin">📟 YOU WIN 😁</p>
                        <br>       
                        <form action="/slider" method="POST">
                    @csrf
                            <input type="text" name='skill' id='skill' style="display:none" >
                            <!-- <input type="text" id='skill2' style="display:none" > -->
                            <button >> NICE! CONTINUE</button>
                        </form>
                    </div>
                </div>
                <div class="bar">
                    <p>📟 SLIDER PUZZLE</p>
                </div>
                <div class="content">
                    <div class="board">
                        @include("_partials.games.slider")
                    </div>
                </div>
            </div>
        </main>
    </body>
    </html>