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
        <link rel="stylesheet" href="css/mastermind.css">
        <script src="js/mastermind.js" defer></script>
        <script src="js/script.js" defer></script>
        <title>A Web Dev Journey</title>
    </head>
<body>
    @include("_partials.header") 
    <main class="game">
        <div class="popup terminal" id="lost" style="display: none">
            <div class="bar">
                <p>📟 YOU LOSE 😭</p>
            </div>
            <div class="content">
                <p class='matrix-text'>YOU DIDN'T CRACK THE CODE THIS TIME! </p> <br><br>
                <a href="/story">> TRY AGAIN</a><br><br>
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
                <a href="/story">> KEEP GOING </a><br><br>
                <a href="/next">> I'M SURE! LET ME SKIP</a>
            </div>
        </div>
        <div class="popup terminal" id="won" style="display: none">
            <div class="bar">
                <p>📟 YOU WIN 😁</p>
            </div>
            <div class="content">
                <p class='matrix-text'> YOU ARE THE MASTERMIND </p>
                <p class='matrix-text'> You unlocked HTML & CSS </p>
                <form action="/mastermind" method="POST">
                    @csrf
                    <input type="text" name='skill'id='skill' style="display:none" >
                    <!-- <input type="text" id='skill2' style="display:none" > -->
                    <button >> NICE! CONTINUE</button>
                </form>
            </div>
        </div>
        <div class="terminal">
            <div class="bar">
                <p>📟 MASTERMIND</p>
            </div>
            <div class="content">
                <div class="board">
                    <div class="top">
                        <div class="playbutton"></div>
                        <div class="secret-code">
                            <div class="answer"></div>
                            <div class="answer"></div>
                            <div class="answer"></div>
                            <div class="answer"></div>
                        </div>
                    </div>
                    <div class="playground">
                        <div class="row">
                            <div class="rownumber">12</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">11</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">10</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">9</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">8</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">7</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">6</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">5</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">4</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">3</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">2</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                        <div class="row">
                            <div class="rownumber">1</div>
                            <div class="result">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="attempt">
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                                <div class="placeholder"></div>
                            </div>
                            <div class="confirm"></div>
                        </div>
                    </div>
                    <div class="colorselections">
                        <div class="colorselection black" id="black"></div>
                        <div class="colorselection white" id="white"></div>
                        <div class="colorselection red" id="red"></div>
                        <div class="colorselection blue" id="blue"></div>
                        <div class="colorselection green" id="green"></div>
                        <div class="colorselection yellow" id="yellow"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>