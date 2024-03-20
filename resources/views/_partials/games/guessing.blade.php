
		<div id='game'>
			<div id="persil">
				<div id="persilCharacter">
					<p>The mighty persil!</p>
					<img src="..\media\stickmen\Stickman-persile-v1.gif" style='width:120px' alt="">
				</div>
			</div>
			<div id="player">
				<p>Hamilton </p>		
					@if(empty($user->character))
					<img src="..\media\stickmen\Stickman-moustache.svg"  alt="">
					@else 
					<img src="..\media\stickmen\{{ $user->character }}"  alt="">
					@endif
			</div>
				<div id='ui'>
					<div id='chatbox'>You will never guess my age for i am,
						the mighty persil -- the digital footprint expert!
					</div>
					<div id='options'>
						<button id='question'>What will you do?</button>
						<input type="number" value='35'id='numberInput'></input>
						<button id='guess'>Guess</button>
						<button id='giveUp' class='disabled'>Give Up</button>
					</div>	
				</div>
		</div>
		<script src="js/guessing/index.js" type="text/javascript"></script>
 