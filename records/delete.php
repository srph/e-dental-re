<?php

require __DIR__ . '/../config.php';
$middleware->run('auth');

if ( isset($_GET['id'])	 )
{
	$id = $_GET['id'];
	$user = (new Record)->find($id);
	$user->delete($id);
}
else
{
	echo '<script>alert("No id provided!")';
	echo '<script>setTimeout(function() { window.location = "/records/index.php" }, 2500)</script>';
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Delete Success!</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
</head>
<body>
	<h1 class="text-center"> Delete success, neat.. ! </h1>

	<h4 class="text-center"> Sending you back now in <span style="color: red;">3</span>. </h4>
	<script>
		var $span = document.querySelector('span');

		var interval = setInterval(function() {
			var text = parseInt($span.textContent, 10);

			if ( text == 1 ) return window.location = '/records/index.php';

			$span.textContent =  text - 1;
			interval();
		}, 1000);
	</script>
</body>
</html>