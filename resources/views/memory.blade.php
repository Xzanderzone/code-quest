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
		    <link rel="stylesheet" type="text/css" media="screen" href="css/memory.css" />
        <title>A Web Dev Journey</title>
    </head>
<body>
    @include("_partials.header") 
    <main class="game">
        <div class="terminal">
            <div class="bar">
                <p>📟 MEMORY GAME</p>
                <div>
                <button id='skip'disabled>Skip</button>
		        <button id='infoBtn'>Help</button>
                </div>
            </div>
            <div class="content">
    @include("_partials.games.memory")
    <div class="popup terminal" id="won" style="display: none">
                    <div class="bar">
                        <p >📟 YOU WIN 😁</p>
                    </div>
                    <div class="content">
                        <p id="msgWin" class='matrix-text'>📟 YOU WIN 😁</p>
                        <br>       
                        <form action="/memory" method="POST">
                    @csrf
                            <input type="text" name='skill' id='skill' style="display:none" >
                            <input type="text" name='skill2' id='skill2' style="display:none" >
                            <input type="text" name='skill3' id='skill3' style="display:none" >
                            <button  class='nextBtn'>> NICE! CONTINUE</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="popup terminal" id="warning" style="display: none">
                    <div class="bar">
                        <p>📟WARNING: SKIP HAS IMPACT</p>
                    </div>
                    <div class="content">
                        <p class='matrix-text'>ARE YOU SURE YOU WANT TO SKIP THIS GAME ? </p>
                        <p class='matrix-text'>THIS WILL NEGATIVELY IMPACT YOUR SCORE </p> 
                        <p class='matrix-text'>SKILLS WILL NOT BE UNLOCKED! </p> <br>
                        <button id='continueGame'>> KEEP GOING </button>
                        <button id="animationButton" class="skipBtn">> I'M SURE! LET ME SKIP</button>
                    </div>
                </div>
        </div>
    </main>
</body>
</html>