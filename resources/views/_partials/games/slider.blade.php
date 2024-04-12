<div id='slider'>
	<div id="puzzle">
		<!-- game/javascript works here -->
	</div>
	<div id='display'>
		<img id="puzzleExample" title="solved puzzle example"src="media/slider/{{$user->track}}/solved.PNG" alt="solved puzzle example">
		<!-- <button id='infoBtn'title='game instructions'>Help</button><br> -->
		<button id='invert' title='invert keyboard controlls'>Invert controls</button> <br>
		<!-- <button id='skip' title="Unlocks in 25 moves" disabled></button><br> -->
	</div>
		<!-- <p >Slider puzzle info: </p> -->
</div>
		<script defer track='{{$user->track}}' src="js/slider/index.js" type="text/javascript"></script>
