<?php

?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Splitweb website">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Splitweb</title>
	<style type="text/css">
	* {
		padding: 0;
		margin: 0;
	}
	html, body {
		height: 100em;
	}
	#bg1 {
		background: red;
		height: 1em;
	}
	</style>
</head>
<body>
	<script type="text/javascript" src="vendor/skrollr/dist/skrollr.min.js"></script>
	<script type="text/javascript">
		var s = skrollr.init({
	    render: function(data) {
	        document.querySelector('.scrollpos').innerHTML = data.curTop;
		    }
		});
	</script>
</body>
</html>