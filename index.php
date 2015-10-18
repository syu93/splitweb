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
	<link rel="stylesheet" type="text/css" href="src/css/modal.css">
	<link rel="stylesheet" type="text/css" href="src/css/scene-1.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate.css/animate.min.css">
</head>
<body>
	<div id="skrollr-body" style="min-width: 1px; position: absolute; z-index: 0; top: 0px;">
		<div class="container">
			<div class="header"
				data-0="height: 166px; background: rgb(53, 66, 80);"
				data-2000="height: 50px; background: rgb(74, 74, 74);">
				<div class="header-avatar">
					<img class="avatar" src="src/img/site/syu93.png"
						data-0="width: 162px; background: rgb(255, 255, 255); border: solid #f1f1f1 2px; opacity: 1;"
						data-2000="width: 46px; background: rgb(74, 74, 74); border: solid #f1f1f1 0px; opacity: 0.5;"
					>
				</div>
				<div class="header-content">
					Splitweb
				</div>
				<div class="header-menu">
					<button class="menu-button"
						data-0="margin: 0 7px 50% 0;"
						data-2000="margin: 0 7px 0% 0;"
					>&#9776;</button>
				</div>
			</div>
			<div class="scene-container">
				<div class="scene-1"
					data-1000="background: !#4a4a4a url('src/img/scene-1/stars.png');"
					data-2000="background: !#4a4a4a url('src/img/scene-1/stars.png');"
				>
					<div class="modal mdl-right scroller-note"
						data-0="opacity: 1;"
						data-500="opacity: 0;">
						<span class="scroll-message-arrow">&#10549;</span>
						<span class="scroll-message-text">Scroll down to animate !</span>
					</div>
					<img class="img-rocket animated bounceInLeft"
					src="src/img/scene-1/rocket.png"
					data-0=    "top: 15%; left:  4%; width:  4%;"
					data-200=  "top:  1%; left: 8%; width:  8%;"
					data-400=  "top: 15%; left: 12%; width: 12%;"
					data-800=  "top: 10%; left: 20%; width: 16%;"
					data-1000= "top:  0%; left: 37%; width: 20%;"
					>	
					<img class="img-earth"
					src="src/img/scene-1/earth.png"
					data-0="top: 25%; left: 10%; width: 0%;"
					data-1000="top: 50%; left: 35%; width: 24%;"
					>
					<img class="img-me spacesuit"
					src="src/img/scene-1/HAA_0058.png"
					data-1000="top: 15%; left: 50%; width: 0%;"
					data-1500="top: 23%; left: 41%; width: 19%;"
					>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="vendor/skrollr/dist/skrollr.min.js"></script>
	<script type="text/javascript" src="src/js/helper.js"></script>
	<script type="text/javascript" src="src/js/animation.js"></script>
</body>
</html>