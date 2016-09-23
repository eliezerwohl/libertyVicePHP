<div class="col-md-12 section text-center jumbotron hideIt" id="demosSection">
		<h3 class="pink">Check out our first demo, "A Nice Day Inside" </h3>
		<audio id="myTune">
			  <source src="/assets/music/niceDayInsideBeta.mp3">
			</audio>
		<div class="wrap hidden-xs ">
			<div class="boombox">
				<div class="handle"></div>
				<div class="body">
					<div class="controls">
						<div class="control-section-left"></div>
						<div class="control-section-right"></div>
					</div>
					<div class="left-speaker">
						<div class="circle"></div>
					</div>
					<div class="right-speaker">
						<div class="circle"></div>
					</div>
					<div class="display"></div>
					<div class="front-markings">
						<br>
						<button class="btn btn-block btn-default" onclick="document.getElementById('myTune').play()"><span class="glyphicon glyphicon-play"> </button>

						<button class="btn btn-md btn-block  btn-default" onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;"><span class="
	glyphicon glyphicon-stop"></button>
					</div>
				</div>
			</div>
		</div>
		<div class="visible-xs">
			<button class="btn btn-block btn-default" onclick="document.getElementById('myTune').play()"><span class="glyphicon glyphicon-play"> </button>
			<button class="btn  btn-block btn-default" onclick="document.getElementById('myTune').pause()"><span class="
	glyphicon glyphicon-pause"> </button>
			<button class="btn btn-md btn-block  btn-default" onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;"><span class="
	glyphicon glyphicon-stop"></button>
		</div>
	</div>