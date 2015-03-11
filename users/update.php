<?php

require __DIR__ . '/../config.php';
$middleware->run('admin');

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST)
{
	if ( isset($_GET['id'])	 )
	{
		$id = $_GET['id'];
		$input = $_POST;
		$user = (new User)->find($id);
	    $user->username = $input['username'];
	    $user->password = $hasher->make($input['password']);
	    $user->first_name = $input['first_name'];
	    $user->last_name = $input['last_name'];
	    $user->birthdate = date('Y-m-d', strtotime($input['birthdate']));
	    $user->address = $input['address'];
	    $user->save();
	}
	else
	{
		echo '<script>alert("No id provided!")';
		echo '<script>setTimeout(function() { window.location = "/users/index.php" }, 2500)</script>';
		die();
	}
}
else
{
		header('Location: /index.php');
		die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Update Success!</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
</head>
<body>
	<h1 class="text-center"> Update success, awesome.. </h1>

	<h4 class="text-center"> Sending you back now in <span style="color: red;">3</span>. </h4>
	<script>
		var $span = document.querySelector('span');

		var interval = setInterval(function() {
			var text = parseInt($span.textContent, 10);

			if ( text == 1 ) return window.location = '/users/index.php';

			$span.textContent =  text - 1;
			interval();
		}, 1000);
	</script>
</body>
</html>