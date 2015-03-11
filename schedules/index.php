<?php

require __DIR__ . '/../config.php';
$middleware->run('admin');
$schedules = Schedule::all();
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>EDMS - Manage schedules</title>
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
				<?php if ( $schedules->count() ): ?>
					<div class="clearfix">
						<a href="/schedules/create.php" class="btn btn-success btn-left">
							<i class="glyphicon glyphicon-schedule"></i>
							Create a schedule
						</a>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Patient (User)</th>
								<th>Appointed Date</th>
							</tr>
						</thead>
		 
						<tbody>
							<?php foreach ( $schedules as $schedule ): ?>
								<tr>
									<td> <?php echo $schedule->user->username . " ({$schedule->user->first_name} {$schedule->user->last_name})"; ?></td>
									<td> <?php echo date('Y-m-d', strtotime($schedule->appointed_at)); ?> </td>
									<td>
										<a href="edit.php?id=<?php echo $schedule->id;?>" class="btn btn-primary btn-xs">
											<i class="glyphicon glyphicon-pencil"></i>
										</a>

		   							<a href="delete.php?id=<?php echo $schedule->id;?>" class="btn btn-danger btn-xs">
		   								<i class="glyphicon glyphicon-trash"></i>
		   							</a>
		   						</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
		 
				<?php else: ?>
					<h1> No schedule(s) have already been made </h1>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
