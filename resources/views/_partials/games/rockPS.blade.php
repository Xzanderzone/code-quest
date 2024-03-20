
		<div id='game'>
			<div id="persil">
				<p>The mighty persil!</p>
				<img src="..\media\stickmen\Stickman-persile-v1.gif" style='width:120px' alt="">
			</div>
			<div id="player">
				<p>Hamilton </p>		
					@if(empty($user->character))
					<img src="..\media\stickmen\Stickman-moustache.svg" style='width:50px' alt="">
					@else 
					<img src="..\media\stickmen\{{ $user->character }}" style='width:50px' alt="">
					@endif
			</div>
			<div id='ui'>
				<div id='chatbox'>You didn't manage to find my age!
					Bet you cant defeat ME in rock paper scissors either.
					Best 3 out of 5 wins! good luck.
				</div>
				<div id='options'>
					<button id='question' disabled class='disabled'>Chose!</button>
					<button id='rock'>🗿Rock</button>
						<button id='paper'>📃Paper</button>
						<button id='scissor'>✂️Scissor</button>
					</div>	
				</div>
			</div>
			<script src="js/rockPS/index.js" type="text/javascript"></script>