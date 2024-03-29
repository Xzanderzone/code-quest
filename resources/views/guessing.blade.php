<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/guessing.css" />
    <title>A Web Dev Journey</title>
</head>
<body>
    @include("_partials.header") 
    <main class="game">
        <div class="terminal">
            <div class="popup terminal" id="lost" style="display: none">
                <div class="bar">
                    <p>📟 IMPOSSIBLE ODDS 😭</p>
                </div>
                <div class="content">
                    <p id='msgLost'>📟 YOU LOSE 😭</p>
                    <br>
                    <a id='msgLink' href="/next">> Let's Rock!</a>
                </div>
            </div>
            <div class="popup terminal" id="won" style="display: none">
                <div class="bar">
                    <p>📟 THE MIGHTY PERSIL 😁</p>
                </div>
                <div class="content">
                    <p id="msgWin" style='color:white;'>Surrender now! You will never find my age.<br>
                        Let us settle this in a game of Rock paper scissor instead.</p>
                    <br>
                    <br>
                    <a id="continue"><u>>I AM DETERMINED</u></a>
                    <br>
                    <br>
                    <a href="/next"><u>>Rock Paper Scissor it is!</u></a>
                </div>
            </div>
            <div class="bar">
                <p>📟 GUESSING GAME</p>
            </div>
            <div class="content">
                @include("_partials.games.guessing")
            </div>
        </div>
    </main>
</body>