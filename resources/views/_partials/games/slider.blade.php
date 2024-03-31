<div id='slider'>
	<div id="puzzle">
		<!-- game/javascript works here -->
	</div>
	<div id='display'>
		<img id="puzzleExample" src="./media/slider/{{$user->track}}/solved.png" alt="solved puzzle example">
		<button id='invert'>Invert controls</button> <br>
		<button id='skip' disabled>Give up</button><br>
		<button id='infoBtn'>Help</button><br>
	</div>
		<!-- <p >Slider puzzle info: </p> -->
</div>
		<script defer track='{{$user->track}}' src="js/slider/index.js" type="text/javascript"></script>
