<?php

require __DIR__ . '/../config.php';
$middleware->run('guest');
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Registration</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
	<style>
		.container {
			margin-top: 50px;
			margin-bottom: 50px;
			width: 768px;
		}
	</style>
</head>
<body>
	<div class="container">
				<form action="/register/post.php" method="POST">
					<div class="row form-group">
						<div class="col-md-6">
							<label>Username</label>
							<input type="text" class="form-control" name="username">
						</div>

						<div class="col-md-6">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>
					</div>

					<hr>

					<div class="row form-group">
						<div class="col-md-6">
							<label>First Name</label>
							<input type="text" class="form-control" name="first_name">
						</div>

						<div class="col-md-6">
							<label>Last Name</label>
							<input type="text" class="form-control" name="last_name">
						</div>			
					</div>

					<div class="row form-group">
						<div class="col-md-6">
							<label>Birthdate</label>
							<input type="text" class="form-control" name="birthdate">
						</div>

						<div class="col-md-6">
							<label>Address</label>
							<input type="text" class="form-control" name="address">
						</div>
					</div>

					<div class="clearfix">
						<button class="btn btn-success pull-left" type="submit">
							Create user
						</button>

						<a class="btn btn-warning pull-right" href="/login/">
							Cancel (I want to login..)
						</a>						
					</div>
				</form>
	</div>
</body>
</html>