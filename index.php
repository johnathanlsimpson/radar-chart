<div class="radar__wrapper">
	
	<ul class="radar__container">
		
		<div class="radar__behind"></div>
		
		<li class="radar__branch">
			<span class="radar__label">Looks</span>
			<ul class="radar__options">
				<li class="radar__option"><a href="">4</a></li>
				<li class="radar__option"><a href="">3</a></li>
				<li class="radar__option"><a href="">2</a></li>
				<li class="radar__option"><a href="">1</a></li>
			</ul>
		</li>
		
		<li class="radar__branch">
			<span class="radar__label">Unique</span>
			<ul class="radar__options">
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
			</ul>
		</li>
		
		<li class="radar__branch">
			<span class="radar__label">Charisma</span>
			<ul class="radar__options">
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
			</ul>
		</li>
		
		<li class="radar__branch">
			<span class="radar__label">Catchy</span>
			<ul class="radar__options">
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
			</ul>
		</li>
		
		<li class="radar__branch">
			<span class="radar__label">Technique</span>
			<ul class="radar__options">
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
				<li class="radar__option"><a href=""></a></li>
			</ul>
		</li>
		
	</ul>
	
</div>

<style>
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
	
	.radar__behind {
		background: rgba(255,0,0, 0.1);
		bottom: 0;
		content: "";
		display: block;
		left: 0;
		position: absolute;
		right: 0;
		top: 0;
	}
	
	.radar__branch {
		background: rgba(0,255,0, 0.1);
		border: 1px solid green;
		bottom: 50%;
		display: block;
		left: calc(50% - 1rem);
		padding-bottom: 2rem;
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
		position: absolute;
	}
	
	.radar__options {
		border: 1px solid red;
		display: flex;
		flex-direction: column;
		height: 100%;
		justify-content: space-between;
		list-style-type: none;
		margin: 0;
		padding: 0;
	}
	.radar__option {
		border: 1px solid yellow;
		display: block;
		height: 2rem;
		width: 2rem;
	}
	.radar__option:hover {
		background: yellow;
	}
	.radar__option:hover ~ .radar__option {
		background: yellow;
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
	
	var radarElem = document.querySelector('.radar__behind');
	radarElem.style.clipPath = 'polygon(' + getPolygonPath([ 20, 50, 100, 5, 30 ]) + ')';
</script>