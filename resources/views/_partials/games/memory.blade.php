<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Memory Card Game</title>
  </head>
  <body>
    <div class="grid-container">
    <script defer track='{{$user->track}}' src="js/memory/index.js"></script>
    </div>
    <p id="score-text">Score: <span class="score"></span></p>
    <div class="actions">
        <button onclick="restart()">Restart</button>
	</div>
    </div>
  </body>
</html>