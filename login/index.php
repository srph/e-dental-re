<?php

require __DIR__ . '/../config.php';
$middleware->run('guest');
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Login</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
	<style>
		.container {
			margin-top: 50px;
			margin-bottom: 50px;
			width: 350px;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="/login/post.php" method="POST">
			<div class="form-group">
				<label>Username</label>

				<div class="input-group">
					<span class="input-group-addon">
						<i class="glyphicon glyphicon-user"></i>
					</span>
					<input type="text" class="form-control" name="username">
				</div>
			</div>

			<div class="form-group">
				<label>Password</label>

				<div class="input-group">
					<span class="input-group-addon">
						<i class="glyphicon glyphicon-lock"></i>
					</span>
					<input type="password" class="form-control" name="password">
				</div>
			</div>

			<div class="clearfix">
				<button type="submit" class="btn btn-success pull-left">
					Login
				</button>

				<a href="/register/" class="btn btn-primary pull-right">
					Register
				</a>
			</div>
		</form>
	</div>
</body>
</html>