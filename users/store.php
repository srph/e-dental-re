<?php

require __DIR__ . '/../config.php';
$middleware->run('admin');

if ( $_SERVER['REQUEST_METHOD'] && $_POST )
{
    $input = $_POST;

    $user = new User();
    $user->username = $input['username'];
    $user->password = $hasher->make($input['password']);
    $user->first_name = $input['first_name'];
    $user->last_name = $input['last_name'];
    $user->birthdate = date('Y-m-d', strtotime($input['birthdate']));
    $user->address = $input['address'];
    $user->is_admin = isset($input['is_admin']) && $input['is_admin'] == "on" ? true : false;
    $user->save();
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
	<title>EDMS - Create Success!</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
</head>
<body>
	<h1 class="text-center"> Create success, nice.. </h1>

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