<?php
require '../config.php';
$middleware->run('auth');

if ( !($_SERVER['REQUEST_METHOD'] == 'POST' || !$_POST) )
{
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	die();
}

if ( !isset($_GET['id']) )
{
		echo '<script>alert("No id provided!")';
		echo '<script>setTimeout(function() { window.location = "/users/index.php" }, 2500)</script>';
		die();
}

$id = $_GET['id'];
$record = (new Record)->find($id);
$record->service = $_POST['service'];
$record->save();

?>

<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Update Success!</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
</head>
<body>
	<h1 class="text-center"> Update success, cool.. </h1>

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