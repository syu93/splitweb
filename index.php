<?php

?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Splitweb website">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Splitweb</title>
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
	<link rel="stylesheet" type="text/css" href="src/css/custom.animation.css">
	<link rel="stylesheet" type="text/css" href="src/css/intro.css">
	<link rel="stylesheet" type="text/css" href="src/css/header.css">
	<link rel="stylesheet" type="text/css" href="src/css/scene-1.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate.css/animate.min.css">
</head>
<body>
	<div id="skrollr-body" style="min-width: 1px; position: absolute; z-index: 0; top: 0px;">
		<div class="loading">
			<div class="popup">
				<div class="content">
					<h1> Welcome to <b>splitweb</b></h1>
					<div class="animation">
						<img class="intro-rocket float-left" src="src/img/scene-1/rocket.png">
						<h1>Hi, I'm <b>Syu93</b>, a young web delevoper.<br>I love experiemeting things in web. <br>Take a look. 
							<button class="" data-close-popup><pan>&#10148;</span>Enter my world</button>
						</h1>
						<img class="intro-earth"
							src="src/img/scene-1/earth.png">
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="display:none;">
			<div class="header"
				data-0="height: 166px; background: rgb(53, 66, 80);"
				data-2000="height: 50px; background: rgb(74, 74, 74);"
			>
				<img class="avatar" src="src/img/site/syu93.png"
					data-0="width: 162px; background: rgb(255, 255, 255); border: solid #f1f1f1 2px; opacity: 1;"
					data-2000="width: 46px; background: rgb(74, 74, 74); border: solid #f1f1f1 0px; opacity: 0.5;"
				>
				<div class="header-content">
					Splitweb
				</div>
			</div>
			<div class="scene-container">
				<div class="scene-1"
					data-1000="background: !#4a4a4a url('src/img/scene-1/stars.png');"
					data-2000="background: !#4a4a4a url('src/img/scene-1/stars.png');"
				>
					<div class="rocket">
						<img class="img-rocket animated bounceInLeft skrollable rendered"
						src="src/img/scene-1/rocket.png"
						data-0="top: 30%; left: 5%; width: 4%;"
						data-200="top: 25%; left: 10%; width: 12%"
						data-400="top: 12%; left: 19%; width: 15%"
						data-800="top: 30%; left: 25%; width: 20%"
						data-1000="top: 10%; left:37%; width: 20%"
						>
					</div>
					<div class="me">
						<img class="img-me skrollable rendered"
						src="src/img/scene-1/HAA_0058.png"
						data-1000="top: 20%; left: 50%; width: 0%;"
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
	<script type="text/javascript" src="src/js/helper.js"></script>
	<script type="text/javascript" src="src/js/animation.js"></script>
</body>
</html>