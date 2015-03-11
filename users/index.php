<?php

require __DIR__ . '/../config.php';
$middleware->run('admin');
$users = User::all();
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Manage Users</title>
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
				<?php if ( $users->count() ): ?>
					<div class="clearfix">
						<a href="/users/create.php" class="btn btn-success btn-left">
							<i class="glyphicon glyphicon-user"></i>
							Create a user
						</a>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Username</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Address</th>
								<th>Options</th>
							</tr>
						</thead>
		 
						<tbody>
							<?php foreach ( $users as $user ): ?>
								<tr>
									<td> <strong><?php echo $user->username; ?></strong> </td>
									<td> <?php echo $user->first_name; ?> </td>
									<td> <?php echo $user->last_name; ?> </td>
									<td> <?php echo $user->address; ?> </td>
									<td>
										<a href="edit.php?id=<?php echo $user->id;?>" class="btn btn-primary btn-xs">
											<i class="glyphicon glyphicon-pencil"></i>
										</a>

		   							<a href="delete.php?id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">
		   								<i class="glyphicon glyphicon-trash"></i>
		   							</a>
		   						</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
		 
				<?php else: ?>
					<h1> No user(s) have already been made </h1>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
