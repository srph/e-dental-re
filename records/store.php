<?php
require '../config.php';
$middleware->run('auth');

if ( !($_SERVER['REQUEST_METHOD'] == 'POST' || !$_POST) )
{
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	die();
}

$record = new Record();
$record->user_id = $_POST['user_id'];
$record->service = $_POST['service'];
$record->save();

?>

<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Create Success!</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
</head>
<body>
	<h1 class="text-center"> Create success, good.. </h1>

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