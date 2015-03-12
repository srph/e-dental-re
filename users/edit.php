<?php

require __DIR__ . '/../config.php';
$middleware->run('admin');

if ( isset($_GET['id'])	 )
{
	$id = $_GET['id'];
	$user = (new User)->find($id);
}
else
{
	echo '<script>alert("No id provided!")';
	echo '<script>setTimeout(function() { window.location = "/users/index.php" }, 2500)</script>';
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Update user</title>
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
				<form action="/users/update.php?id=<?php echo $user->id; ?>" method="POST">
					<div class="row form-group">
						<div class="col-md-6">
							<label>Username</label>
							<input type="text" class="form-control" name="username" value="<?php echo $user->username; ?>">
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
							<input type="text" class="form-control" name="first_name" value="<?php echo $user->first_name; ?>">
						</div>

						<div class="col-md-6">
							<label>Last Name</label>
							<input type="text" class="form-control" name="last_name" value="<?php echo $user->last_name; ?>">
						</div>			
					</div>

					<div class="row form-group">
						<div class="col-md-6">
							<label>Birthdate</label>
							<input type="text" class="form-control" name="birthdate" value="<?php echo date('m/d/Y', strtotime($user->birthdate)); ?>">
						</div>

						<div class="col-md-6">
							<label>Address</label>
							<input type="text" class="form-control" name="address" value="<?php echo $user->address; ?>">
						</div>
					</div>

					<hr>

					<div class="form-group">
						<label>
							<input type="checkbox" name="is_admin" <?php echo $user->is_admin ? 'checked' : ''; ?>>
							Is Admin
						</label>
					</div>

					<button class="btn btn-success" type="submit">
						Update user
					</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>