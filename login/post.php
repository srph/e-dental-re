<?php

require __DIR__ . '/../config.php';
$middleware->run('guest');

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST)
{
	$input = $_POST;
	
	$attempt = $auth->attempt([
		'username' => $input['username'],
		'password' => $input['password']
	]);

	if ( $attempt )
	{
		header('Location: /success.php');
		die();
	}
}
else
{
	die();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Login!</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
</head>
<body>
	<h1 class="text-center"> Invalid username/password </h1>

	<h4 class="text-center"> Sending you back now in <span style="color: red;">3</span>. </h4>
	<script>
		var $span = document.querySelector('span');

		var interval = setInterval(function() {
			var text = parseInt($span.textContent, 10);

			if ( text == 1 ) return history.back();


			$span.textContent =  text - 1;
			interval();
		}, 1000);
	</script>
</body>
</html>