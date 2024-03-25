
		<div id='game'>
		<div id="persil">
			<div id='historyBasile'>
						<p>Persils Choice:</p><br>
				<img id="basileSVG"style='width:100px'src="\media\rock_paper_scissor\scissor.svg"></img></div>
				<!-- <object data="\media\rock_paper_scissor\rock.svg" width="100" height="100"> </object> -->
					<div id="persilCharacter">
						<p>The mighty Persil!</p>
						<img src="..\media\stickmen\Stickman-persile-v1.gif" style='width:120px' alt="">
					</div>
						
			</div>
			<div id="player">
				<div>
					<p style="text-align:center">{{$user->name}} </p>
					@if(empty($user->character))
					<img src="..\media\stickmen\Stickman-moustache.svg"  alt="">
					@else 
					<img src="..\media\stickmen\{{ $user->character }}"  alt="">
					@endif
				</div>
				<div id='history'>
						<p>Your Choice:</p><br>
				<img id="playerSVG"style='width:100px'src="\media\rock_paper_scissor\scissor.svg"></img></div>
			</div>
			<div id='ui'>
				<p id='chatbox'>You didn't manage to find my age!
					Bet you cant defeat ME in rock paper scissors either.
					Best 3 out of 5 wins! good luck.</p>
				<div id='options'>
					<button id='question' disabled class='disabled'>Chose!</button>
					<button id='rock'>🗿Rock</button>
						<button id='paper'>📃Paper</button>
						<button id='scissor'>✂️Scissor</button>
					</div>	
				</div>
			</div>
			<script src="js/rockPS/index.js" type="text/javascript"></script>