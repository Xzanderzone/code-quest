
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
        <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css" />
        <script src="js/mastermind.js" defer></script>
        <title>A Web Dev Journey</title>
    </head>
<body>
    @include("_partials.header") 
    <main class="game">
        <div class="terminal">
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