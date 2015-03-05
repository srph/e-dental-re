<?php

require __DIR__ . '/config.php';
$auth->logout();

?>

<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Logging Out!</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
</head>
<body>
	<h1 class="text-center"> Successfully logged out, come back again!</h1>

	<h4 class="text-center"> Sending you back now in <span style="color: red;">3</span>. </h4>
	<script>
		var $span = document.querySelector('span');

		var interval = setInterval(function() {
			var text = parseInt($span.textContent, 10);

			if ( text == 1 ) return window.location = 'index.php';

			$span.textContent =  text - 1;
			interval();
		}, 1000);
	</script>
</body>
</html>