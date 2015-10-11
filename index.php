<?php

?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Splitweb website">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Splitweb</title>
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>
<body>
	<div id="skrollr-body">
		<div class="scene-container">
			<div class="header"></div>
			<div class="scene-1">
				<div class="scene-1-bg">
					<div class="rocket">
						<img class=""
						src="src/img/scene-1/rocket.png"
						data-100="margin-top:100px; width:500px;">
					</div>
				</div>
			</div>
		</div>
		<div class="scene-container">
			<div class="scene-2">
				<div class="scene-2-bg"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="vendor/skrollr/dist/skrollr.min.js"></script>
	<script type="text/javascript">
          skrollr.init({
            smoothScrolling: true,
            scale: 2,
            easing: 'swing'
          });
	</script>
</body>
</html>