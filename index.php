<?php

?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Splitweb website">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Splitweb</title>
	<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate.css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/pure/pure-min.css">
</head>
<body>
	<div id="skrollr-body" style="min-width: 1px; position: absolute; z-index: 0; top: 0px; height: 100000;">
		<div class="loading">
			<div class="popup">
				<header>
					<button class="pure-button button-error" data-close-popup>Close</button>
				</header>
				<div class="content">
					<h1> Welcome to <b>splitweb</b></h1>
					<div class="animation">
						<img class="intro-rocket" src="src/img/scene-1/rocket.png">
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="display:none;">
			<div class="scene-container">
				<div class="header"></div>
				<div class="scene-1"
					data-1000="background: !#4a4a4a url('src/img/scene-1/stars.png');"
					data-2000="background: !#4a4a4a url('src/img/scene-1/stars.png');"
				>
					<div class="rocket">
						<img class="img-rocket animated bounceInLeft skrollable rendered"
						src="src/img/scene-1/rocket.png"
						data-0="top: 10%; left: 5%; width: 4%;"
						data-200="top: 5%; left: 10%; width: 12%"
						data-400="top: 1%; left: 19%; width: 15%"
						data-800="top: 10%; left: 25%; width: 20%"
						data-1000="top: 15%; left:37%; width: 20%"
						>
					</div>
					<div class="me">
						<img class="img-me skrollable rendered"
						src="src/img/scene-1/HAA_0058.png"
						data-1000="top: 25%; left: 50%; width: 0%;"
						data-1500="top: 25%; left: 40%; width: 19%;"
						>
					</div>
					<div class="earth">
						<img class="img-earth skrollable rendered"
						src="src/img/scene-1/earth.png"
						data-0="top: 20%; left: 30%; width: 0%;"
						data-1000="top: 52%; left: 35%; width: 24%;"
						>
					</div>
				</div>
			</div>
			<div class="scene-container">
				<div class="scene-2">
					<div class="scene-2-bg"></div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="vendor/skrollr/dist/skrollr.min.js"></script>
	<script type="text/javascript">
		var scroller = skrollr.init({
			smoothScrolling: true,
			scale: 2,
			easing: {
		        //This easing will sure drive you crazy
		        wtf: Math.random,
		        inverted: function(p) {
		            return 1 - p;
		        }
    		}
		});
	</script>
	<script type="text/javascript">
	(function(){
		// intro.js
		var popup 	= document.querySelector('.loading .popup');
			popup.classList.add("animated");
			popup.classList.add("shake");
	      	popup.classList.add("infinite");
	      	popup.style.animationDuration = "10s";

      	var container = document.querySelector('.container');

      	var btn 	= document.querySelector('[data-close-popup]');
	      		btn.addEventListener('click', function(e){
			      	popup.classList.remove("shake");
			      	popup.classList.remove("infinite");
			      	popup.style.animationDuration = "1s";
					popup.classList.add("bounceOutRight");
					container.style.display = "block";
	      		},false);

		var rocket 	= document.querySelector('.intro-rocket');
			rocket.classList.add("animated");
			rocket.classList.add("bounceInLeft");
		("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', doSomething".split(" ")).forEach(
			function(e){
		      rocket.addEventListener(e, function(el) {
		      	rocket.classList.remove("bounceInLeft");
		      	rocket.classList.add("pulse");
		      	rocket.classList.add("infinite");
		      	rocket.style.animationDuration = "3s";
		      },false);
	    	});
	}(document, window));
	</script>
</body>
</html>