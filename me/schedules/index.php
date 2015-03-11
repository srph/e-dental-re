<?php
require __DIR__ . '/../../config.php';
$middleware->run('auth');
$schedules = $auth->user()->schedules;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Your Schedules</title>
	<script src="/inc/jquery.js"></script>
	<script src="/inc/bootstrap.js"></script>
	<link href="/inc/bootstrap.css " rel="stylesheet" />
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
			<?php require __DIR__ . '/../../inc/sidebar.php'; ?>
			<div class="col-md-9">
				<h1> Your Schedules </h1>
				
				<?php if ( !$schedules->count() ): ?>
					<div class="alert alert-info">
						You have not appointed any schedules yet.
					</div>
				<?php else: ?>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Date Appointed</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach($schedules as $schedule): ?>
								<tr>
									<td><?php echo $schedule->id; ?></td>
									<td><?php echo date('m d, Y', strtotime($schedule->appointed_at)); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php endif; ?>
			</div>
		</div>
	</div>
</body>
</html>