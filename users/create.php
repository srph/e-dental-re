<?php

require __DIR__ . '/../config.php';
$middleware->run('admin');
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Create a user</title>
	<link rel="stylesheet" href="/inc/bootstrap.css">
	<style>
		.container {
			margin-top: 50px;
			margin-bottom: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php require __DIR__ . '/../inc/sidebar.php'; ?>
			<div class="col-md-9">
				<form action="/users/store.php" method="POST">
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

					<button class="btn btn-success" type="submit">
						Create user
					</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>