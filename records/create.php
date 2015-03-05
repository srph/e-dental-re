<?php
require __DIR__ . '/../config.php';

$middleware->run('auth');
$users = User::all();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Create a new record </title>
	<meta charset="utf-8">

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
			<?php include '../inc/sidebar.php'; ?>
			
			<div class="col-md-9">
				<form method="POST" action="./store.php">
					<div class="form-group">
						<label> Patient Name </label>
						<select name="user_id" class="form-control">
							<?php foreach($users as $user): ?>
								<option value="<?php echo $user->id; ?>">
									<?php echo "{$user->username} ({$user->first_name} {$user->last_name})"; ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="form-group">
						<label> Service </label>
						<select name="service" class="form-control">
							<?php foreach(['orthodontic treatment', 'fluoride cleaning', 'braces'] as $service): ?>
								<option value="<?php echo $service; ?>"><?php echo ucfirst($service); ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="clearfix">
						<button type="submit" class="btn btn-success pull-left"> Create </button>
						<a href="/records/" class="btn btn-warning pull-right"> Cancel </a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>