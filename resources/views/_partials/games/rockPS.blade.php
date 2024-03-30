<div id='rps'>
	<div id="persil">
		<div id='historyBasile'>
			<p>Persils Choice</p><br><br>
			<img id="basileSVG"style='width:100px'src=""></img></div>
			<div id="persilCharacter">
				<p>The mighty Persil!</p>
				<img src="..\media\stickmen\Stickman-persile-v1.gif"style='width:120px' alt="">
			</div>
		</div>
		<div id="player">
			<div>
				<p style="text-align:center">It's a me! </p>
				@if(empty($user->character))
				<img src="..\media\stickmen\Stickman-moustache.svg"  alt="">
				@else 
				<img src="..\media\stickmen\{{ $user->character }}"  alt="">
				@endif
			</div>
			<div id='history'>
				<p>Your Choice</p><br><br>
				<img id="playerSVG"style='width:100px'src=""></img></div>
			</div>
			<div id='ui'>
				<p id='chatbox'>You didn't manage to find my age!<br>
					Bet you cant defeat ME in rock paper scissors either.<br>
					Best 3 out of 5 wins!<br> good luck.</p>
					<div id='options'>
						<button id='fight' disabled >Fight!</button>
						<button id='rock' class=''>🗿Rock</button>
						<button id='paper' class=''>📃Paper</button>
						<button id='scissor' class=''	>✂️Scissor</button>
					</div>	
				</div>
			</div>
			<script src="js/rockPS/index.js" type="text/javascript"></script>