<div class="radar__wrapper">
	
	<ul class="radar__container">
		
		<div class="radar__behind"></div>
		
		<li class="radar__branch" data-average="50" data-ratings="1">
			<span class="radar__label">Unique</span>
			<ul class="radar__options">
				<li class="radar__option"><a class="radar__link" data-score="1" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="2" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="3" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="4" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="5" href=""></a></li>
			</ul>
		</li>
		
		<li class="radar__branch" data-average="100" data-ratings="1">
			<span class="radar__label">Charisma</span>
			<ul class="radar__options">
				<li class="radar__option"><a class="radar__link" data-score="1" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="2" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="3" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="4" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="5" href=""></a></li>
			</ul>
		</li>
		
		<li class="radar__branch" data-average="70" data-ratings="1">
			<span class="radar__label">Catchy</span>
			<ul class="radar__options">
				<li class="radar__option"><a class="radar__link" data-score="1" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="2" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="3" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="4" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="5" href=""></a></li>
			</ul>
		</li>
		
		<li class="radar__branch" data-average="80" data-ratings="1">
			<span class="radar__label">Technique</span>
			<ul class="radar__options">
				<li class="radar__option"><a class="radar__link" data-score="1" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="2" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="3" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="4" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="5" href=""></a></li>
			</ul>
		</li>
		
		<li class="radar__branch" data-average="20" data-ratings="1">
			<span class="radar__label">Looks</span>
			<ul class="radar__options">
				<li class="radar__option"><a class="radar__link" data-score="1" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="2" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="3" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="4" href=""></a></li>
				<li class="radar__option"><a class="radar__link" data-score="5" href=""></a></li>
			</ul>
		</li>
		
	</ul>
	
</div>

<style>
	* {
		position: relative;
		box-sizing: border-box;
	}
	body {
		margin-top: 100px;
	}
	.radar__wrapper {
		text-align: center;
	}
	.radar__container {
		border: 1px solid rgba(0,0,0, 0.1);
		display: block;
		height: 20rem;
		list-style-type: none;
		margin: 0 auto;
		padding: 0;
		position: relative;
		width: 20rem;
	}
	
	.radar__behind, .radar__after {
		background: rgba(255,0,0, 0.05);
		bottom: 0;
		clip-path: polygon(0 0);
		content: "";
		display: block;
		left: 0;
		pointer-events: none;
		position: absolute;
		right: 0;
		top: 0;
	}
	
	.radar__branch {
		background-image:
			linear-gradient(to bottom, transparent 1px, #666 2px, transparent 0),
			linear-gradient(#ddd, #ddd);
		background-position:
			top center,
			top center;
		background-repeat:
			repeat-y,
			no-repeat;
		background-size:
			10px 20%,
			1px 100%;
		bottom: 50%;
		display: block;
		left: calc(50% - 1rem);
		position: absolute;
		top: 0;
		transform-origin: center bottom;
		width: 2rem;
	}
	.radar__branch:nth-of-type(1) {
		transform: rotate( calc(360deg / 5 * 1) );
	}
	.radar__branch:nth-of-type(2) {
		transform: rotate( calc(360deg / 5 * 2) );
	}
	.radar__branch:nth-of-type(3) {
		transform: rotate( calc(360deg / 5 * 3) );
	}
	.radar__branch:nth-of-type(4) {
		transform: rotate( calc(360deg / 5 * 4) );
	}
	
	.radar__label {
		line-height: 1em;
		position: absolute;
		top: -1em;
		transform-origin: bottom left;
	}
	.radar__branch:nth-of-type(1) .radar__label {
		transform: rotate( calc(360deg / 5 * 1 * -1) ) translate(0%, 0em);
	}
	.radar__branch:nth-of-type(2) .radar__label {
		transform: rotate( calc(360deg / 5 * 2 * -1) ) translate(-50%, 1em);
	}
	.radar__branch:nth-of-type(3) .radar__label {
		transform: rotate( calc(360deg / 5 * 3 * -1) ) translate(-50%, 1em);
	}
	.radar__branch:nth-of-type(4) .radar__label {
		transform: rotate( calc(360deg / 5 * 4 * -1) ) translate(-100%, 0em);
	}
	.radar__branch:nth-of-type(5) .radar__label {
		transform: translate(-50%);
	}
	
	.radar__options {
		display: flex;
		flex-direction: column;
		height: 100%;
		justify-content: space-between;
		list-style-type: none;
		margin: 0;
		padding: 0;
	}
	.radar__option {
		display: block;
		flex: none;
		height: 2rem;
		width: 2rem;
	}
	.radar__option:hover, .radar__option:hover ~ .radar__option {
		background-image: linear-gradient(yellow, yellow);
		background-position: center center;
		background-repeat: no-repeat;
		background-size: 5px 100%;
		opacity: 0.5;
	}
	
	.radar__link {
		border-radius: 50%;
		display: block;
		height: 100%;
		transform: translateY(-50%);
		width: 100%;
	}
	.radar__link:hover {
		background-image: radial-gradient(circle at center, yellow 10px, transparent 11px);
	}
</style>

<script>
	function getNewCoord(rating, numPolygonSides, timesRotated) {
		var x, xCorrected, xRotated, y, yCorrected, yRotated, rotationAngle;
		
		rotationAngle = 360 / numPolygonSides; // Get degrees of one rotation around chart
		rotationAngle = rotationAngle * timesRotated; // Multiply by num of rotations
		rotationAngle = rotationAngle * Math.PI / 180; // Convert to radians
		
		x = 0; // Treating center of container as 0,0
		y = rating; // Rating (percentage, of 100%) acts as y coord
		
		xRotated = x * Math.cos(rotationAngle) + y * Math.sin(rotationAngle); // Percentage away from horiz. center
		yRotated = y * Math.cos(rotationAngle) - x * Math.sin(rotationAngle); // Percentage away from vert. center
		
		xCorrected = 50 + ( xRotated / 2 ); // Assumed center was 0, but is actually 50% from left of container
		yCorrected = 50 - ( yRotated / 2 ); // Assumed center was 0, but is actually 50% from *top* of container
		
		return xCorrected + '% ' + yCorrected + '%';
	}
	
	function getPolygonPath(ratings) {
		var coords = [];
		var numMetrics = ratings.length;
		
		ratings.forEach(function(rating, index) {
			coords.push( getNewCoord(rating, numMetrics, index) );
		});
		
		return coords.join(', ');
	}
	
	var radarContainer = document.querySelector('.radar__container');
	
	var radarAverages = [];
	
	var radarBranches = radarContainer.querySelectorAll('.radar__branch');
	radarBranches.forEach(function(branch, index) {
		radarAverages.push(branch.dataset.average);
	});
	
	var radarBehind = document.querySelector('.radar__behind');
	radarBehind.style.clipPath = 'polygon(' + getPolygonPath(radarAverages) + ')';
	
	var radarAfter = document.querySelector('.radar__after');
	radarAfter.style.clipPath = 'polygon(' + getPolygonPath([ 50, 100, 30, 10, 70 ]) + ')';
</script>