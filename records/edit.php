<?php
require __DIR__ . '/../config.php';
$middleware->run('auth');

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

$record = (new Record)->find($id);
$users = User::all();
?>

<!DOCTYPE html>
<html>
<head>
	<title> EDMS - Update a record </title>
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
				<form method="POST" action="/records/update.php?id=<?php echo $record->id; ?>">
					<div class="form-group">
						<label> Patient Name </label>
						<select name="user_id" class="form-control" disabled="disabled">
							<?php foreach($users as $user): ?>
								<option value="<?php echo $user->id; ?>" <?php echo $record->user->id == $user->id ? 'selected="selected"' : '' ?>>
									<?php echo "{$user->username} ({$user->first_name} {$user->last_name})"; ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="form-group">
						<label> Service </label>
						<select name="service" class="form-control">
							<?php foreach(['orthodontic treatment', 'fluoride cleaning', 'braces'] as $service): ?>
								<option value="<?php echo $service; ?>" <?php echo $record->service == $service ? 'selected="selected"' : '' ?>>
									<?php echo ucfirst($service); ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>

					<button type="submit" class="btn btn-success pull-left"> Update </button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>