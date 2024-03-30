<div id='slider'>
	<div id="puzzle">
		<!-- game/javascript works here -->
	</div>
	<div id='display'>
		<img src="./media/slider/java/solved.png" alt="solved puzzle example">
		<button id='invert'>Invert controls</button> <br>
		<button id='skip' disabled>Give up</button><br>
		<form action="/slider">
			<input type="text" id='skill' style="display:none" >
			<button id='infoBtn'>Help</button><br>
		</form>
	</div>
		<!-- <p >Slider puzzle info: </p> -->
</div>
		<script defer track='{{$user->track}}' src="js/slider/index.js" type="text/javascript"></script>
